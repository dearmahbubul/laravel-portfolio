<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id');
            $table->string('category_id');
            $table->string('post_title',400);
            $table->text('post_content');
            $table->string('image',100);
            $table->string('image_two',100);
            $table->string('writer_id',100)->nullable();
            $table->tinyInteger('status');
            $table->tinyInteger('recycle_id')->nullable();
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
        Schema::dropIfExists('blog_posts');
    }
}
