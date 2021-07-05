<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotoController;

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
Route::get('/', function () {
    return view('home');
});

Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');


Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('/admin/dashboard',[MainController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');
    Route::get('/admin/author',[MainController::class, 'author'])->name('admin.author');
    Route::get('/admin/massworkout',[MainController::class, 'massworkout'])->name('admin.massworkout');
    Route::get('/admin/funrun',[MainController::class, 'funrun'])->name('admin.funrun');
    Route::get('/admin/weeks12',[MainController::class, 'weeks12'])->name('admin.weeks12');
    Route::get('/admin/event',[MainController::class, 'event'])->name('admin.event');
    Route::get('/admin/blog',[MainController::class, 'blog'])->name('admin.blog');
    Route::get('/admin/testimonial',[MainController::class, 'testimonial'])->name('admin.testimonial');
    Route::get('/admin/sponsor',[MainController::class, 'sponsor'])->name('admin.sponsor');
    Route::get('/admin/calender',[MainController::class, 'calender'])->name('admin.calender');
    Route::get('/admin/upload_photos',[PhotoController::class, 'upload_photos'])->name('admin.upload_photos');
    Route::post('/admin/upload', [PhotoController::class, 'upload'])->name('admin.upload');
    Route::get('/admin/edit/{id}', [PhotoController::class, 'edit_photos'])->name('admin.edit_photos');
    Route::post('admin/edit', [PhotoController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/delete/{id}', [PhotoController::class, 'delete'])->name('admin.delete_photos');
});
