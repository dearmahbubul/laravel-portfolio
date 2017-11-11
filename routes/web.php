<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/admin-panel', 'HomeController@index');

Route::get('/','FrontController@index');
Route::post('/front-contact/store','ContactController@store');

Route::group(['middleware'=>'AdminAuth'],function (){
/*Administrator url registration*/
Route::get('/dashboard/administrator/create','AdministratorController@create');
Route::post('/dashboard/administrator/store','AdministratorController@store');
Route::get('/dashboard/administrator/manage','AdministratorController@index');
Route::get('/dashboard/administrator/show/{unique_id}','AdministratorController@show');
Route::get('/dashboard/administrator/unpublish/{unique_id}','AdministratorController@unPublish');
Route::get('/dashboard/administrator/publish/{unique_id}','AdministratorController@publish');
Route::get('/dashboard/administrator/edit/{unique_id}','AdministratorController@edit');
Route::PATCH('/dashboard/administrator/update/{unique_id}','AdministratorController@update');
Route::DELETE('/dashboard/administrator/destroy/{unique_id}','AdministratorController@destroy');




/*Skill url registration*/
Route::get('/dashboard/skill/manage','SkillController@index');
Route::get('/dashboard/skill/create','SkillController@create');
Route::post('/dashboard/skill/store','SkillController@store');
Route::get('/dashboard/skill/unpublish/{unique_id}','SkillController@unPublish');
Route::get('/dashboard/skill/publish/{unique_id}','SkillController@publish');
Route::get('/dashboard/skill/edit/{unique_id}','SkillController@edit');
Route::PATCH('/dashboard/skill/update/{unique_id}','SkillController@update');
Route::DELETE('/dashboard/skill/destroy/{unique_id}','SkillController@destroy');


/*Experience url registration*/
Route::get('/dashboard/experience/create','ExperienceController@create');
Route::post('/dashboard/experience/store','ExperienceController@store');
Route::get('/dashboard/experience/manage','ExperienceController@index');
Route::get('/dashboard/experience/show/{unique_id}','ExperienceController@show');
Route::get('/dashboard/experience/unpublish/{unique_id}','ExperienceController@unPublish');
Route::get('/dashboard/experience/publish/{unique_id}','ExperienceController@publish');
Route::get('/dashboard/experience/edit/{unique_id}','ExperienceController@edit');
Route::PATCH('/dashboard/experience/update/{unique_id}','ExperienceController@update');
Route::DELETE('/dashboard/experience/destroy/{unique_id}','ExperienceController@destroy');

/*Education url registration*/
Route::get('/dashboard/education/create','EducationController@create');
Route::post('/dashboard/education/store','EducationController@store');
Route::get('/dashboard/education/manage','EducationController@index');
Route::get('/dashboard/education/show/{unique_id}','EducationController@show');
Route::get('/dashboard/education/unpublish/{unique_id}','EducationController@unPublish');
Route::get('/dashboard/education/publish/{unique_id}','EducationController@publish');
Route::get('/dashboard/education/edit/{unique_id}','EducationController@edit');
Route::PATCH('/dashboard/education/update/{unique_id}','EducationController@update');
Route::DELETE('/dashboard/education/destroy/{unique_id}','EducationController@destroy');


/*Team url registration*/
Route::get('/dashboard/team/create','TeamController@create');
Route::post('/dashboard/team/store','TeamController@store');
Route::get('/dashboard/team/manage','TeamController@index');
Route::get('/dashboard/team/show/{unique_id}','TeamController@show');
Route::get('/dashboard/team/unpublish/{unique_id}','TeamController@unPublish');
Route::get('/dashboard/team/publish/{unique_id}','TeamController@publish');
Route::get('/dashboard/team/edit/{unique_id}','TeamController@edit');
Route::PATCH('/dashboard/team/update/{unique_id}','TeamController@update');
Route::DELETE('/dashboard/team/destroy/{unique_id}','TeamController@destroy');


/*Portfolio Category url registration*/
Route::get('/dashboard/portfolio-category/create','PortfolioCategoryController@create');
Route::post('/dashboard/portfolio-category/store','PortfolioCategoryController@store');
Route::get('/dashboard/portfolio-category/manage','PortfolioCategoryController@index');
Route::get('/dashboard/portfolio-category/show/{unique_id}','PortfolioCategoryController@show');
Route::get('/dashboard/portfolio-category/unpublish/{unique_id}','PortfolioCategoryController@unPublish');
Route::get('/dashboard/portfolio-category/publish/{unique_id}','PortfolioCategoryController@publish');
Route::get('/dashboard/portfolio-category/edit/{unique_id}','PortfolioCategoryController@edit');
Route::PATCH('/dashboard/portfolio-category/update/{unique_id}','PortfolioCategoryController@update');
Route::DELETE('/dashboard/portfolio-category/destroy/{unique_id}','PortfolioCategoryController@destroy');


/*Portfolio url registration*/
Route::get('/dashboard/portfolio/create','PortfolioController@create');
Route::post('/dashboard/portfolio/store','PortfolioController@store');
Route::get('/dashboard/portfolio/manage','PortfolioController@index');
Route::get('/dashboard/portfolio/show/{unique_id}','PortfolioController@show');
Route::get('/dashboard/portfolio/unpublish/{unique_id}','PortfolioController@unPublish');
Route::get('/dashboard/portfolio/publish/{unique_id}','PortfolioController@publish');
Route::get('/dashboard/portfolio/edit/{unique_id}','PortfolioController@edit');
Route::PATCH('/dashboard/portfolio/update/{unique_id}','PortfolioController@update');
Route::DELETE('/dashboard/portfolio/destroy/{unique_id}','PortfolioController@destroy');




/*testimonial url registration*/
Route::get('/dashboard/testimonial/create','TestimonialController@create');
Route::post('/dashboard/testimonial/store','TestimonialController@store');
Route::get('/dashboard/testimonial/manage','TestimonialController@index');
Route::get('/dashboard/testimonial/unpublish/{unique_id}','TestimonialController@unPublish');
Route::get('/dashboard/testimonial/publish/{unique_id}','TestimonialController@publish');
Route::get('/dashboard/testimonial/edit/{unique_id}','TestimonialController@edit');
Route::PATCH('/dashboard/testimonial/update/{unique_id}','TestimonialController@update');
Route::DELETE('/dashboard/testimonial/destroy/{unique_id}','TestimonialController@destroy');



/*Contact url registration*/

Route::get('/dashboard/contact/view/{unique_id}','ContactController@view');
Route::get('/dashboard/contact/manage','ContactController@index');
Route::get('/dashboard/contact/replay/{unique_id}','ContactController@replay');
Route::post('/dashboard/contact/send','ContactController@send');
Route::DELETE('/dashboard/contact/destroy/{unique_id}','ContactController@destroy');




/*Blog post Category url registration*/

    Route::get('dashboard/blog-post-category/create','BlogPostCategoryController@create');
    Route::post('/dashboard/blog-post-category/store','BlogPostCategoryController@store');
    Route::get('/dashboard/blog-post-category/manage','BlogPostCategoryController@index');
    Route::get('/dashboard/blog-post-category/show/{unique_id}','BlogPostCategoryController@show');
    Route::get('/dashboard/blog-post-category/unpublish/{unique_id}','BlogPostCategoryController@unPublish');
    Route::get('/dashboard/blog-post-category/publish/{unique_id}','BlogPostCategoryController@publish');
    Route::get('/dashboard/blog-post-category/edit/{unique_id}','BlogPostCategoryController@edit');
    Route::PATCH('/dashboard/blog-post-category/update/{unique_id}','BlogPostCategoryController@update');
    Route::DELETE('/dashboard/blog-post-category/destroy/{unique_id}','BlogPostCategoryController@destroy');




/*Blog post Category url registration*/
Route::get('dashboard/blog-post/create','BlogPostController@create');
Route::post('/dashboard/blog-post/store','BlogPostController@store');
Route::get('/dashboard/blog-post/manage','BlogPostController@index');
Route::get('/dashboard/blog-post/show/{unique_id}','BlogPostController@show');
Route::get('/dashboard/blog-post/unpublish/{unique_id}','BlogPostController@unPublish');
Route::get('/dashboard/blog-post/publish/{unique_id}','BlogPostController@publish');
Route::get('/dashboard/blog-post/edit/{unique_id}','BlogPostController@edit');
Route::PATCH('/dashboard/blog-post/update/{unique_id}','BlogPostController@update');
Route::DELETE('/dashboard/blog-post/destroy/{unique_id}','BlogPostController@destroy');

});