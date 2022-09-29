<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat temporibus voluptas rerum esse eius porro? Error eius natus architecto dolor assumenda quisquam labore perferendis officia ipsum doloribus, voluptatibus, maxime quas in mollitia aliquam corrupti eligendi non tempore, unde quasi quis velit aperiam. Nulla fugiat fugit facilis dolorem veniam deleniti beatae vero repellendus similique delectus facere iure recusandae veritatis iusto magnam quia suscipit at quos non omnis, qui atque unde. Placeat magni non iusto deleniti dolores eveniet molestias laudantium doloremque at?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Afiv",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, cum, iste delectus maiores recusandae, dolorum magni ipsa aperiam laudantium iure exercitationem repellendus. Iste saepe deleniti nemo dolor aspernatur, illo aliquid, eaque perspiciatis ducimus sed vero nobis obcaecati explicabo quis libero architecto eos velit excepturi delectus nihil quisquam error voluptatibus. Dolores fuga eius repellendus expedita quo consequuntur voluptatem! Ad cupiditate in facere quae totam illum velit nostrum debitis saepe, quod eaque earum inventore minus eligendi laboriosam accusamus repudiandae optio quo neque quam non. Facilis dolorem porro nostrum voluptatum amet quisquam veniam eligendi odit, consectetur dolore voluptate blanditiis fugiat facere, ullam officia!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
