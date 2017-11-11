<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unique_id',100);
            $table->string('name',150);
            $table->string('age',150);
            $table->string('email',150);
            $table->string('email_two',150);
            $table->string('phone',150);
            $table->string('phone_two',150);
            $table->string('city',150);
            $table->string('country',150);
            $table->string('address',150);
            $table->string('image',150);
            $table->string('resume',150);
            $table->text('story_content');
            $table->text('experience_content');
            $table->text('education_content');
            $table->text('our_team_content');
            $table->text('testimonial_content');
            $table->text('blog_content');
            $table->string('hire_link',150)->nullable();
            $table->string('website_link',150)->nullable();
            $table->string('facebook_link',150)->nullable();
            $table->string('twitter_link',150)->nullable();
            $table->string('google_plus_link',150)->nullable();
            $table->string('linkedin_link',150)->nullable();
            $table->string('pinterest_link',150)->nullable();
            $table->string('dribble_link',150)->nullable();
            $table->string('behance_link',150)->nullable();
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
        Schema::dropIfExists('administrators');
    }
}
