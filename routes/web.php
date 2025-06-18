<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\websiteController;

use App\Http\Controllers\SendMailController;


Route::get('send-php-mailer',[SendMailController::class, 'index'])->name('send.php.mailer');
Route::post('send-php-mailer-submit',[SendMailController::class, 'store'])->name('send.php.mailer.submit');

Route::get('/aboutus', 'App\Http\Controllers\websiteController@aboutus')->name('aboutus');
Route::get('/', 'App\Http\Controllers\websiteController@index')->name('index');
Route::get('/pmsuryaghar', 'App\Http\Controllers\websiteController@pmsuryaghar')->name('pmsuryaghar');

Route::get('/projects', 'App\Http\Controllers\websiteController@projects')->name('projects');
//Route::get('projects', [App\Http\Controllers\WebsiteController::class, 'projects'])->name('projects');

//Route::get('/thanks', [websiteController::class,'thanks'])->name('thanks');
Route::post('send-email', [websiteController::class,'sendEmail'])->name('send.email');
Route::get('/contact', 'App\Http\Controllers\websiteController@contact')->name('contact');

Route::get('/thanks', 'App\Http\Controllers\websiteController@thanks')->name('thanks');

Route::get('/16kva', 'App\Http\Controllers\websiteController@solakva')->name('16kva');
Route::get('/25kva', 'App\Http\Controllers\websiteController@pancheviskva')->name('25kva');
Route::get('/63kva', 'App\Http\Controllers\websiteController@tresashtkva')->name('63kva');
Route::get('/100kva', 'App\Http\Controllers\websiteController@shambharkva')->name('100kva');
Route::get('/200kva', 'App\Http\Controllers\websiteController@donshekva')->name('200kva');
Route::get('/1000kva', 'App\Http\Controllers\websiteController@hajarkva')->name('1000kva');
Route::get('/rsjpole', 'App\Http\Controllers\websiteController@rsjpole')->name('rsjpole');
Route::get('/conductor', 'App\Http\Controllers\websiteController@conductor')->name('conductor');
Route::get('/cables', 'App\Http\Controllers\websiteController@cables')->name('cables');
Route::get('/panels', 'App\Http\Controllers\websiteController@panels')->name('panels');
Route::get('/insulators', 'App\Http\Controllers\websiteController@insulators')->name('insulators');
Route::get('/fabrication', 'App\Http\Controllers\websiteController@fabrication')->name('fabrication');
Route::get('/cablejoiningkit', 'App\Http\Controllers\websiteController@cablejoiningkit')->name('cablejoiningkit');
Route::get('/nutbolts', 'App\Http\Controllers\websiteController@nutbolts')->name('nutbolts');
Route::get('/giwre', 'App\Http\Controllers\websiteController@giwre')->name('giwre');
Route::get('/polymers', 'App\Http\Controllers\websiteController@polymers')->name('polymers');
Route::get('/earthingstrip', 'App\Http\Controllers\websiteController@earthingstrip')->name('earthingstrip');
Route::get('/gallary', 'App\Http\Controllers\websiteController@gallary')->name('gallary');
Route::get('/download', 'App\Http\Controllers\websiteController@download')->name('download');



Route::get('/', 'App\Http\Controllers\websiteController@index')->name('index');
Route::get('/pvs', 'App\Http\Controllers\websiteController@pvs')->name('pvs');
Route::get('/article', 'App\Http\Controllers\websiteController@article')->name('article');
Route::get('/speaker', 'App\Http\Controllers\websiteController@speaker')->name('speaker');
Route::get('/book', 'App\Http\Controllers\websiteController@book')->name('book');
Route::get('/skv', 'App\Http\Controllers\websiteController@skv')->name('skv');
Route::get('/sd', 'App\Http\Controllers\websiteController@sd')->name('sd');

