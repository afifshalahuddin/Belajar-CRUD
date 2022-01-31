<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class ModelPost
{
    private static $blog_post =[
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "autor" => "Mardiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, placeat nulla officia, aspernatur laudantium repellendus dicta, molestiae eum."
        ],
        [
            "title" => "Judul Post Ke Dua",
            "slug" => "judul-post-kedua",
            "autor" => "Handy Gusyon",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, placeat nulla officia, aspernatur laudantium repellendus dicta, molestiae eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, placeat nulla officia, aspernatur laudantium repellendus dicta, molestiae eum."
        ],
        ];

        public static function all()
        {
            return collect(self::$blog_post);
        }

        //mengambil data yang ada pada method all
        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
        }
}
