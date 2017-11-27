<?php

namespace App\Http\Controllers;

use App\Contact;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderby('id','desc')->get();
        return view('admin.contact.manage',compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
        {
            $validator = Validator::make($request->all(),[
                'name'=>'required|regex:/^[\pL\s\-]+$/u|max:255',
                'email'=>'required|email|max:255',
                'subject'=>'string|max:255',
                'message'=>'required|string',

            ]);
            if($validator->fails())
            {
                return response()->json(
                    [
                        'error'=>true,
                        'message'=>$validator->messages(),
                        'code'=>400
                    ],400);
            }


            $unique_id = time().md5(rand(100000,10000000));
            DB::table('contacts')->insert([
                'unique_id'=>$unique_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message,
                'status'=>1
            ]);
            /*
             * Store data in one line
             * contact::create($request->all());
             * session()->flash('message','Data inserted successfully');
             * */
           // return redirect('/')->with('message','Message send successfully!');
            return response("Message send successfully, Thank you.");
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view($unique_id)
    {
        DB::table('contacts')
            ->where('unique_id',$unique_id)
            ->update([
            'status'=>0
        ]);
        $contact = contact::where('unique_id',$unique_id)->first();
        return view('admin.contact.view',compact('contact'));
    }
    public function replay($unique_id)
    {
        $contact = contact::where('unique_id',$unique_id)->first();
        return view('admin.contact.replay',compact('contact'));
    }
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:150',
            'email' => 'required|email',
            'subject' => 'max:400',
            'message' => 'required',
        ]);
        $data = $request->toArray();

        Mail::send('mail.replay-mail',$data,function ($message) use($data){
            $message->to($data['email']);
            $message->subject('Congratulation Mail');
        });

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $unique_id)
    {
        $this->validate($request,[
            'contact_name'=>'required',
            'contact_percentage'=>'required',
        ]);
        contact::where('unique_id',$unique_id)
            ->update([
                'contact_name'=>$request->contact_name,
                'contact_percentage'=>$request->contact_percentage,
                'status'=>$request->status
            ]);
        return redirect('/dashboard/contact/manage')->with('message','contact information updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unPublish($unique_id){
        contact::where('unique_id',$unique_id)
            ->update([
                'status'=>0
            ]);
        return redirect('/dashboard/contact/manage')->with('message','contact information UnPublished!');
    }
    public function publish($unique_id){
        contact::where('unique_id',$unique_id)
            ->update([
                'status'=>1
            ]);
        return redirect('/dashboard/contact/manage')->with('message','contact information Published!');
    }

    public function destroy($unique_id)
    {
        contact::where('unique_id',$unique_id)
            ->delete();
        return redirect('/dashboard/contact/manage')->with('message','contact information deleted!');
    }
}
