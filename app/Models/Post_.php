<?php

namespace App\Models;

class Post {
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Wulan Rahmawati",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minus et ea esse recusandae a quaerat nostrum debitis temporibus deleniti aspernatur doloribus, odio at voluptatibus quo dolorem consequuntur sequi quam voluptas soluta quasi ipsam. Harum voluptate placeat perspiciatis neque eligendi deleniti quae distinctio earum explicabo, architecto, facilis dolore, delectus minus in numquam? Qui minus cupiditate accusamus repellat cum reprehenderit, ratione reiciendis quos beatae autem id, ipsa nisi totam ipsum sapiente. Delectus libero ipsam earum est dolorum! Perspiciatis ullam ea adipisci."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Titin Sumarni",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa minus et ea esse recusandae a quaerat nostrum debitis temporibus deleniti aspernatur doloribus, odio at voluptatibus quo dolorem consequuntur sequi quam voluptas soluta quasi ipsam. Harum voluptate placeat perspiciatis neque eligendi deleniti quae distinctio earum explicabo, architecto, facilis dolore, delectus minus in numquam? Qui minus cupiditate accusamus repellat cum reprehenderit, ratione reiciendis quos beatae autem id, ipsa nisi totam ipsum sapiente. Delectus libero ipsam earum est dolorum! Perspiciatis ullam ea adipisci."
        ]
    ];
    
        public static function all() 
        {
            return collect(self::$blog_posts);
        }
    
        public static function find($slug)
        {
            $posts = static::all();
            return $posts->fristWhere('slug', $slug);
        }
}