Route::get('/bs', 'App\Http\Controllers\websiteController@bs')->name('bs');
Route::get('/das', 'App\Http\Controllers\websiteController@das')->name('das');
Route::get('/esbl', 'App\Http\Controllers\websiteController@esbl')->name('esbl');
Route::get('/lmcs', 'App\Http\Controllers\websiteController@lmcs')->name('lmcs');

Route::get('/fed', 'App\Http\Controllers\websiteController@fed')->name('fed');
Route::get('/dmd', 'App\Http\Controllers\websiteController@dmd')->name('dmd');
Route::get('/sl', 'App\Http\Controllers\websiteController@sl')->name('sl');
Route::get('/ivc', 'App\Http\Controllers\websiteController@ivc')->name('ivc');
Route::get('/ip', 'App\Http\Controllers\websiteController@ip')->name('ip');
Route::get('/bhs', 'App\Http\Controllers\websiteController@bhs')->name('bhs');

Route::get('/epa', 'App\Http\Controllers\websiteController@epa')->name('epa');

Route::get('/about', 'App\Http\Controllers\websiteController@about')->name('about');

Route::get('/asp', 'App\Http\Controllers\websiteController@asp')->name('asp');
Route::get('/cs', 'App\Http\Controllers\websiteController@cs')->name('cs');
Route::get('/dv', 'App\Http\Controllers\websiteController@dv')->name('dv');
Route::get('/smprk', 'App\Http\Controllers\websiteController@smprk')->name('smprk');
Route::get('/blog', 'App\Http\Controllers\websiteController@blog')->name('blog');
Route::get('/blogdetails/{id}','App\Http\Controllers\websiteController@BlogDetails');
Route::get('/aboutus', 'App\Http\Controllers\websiteController@aboutus')->name('aboutus');
Route::get('/download', 'App\Http\Controllers\websiteController@download')->name('download');
Route::get('/video', 'App\Http\Controllers\websiteController@video')->name('video');
Route::get('/author', 'App\Http\Controllers\websiteController@author')->name('author');







Route::get('project-detail/{id}', [App\Http\Controllers\WebsiteController::class, 'project_detail'])->name('project_detail');


Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('optimize:clear');
    return 'DONE'; //Return anything
});

// Route::get('/admin', 'App\Http\Controllers\websiteController@admin')->name('admin');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// blog
Route::get('/blog_list', [App\Http\Controllers\BlogController::class, 'blog_list'])->name('blog_list');
Route::get('/add_blog', [App\Http\Controllers\BlogController::class, 'add_blog'])->name('add_blog');
Route::post('/create_blog', [App\Http\Controllers\BlogController::class, 'create_blog'])->name('create_blog');
Route::get('/edit_blog/{id}', [App\Http\Controllers\BlogController::class, 'edit_blog'])->name('edit_blog');
Route::post('/update_blog', [App\Http\Controllers\BlogController::class, 'update_blog'])->name('update_blog');
Route::get('/destroy_blog/{id}',[App\Http\Controllers\BlogController::class, 'destroy_blog'])->name('destroy_blog');
Route::get('delimg/{blog_id}/{image_id}', [App\Http\Controllers\BlogController::class, 'delimage'])->name('delimage');

// Project



Route::get('/projects_list', [App\Http\Controllers\ProjectsController::class, 'projects_list'])->name('projects_list');
Route::get('/add_projects', [App\Http\Controllers\ProjectsController::class, 'add_projects'])->name('add_projects');
Route::post('/create_projects', [App\Http\Controllers\ProjectsController::class, 'create_projects'])->name('create_projects');
Route::get('/edit_projects/{id}', [App\Http\Controllers\ProjectsController::class, 'edit_projects'])->name('edit_projects');
Route::post('/update_projects', [App\Http\Controllers\ProjectsController::class, 'update_projects'])->name('update_projects');
Route::get('/destroy_projects/{id}',[App\Http\Controllers\ProjectsController::class, 'destroy_projects'])->name('destroy_projects');
Route::get('delimg/{projects_id}/{image_id}', [App\Http\Controllers\ProjectsController::class, 'delimage'])->name('delimage');





