<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /*
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*         User::create([
            'name' => 'Afiv',
            'email' => 'Afiv@gmail.com',
            'password' => bcrypt('12345')
        ]); */

        User::create([
            'name' => 'Muhammad Afiv',
            'username' => 'afiv',
            'email' => 'Muhammad@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(22)->create();

        /*  Post::create([
            'tittle' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem. dolorum dolor iusto excepturi tempore, quis ullam quam explicabo id asperiores obcaecati enim ipsum fugit, sit tenetur debitis rerum minima nam consectetur! Consequatur quasi obcaecati numquam velit, aut temporibus ab amet incidunt! Quia quasi eligendi, maiores natus perferendis minima dignissimos quis tempora eius quam, repellendus adipisci ullam necessitatibus, sit laborum officiis reprehenderit cum cupiditate! Quam modi ea adipisci, mollitia corrupti deleniti a aut sint sapiente quibusdam dolore molestias ut aliquam quis, iure ullam saepe sunt odio itaque? Explicabo commodi, recusandae sed temporibus earum veritatis cumque error quasi quas sunt quibusdam voluptates minima a ipsum iste libero provident sequi minus magni non? Culpa ut maiores quibusdam quia consequuntur, vitae provident debitis in animi inventore',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem. dolorum dolor iusto excepturi tempore, quis ullam quam explicabo id asperiores obcaecati enim ipsum fugit, sit tenetur debitis rerum minima nam consectetur! Consequatur quasi obcaecati numquam velit, aut temporibus ab amet incidunt! Quia quasi eligendi, maiores natus perferendis minima dignissimos quis tempora eius quam, repellendus adipisci ullam necessitatibus, sit laborum officiis reprehenderit cum cupiditate! Quam modi ea adipisci, mollitia corrupti deleniti a aut sint sapiente quibusdam dolore molestias ut aliquam quis, iure ullam saepe sunt odio itaque? Explicabo commodi, recusandae sed temporibus earum veritatis cumque error quasi quas sunt quibusdam voluptates minima a ipsum iste libero provident sequi minus magni non? Culpa ut maiores quibusdam quia consequuntur, vitae provident debitis in animi inventore',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem. dolorum dolor iusto excepturi tempore, quis ullam quam explicabo id asperiores obcaecati enim ipsum fugit, sit tenetur debitis rerum minima nam consectetur! Consequatur quasi obcaecati numquam velit, aut temporibus ab amet incidunt! Quia quasi eligendi, maiores natus perferendis minima dignissimos quis tempora eius quam, repellendus adipisci ullam necessitatibus, sit laborum officiis reprehenderit cum cupiditate! Quam modi ea adipisci, mollitia corrupti deleniti a aut sint sapiente quibusdam dolore molestias ut aliquam quis, iure ullam saepe sunt odio itaque? Explicabo commodi, recusandae sed temporibus earum veritatis cumque error quasi quas sunt quibusdam voluptates minima a ipsum iste libero provident sequi minus magni non? Culpa ut maiores quibusdam quia consequuntur, vitae provident debitis in animi inventore',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'tittle' => 'Judul Keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem a illum assumenda error enim esse cupiditate quo, consectetur asperiores corrupti ipsum voluptatem repudiandae animi unde ducimus, ut placeat deleniti hic repellat porro mollitia ipsa inventore autem. dolorum dolor iusto excepturi tempore, quis ullam quam explicabo id asperiores obcaecati enim ipsum fugit, sit tenetur debitis rerum minima nam consectetur! Consequatur quasi obcaecati numquam velit, aut temporibus ab amet incidunt! Quia quasi eligendi, maiores natus perferendis minima dignissimos quis tempora eius quam, repellendus adipisci ullam necessitatibus, sit laborum officiis reprehenderit cum cupiditate! Quam modi ea adipisci, mollitia corrupti deleniti a aut sint sapiente quibusdam dolore molestias ut aliquam quis, iure ullam saepe sunt odio itaque? Explicabo commodi, recusandae sed temporibus earum veritatis cumque error quasi quas sunt quibusdam voluptates minima a ipsum iste libero provident sequi minus magni non? Culpa ut maiores quibusdam quia consequuntur, vitae provident debitis in animi inventore',
            'category_id' => 2,
            'user_id' => 2
        ]); */
    }
}
