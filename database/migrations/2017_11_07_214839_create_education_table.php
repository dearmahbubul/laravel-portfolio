<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id',100);
            $table->integer('starting_year');
            $table->integer('ending_year');
            $table->string('degree_name',100);
            $table->string('institute_name',100);
            $table->string('image',100);
            $table->text('comment');
            $table->tinyInteger('status');
            $table->tinyInteger('recycle_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
