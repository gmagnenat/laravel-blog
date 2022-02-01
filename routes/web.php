<?php
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/', function () {
  return view('posts', [
    'posts' => Post::all()
  ]);
});

Route::get('posts/{post}', function ($slug) {
  return view ('post', [
    'post' => Post::find($slug)
  ]);
});

Route::get('/projects', function() {
  return view ('projects');
});

Route::get('/agency', function() {
  return view('agence');
});

Route::get('/contact', function() {
  return view('contact');
});

Route::get('/services', function() {
  return view('services');
});
