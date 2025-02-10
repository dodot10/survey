<?php


use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use PharIo\Manifest\Author;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'SURVEY']);
    });

Route::get('/about', function () {
    return view('about',['title' => 'ABOUT']);
    });
 
Route::get('/posts', function () {
    return view('posts' , ['title' => 'Blog', 'posts'=> Post::all()]);
    });

Route::get('/posts/{Post:slug}', function (Post $Post) {
    return view('Post', ['title' => 'single Post', 'Post' => $Post]);
    }); 
    
Route::get('/categories/{Category:slug}', function (Category $Category) {
    return view('posts', ['title' => 'Articles in'. $Category->name,  'posts' => $Category->posts]);
    });

Route::get('/authors/{User:username}', function (User $User) {
    return view('posts', ['title' => count($User->posts) . 'Articles by'. $User->name,  'posts' => $User->posts]);
    });


Route::get('/contact', function () {
    return view('contact',  ['title' => 'CONTACT']);
    });
