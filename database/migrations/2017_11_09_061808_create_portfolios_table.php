<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id');
            $table->string('category_id');
            $table->string('item_name');
            $table->string('title',400);
            $table->text('content');
            $table->string('demo_url');
            $table->string('image');
            $table->string('image_two');
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
        Schema::dropIfExists('portfolios');
    }
}
