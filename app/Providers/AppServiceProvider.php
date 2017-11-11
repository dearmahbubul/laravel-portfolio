<?php

namespace App\Providers;

use App\Contact;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin.includes.sidebar',function ($view){
           $view->with('messages',Contact::where('status',1)->orderby('id','desc')->get());
        });
        View::composer('admin.includes.sidebar',function ($view){
           $view->with('total_messages',Contact::where('status',1)->count());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
