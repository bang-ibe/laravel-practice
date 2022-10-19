<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use App\Models\Post;

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
    // return view('welcome');
    // welcome.blade.php
    return view('home', [
        "title"=>"Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title"=>"About",
        "name"=>"ibe",
        "email"=>"ibraahim.id@gmail.com",
        "image"=>"onepiece.webp"]);
});

Route::get('/blog', [PostController::class, 'index']);

    // $blog_posts = 

    // return view('posts', [
    //     "title"=>"Blog",
    //     // "posts"=> $blog_posts
    //     "posts"=>Post::all()
    // ]); 

    // halamann single post 
Route::get('posts/{slug}', [PostController::class, 'show']);
    // $blog_posts = [
    //     [
    //         "title" => "Judul Post Pertama",
    //         "slug" => "judul-post-pertama",
    //         "author" => "Ibe",
    //         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, cumque doloribus. Quam quia placeat vero provident quaerat adipisci blanditiis obcaecati voluptates in, repellendus inventore incidunt vel necessitatibus eveniet libero quae perferendis, voluptas exercitationem, tenetur quas molestiae aperiam! In quas officiis accusamus id? Dolorum, minus, id totam rerum atque quod quidem alias quis reprehenderit architecto aliquid distinctio sit eaque vitae iste. Nobis praesentium quod consequuntur distinctio repellendus accusantium, sed veritatis temporibus nam voluptates exercitationem quo molestiae natus facere placeat laborum similique."
    //     ],
    //     [
    //         "title" => "Judul Post Kedua",
    //         "slug" => "judul-post-kedua",
    //         "author" => "Hasan",
    //         "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, cumque doloribus. Quam quia placeat vero provident quaerat adipisci blanditiis obcaecati voluptates in, repellendus inventore incidunt vel necessitatibus eveniet libero quae perferendis, voluptas exercitationem, tenetur quas molestiae aperiam! In quas officiis accusamus id? Dolorum, minus, id totam rerum atque quod quidem alias quis reprehenderit architecto aliquid distinctio sit eaque vitae iste. Nobis praesentium quod consequuntur distinctio repellendus accusantium, sed veritatis temporibus nam voluptates exercitationem quo molestiae natus facere placeat laborum similique."
    //     ],
    // ];


        // return view('post', [
        //     "title" => "Single Post",
        //     "post" => Post::find($slug)
        // ]);