// article
Route::get('/article_list', [App\Http\Controllers\ArticleController::class, 'article_list'])->name('article_list');
Route::get('/add_article', [App\Http\Controllers\ArticleController::class, 'add_article'])->name('add_article');
Route::post('/create_article', [App\Http\Controllers\ArticleController::class, 'create_article'])->name('create_article');
Route::get('/edit_article/{id}', [App\Http\Controllers\ArticleController::class, 'edit_article'])->name('edit_article');
Route::post('/update_article', [App\Http\Controllers\ArticleController::class, 'update_article'])->name('update_article');
Route::get('/destroy_article/{id}',[App\Http\Controllers\ArticleController::class, 'destroy_article'])->name('destroy_article');
Route::get('delimg/{article_id}/{image_id}', [App\Http\Controllers\ArticleController::class, 'delimage'])->name('delimage');

// Speaker
Route::get('/speaker_list', [App\Http\Controllers\SpeakerController::class, 'speaker_list'])->name('speaker_list');
Route::get('/add_speaker', [App\Http\Controllers\SpeakerController::class, 'add_speaker'])->name('add_speaker');
Route::post('/create_speaker', [App\Http\Controllers\SpeakerController::class, 'create_speaker'])->name('create_speaker');
Route::get('/edit_speaker/{id}', [App\Http\Controllers\SpeakerController::class, 'edit_speaker'])->name('edit_speaker');
Route::post('/update_speaker', [App\Http\Controllers\SpeakerController::class, 'update_speaker'])->name('update_speaker');
Route::get('/destroy_speaker/{id}',[App\Http\Controllers\SpeakerController::class, 'destroy_speaker'])->name('destroy_speaker');
Route::get('delimg/{speaker_id}/{image_id}', [App\Http\Controllers\SpeakerController::class, 'delimage'])->name('delimage');


// Book
Route::get('/book_list', [App\Http\Controllers\BookController::class, 'book_list'])->name('book_list');
Route::get('/add_book', [App\Http\Controllers\BookController::class, 'add_book'])->name('add_book');
Route::post('/create_book', [App\Http\Controllers\BookController::class, 'create_book'])->name('create_book');
Route::get('/edit_book/{id}', [App\Http\Controllers\BookController::class, 'edit_book'])->name('edit_book');
Route::post('/update_book', [App\Http\Controllers\BookController::class, 'update_book'])->name('update_book');
Route::get('/destroy_book/{id}',[App\Http\Controllers\BookController::class, 'destroy_book'])->name('destroy_book');
Route::get('delimg/{book_id}/{image_id}', [App\Http\Controllers\BookController::class, 'delimage'])->name('delimage');







// gallery
Route::get('/gallery_list', [App\Http\Controllers\GalleryController::class, 'gallery_list'])->name('gallery_list');
Route::get('/add_gallery', [App\Http\Controllers\GalleryController::class, 'add_gallery'])->name('add_gallery');
Route::post('/create_gallery', [App\Http\Controllers\GalleryController::class, 'create_gallery'])->name('create_gallery');
Route::get('/edit_gallery/{id}', [App\Http\Controllers\GalleryController::class, 'edit_gallery'])->name('edit_gallery');
Route::post('/update_gallery', [App\Http\Controllers\GalleryController::class, 'update_gallery'])->name('update_gallery');
Route::get('/destroy_gallery/{id}',[App\Http\Controllers\GalleryController::class, 'destroy_gallery'])->name('destroy_gallery');
Route::get('del_gallery_img/{gallery_id}/{image_id}', [App\Http\Controllers\GalleryController::class, 'del_gallery_img'])->name('del_gallery_img');



