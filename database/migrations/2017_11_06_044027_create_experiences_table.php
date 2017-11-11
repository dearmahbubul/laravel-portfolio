<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id',100);
            $table->string('position',100);
            $table->string('company_name',100);
            $table->string('image',100);
            $table->string('starting_month',50);
            $table->integer('starting_year');
            $table->string('ending_month',50);
            $table->integer('ending_year');
            $table->string('present',50);
            $table->text('content');
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
        Schema::dropIfExists('experiences');
    }
}
