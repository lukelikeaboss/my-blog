<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\StaticController::class, 'home']);
Route::get('about', [App\Http\Controllers\StaticController::class, 'about'])->name('about');
Route::get('contact', [App\Http\Controllers\StaticController::class, 'contact'])->name('contact');


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('project',[App\Http\Controllers\ProjectController::class, 'index'] )->name('project');

Route::get('add/project', function () {
    return view('projects.add-project');
})->name('add.project');

Route::get('edit/project/{id}', [App\Http\Controllers\ProjectController::class, 'edit'] )->name('edit.project');
Route::get('show/project/{id}', [App\Http\Controllers\ProjectController::class, 'show'] )->name('show.project');

Route::post('edit/project/{id}', [App\Http\Controllers\ProjectController::class, 'update'] )->name('update.project');

Route::post('store/category', [App\Http\Controllers\CategoryController::class, 'store'] )->name('store.category');


Route::get('edit/post/{id}', [App\Http\Controllers\PostController::class, 'edit'] )->name('edit.post');


Route::get('create/category', [App\Http\Controllers\CategoryController::class, 'create'] )->name('create.category');

Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'] )->name('category');

Route::get('edit/category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'] )->name('edit.category');

Route::post('update/category/{id}', [App\Http\Controllers\CategoryController::class, 'update'] )->name('update.category');

Route::get('show/post/{id}', [App\Http\Controllers\PostController::class, 'show'] )->name('show.post');

Route::post('edit/post/{id}', [App\Http\Controllers\PostController::class, 'update'] )->name('update.post');

Route::get('show/project/details/{id}', [App\Http\Controllers\ProjectController::class, 'showDetails'] )->name('show.project.details');

Route::get('posts',[App\Http\Controllers\PostController::class, 'index'] )->name('posts');

Route::get('add/posts',[App\Http\Controllers\PostController::class, 'create'] )->name('add.posts');

Route::get('delete/category/{id}', [App\Http\Controllers\CategoryController::class,  'destroy'])->name('delete.category');

Route::get('add/category', function () {
    return view('categories.add-category');
})->name('add.category');

Route::get('edit/posts', function () {
    return view('posts.edit-posts');
})->name('edit.posts');




Route::get('offers', function () {
    return view('offers');
})->name('offers');

Route::get('blog_post', function () {
    return view('blog_post');
})->name('blog_post');


Route::get('login', function () {
    return view('login');
})->name('login');

Route::get('/post/details/{id}', [App\Http\Controllers\StaticController::class, 'showPostDetails'])->name('show.post.details');
Route::post('create/project', [App\Http\Controllers\ProjectController::class,'store'])->name('create.project');
Route::post('create/post', [App\Http\Controllers\PostController::class,'store'])->name('create.post');

Route::get('register', function () {
    return view('register');

})->name('register');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('delete/project/{id}', [App\Http\Controllers\ProjectController::class,'destroy'])->name('delete.project');

Route::get('delete/post/{id}', [App\Http\Controllers\PostController::class,'destroy'])->name('delete.post');
Route::post('/store/comment',[App\Http\Controllers\CommentController::class, 'store'])->name('store.comment');
