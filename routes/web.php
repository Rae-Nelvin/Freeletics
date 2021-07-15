<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CaptionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
Route::get('/gallerymore', [IndexController::class, 'gallerymore'])->name('gallerymore');

Route::prefix('auth')->group(function(){
    Route::post('/check',[MainController::class, 'check'])->name('auth.check');
    Route::get('/logout',[MainController::class, 'logout'])->name('auth.logout');
    Route::get('/login',[MainController::class, 'login'])->name('auth.login');
});

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/Author',[MainController::class, 'author'])->name('admin.author');
        Route::get('/Massworkout',[MainController::class, 'massworkout'])->name('admin.massworkout');
        Route::get('/Funrun',[MainController::class, 'funrun'])->name('admin.funrun');
        Route::get('/Weeks12',[MainController::class, 'weeks12'])->name('admin.weeks12');
        Route::get('/Event',[MainController::class, 'event'])->name('admin.event');
        Route::get('/Blog',[MainController::class, 'blog'])->name('admin.blog');
        Route::get('/Testimonial',[MainController::class, 'testimonial'])->name('admin.testimonial');
        Route::get('/Sponsor',[MainController::class, 'sponsor'])->name('admin.sponsor');
        Route::get('/Post',[MainController::class, 'post'])->name('admin.post');
        Route::get('/upload_photos/{id}',[PhotoController::class, 'upload_photos'])->name('admin.upload_photos');
        Route::post('/uploadphotos', [PhotoController::class, 'uploadphotos'])->name('admin.uploadphotos');
        Route::get('/upload_author/{id}',[PhotoController::class, 'upload_author'])->name('admin.upload_author');
        Route::get('/upload_post/{id}',[PhotoController::class, 'upload_post'])->name('admin.upload_post');
        Route::post('/uploadpost', [PhotoController::class, 'uploadpost'])->name('admin.uploadpost');
        Route::get('/edit_photos/{id}', [PhotoController::class, 'edit_photos'])->name('admin.edit_photos');
        Route::post('/editphotos', [PhotoController::class, 'editphotos'])->name('admin.editphotos');
        Route::get('/edit_post/{id}', [PhotoController::class, 'edit_post'])->name('admin.edit_post');
        Route::post('/editpost', [PhotoController::class, 'editpost'])->name('admin.editpost');
        Route::get('/delete/{id}', [PhotoController::class, 'delete'])->name('admin.delete_photos');
        Route::get('/upload_caption/{id}', [CaptionController::class, 'upload_caption'])->name('admin.upload_caption');
        Route::post('/uploadcaption',[CaptionController::class, 'uploadcaption'])->name('admin.uploadcaption');
    });
});