// video
Route::get('/video_list', [App\Http\Controllers\VideoController::class, 'video_list'])->name('video_list');
Route::get('/add_video', [App\Http\Controllers\VideoController::class, 'add_video'])->name('add_video');
Route::post('/create_video', [App\Http\Controllers\VideoController::class, 'create_video'])->name('create_video');
Route::get('/edit_video/{id}', [App\Http\Controllers\VideoController::class, 'edit_video'])->name('edit_video');
Route::post('/update_video', [App\Http\Controllers\VideoController::class, 'update_video'])->name('update_video');
Route::get('/destroy_video/{id}',[App\Http\Controllers\VideoController::class, 'destroy_video'])->name('destroy_video');
Route::get('del_video_img/{video_id}/{image_id}', [App\Http\Controllers\VideoController::class, 'del_video_img'])->name('del_video_img');



// slider
/*Route::get('/slider_list', [App\Http\Controllers\SliderController::class, 'slider_list'])->name('slider_list');
Route::get('/add_slider', [App\Http\Controllers\SliderController::class, 'add_slider'])->name('add_slider');
Route::post('/create_slider', [App\Http\Controllers\SliderController::class, 'create_slider'])->name('create_slider');
Route::get('/edit_slider/{id}', [App\Http\Controllers\SliderController::class, 'edit_slider'])->name('edit_slider');
Route::post('/update_slider', [App\Http\Controllers\SliderController::class, 'update_slider'])->name('update_slider');
Route::get('/destroy_slider/{id}',[App\Http\Controllers\SliderController::class, 'destroy_slider'])->name('destroy_slider');*/


Route::get('/slider_list', [App\Http\Controllers\SliderController::class, 'slider_list'])->name('slider_list');
Route::get('/add_slider', [App\Http\Controllers\SliderController::class, 'add_slider'])->name('add_slider');
Route::post('/create_slider', [App\Http\Controllers\SliderController::class, 'create_slider'])->name('create_slider');
Route::get('/edit_slider/{id}', [App\Http\Controllers\SliderController::class, 'edit_slider'])->name('edit_slider');
Route::post('/update_slider', [App\Http\Controllers\SliderController::class, 'update_slider'])->name('update_slider');
Route::get('/destroy_slider/{id}',[App\Http\Controllers\SliderController::class, 'destroy_slider'])->name('destroy_slider');
Route::get('del_slider_img/{slider_id}/{image_id}', [App\Http\Controllers\SliderController::class, 'del_slider_img'])->name('del_slider_img');




// testimonial
Route::get('/testimonial_list', [App\Http\Controllers\TestimonialController::class, 'testimonial_list'])->name('testimonial_list');
Route::get('/add_testimonial', [App\Http\Controllers\TestimonialController::class, 'add_testimonial'])->name('add_testimonial');
Route::post('/create_testimonial', [App\Http\Controllers\TestimonialController::class, 'create_testimonial'])->name('create_testimonial');
Route::get('/edit_testimonial/{id}', [App\Http\Controllers\TestimonialController::class, 'edit_testimonial'])->name('edit_testimonial');
Route::post('/update_testimonial', [App\Http\Controllers\TestimonialController::class, 'update_testimonial'])->name('update_testimonial');
Route::get('/destroy_testimonial/{id}',[App\Http\Controllers\TestimonialController::class, 'destroy_testimonial'])->name('destroy_testimonial');



// download
Route::get('/download_list', [App\Http\Controllers\DownloadController::class, 'download_list'])->name('download_list');
Route::get('/add_download', [App\Http\Controllers\DownloadController::class, 'add_download'])->name('add_download');
Route::post('/create_download', [App\Http\Controllers\DownloadController::class, 'create_download'])->name('create_download');
Route::get('/edit_download/{id}', [App\Http\Controllers\DownloadController::class, 'edit_download'])->name('edit_download');
Route::post('/update_download', [App\Http\Controllers\DownloadController::class, 'update_download'])->name('update_download');
Route::get('/destroy_download/{id}',[App\Http\Controllers\DownloadController::class, 'destroy_download'])->name('destroy_download');
Route::get('del_download_img/{download_id}/{image_id}', [App\Http\Controllers\DownloadController::class, 'del_download_img'])->name('del_download_img');

Route::group(['prefix'=>'admin','middleware'=> 'auth'], function () {

});