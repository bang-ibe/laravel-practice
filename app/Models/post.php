<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class post extends Model
class post
{
    // use HasFactory;
    private static $blog_posts  = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ibe",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, cumque doloribus. Quam quia placeat vero provident quaerat adipisci blanditiis obcaecati voluptates in, repellendus inventore incidunt vel necessitatibus eveniet libero quae perferendis, voluptas exercitationem, tenetur quas molestiae aperiam! In quas officiis accusamus id? Dolorum, minus, id totam rerum atque quod quidem alias quis reprehenderit architecto aliquid distinctio sit eaque vitae iste. Nobis praesentium quod consequuntur distinctio repellendus accusantium, sed veritatis temporibus nam voluptates exercitationem quo molestiae natus facere placeat laborum similique."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Hasan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor, cumque doloribus. Quam quia placeat vero provident quaerat adipisci blanditiis obcaecati voluptates in, repellendus inventore incidunt vel necessitatibus eveniet libero quae perferendis, voluptas exercitationem, tenetur quas molestiae aperiam! In quas officiis accusamus id? Dolorum, minus, id totam rerum atque quod quidem alias quis reprehenderit architecto aliquid distinctio sit eaque vitae iste. Nobis praesentium quod consequuntur distinctio repellendus accusantium, sed veritatis temporibus nam voluptates exercitationem quo molestiae natus facere placeat laborum similique."
        ],
    ];
    public static function all(){
        return collect (self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
