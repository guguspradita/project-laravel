<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama masehhh",
            "slug" => "judul-post-pertama",
            "author" => "Gugus Pradita",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Id tempore corporis quidem, explicabo exercitationem, ea inventore itaque ducimus, debitis libero nisi. Doloremque, provident rem numquam corporis unde harum dolores sequi nulla. Repudiandae, quisquam amet. Esse itaque maxime possimus temporibus dolore repellendus vitae corporis dignissimos nulla eveniet sunt quas, quidem eligendi. Esse omnis modi pariatur voluptas delectus, vero eveniet fuga itaque cum aliquam fugit laboriosam libero officiis quis. Adipisci reprehenderit voluptate, dolorum nesciunt blanditiis quas molestiae possimus, esse minus quaerat veniam.",
        ],
        [
            "title" => "Judul Post Kedua bosku",
            "slug" => "judul-post-kedua",
            "author" => "Choirul Adam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores corporis odit dicta non perferendis praesentium voluptates illum architecto suscipit modi! Veniam doloremque illum ipsam fuga, dolor consequatur! Natus repellendus magnam hic quod tempora facere ducimus maiores. Vero similique, eos minima fuga facere sed dolore aspernatur laudantium accusamus possimus laborum temporibus perferendis ut amet accusantium ipsum. Debitis nesciunt exercitationem voluptas. Culpa id provident dolorem similique ullam repudiandae eveniet voluptatibus, alias earum consequuntur, ut sint nostrum. Velit sapiente aliquid magnam error? Fugiat debitis amet distinctio ut quos dignissimos sed, placeat dicta commodi quidem quod hic, unde, beatae ea consequatur incidunt nobis sapiente?",
        ]
    ];

    public static function All()
    {
        // membungkus dengan collection
        return collect(self::$blog_post);
    }

    // public static function Find($slug)
    // {
    //     $posts = static::All(); // mengakses method static all yang sudah menjadi collection
    //     return $posts->firstWhere("slug", $slug); // mengembalikan nilai post
    // }
}
