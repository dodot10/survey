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
    // $posts = Post::with(['author', 'Category'])->latest()->get();
    $posts = Post::latest()->get(); 
    return view('posts' , ['title' => 'Posts', 'posts'=> $posts]);
    
});


Route::get('/posts/{Post:slug}', function (Post $Post) {
    return view('Post', ['title' => 'Single Post', 'Post' => $Post]);
    
}); 
    
Route::get('/categories/{category:slug}', function (Category $category) {

    
    $posts = $category->posts->load('category', 'author');

    // return view('posts', ['title' => 'Articles in'. $category->name,  'posts' => $category->posts]);
    // });
    return view('posts', ['title' => 'Articles in'. $category->name,  'posts' => $category->posts]);
    
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . 'Articles by'. $user->name,  'posts' => $user->posts]);
    
});


Route::get('/contact', function () {
    return view('contact',  ['title' => 'CONTACT']);
    
});
