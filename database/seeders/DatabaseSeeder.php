<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Berry Kurniawan',
            'username' => 'berykwn',
            'email' => 'berykurniawan46@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Gebew',
        //     'email' => 'gebew@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
 
        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolor porro, fugit similique dolore laudantium veniam placeat nihil minima voluptatum deleniti enim iusto, ullam impedit quasi?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minus quae molestiae officia excepturi, maxime nam corrupti. Ea sequi eos quasi quod vitae fuga doloremque error quam explicabo velit, expedita labore consectetur blanditiis debitis quae cum nostrum nemo ut molestias excepturi cumque ullam a quo veritatis. Est atque obcaecati mollitia aspernatur ratione veniam quam alias, sunt velit et sapiente beatae at nostrum perferendis neque tempora cum nisi commodi ad iure quae enim a ipsa! Id, explicabo aliquid! Deleniti, ullam deserunt recusandae explicabo harum fugiat delectus quis itaque vero qui eligendi expedita mollitia distinctio ipsum nobis quibusdam repellat. Beatae, totam velit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolor porro, fugit similique dolore laudantium veniam placeat nihil minima voluptatum deleniti enim iusto, ullam impedit quasi?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minus quae molestiae officia excepturi, maxime nam corrupti. Ea sequi eos quasi quod vitae fuga doloremque error quam explicabo velit, expedita labore consectetur blanditiis debitis quae cum nostrum nemo ut molestias excepturi cumque ullam a quo veritatis. Est atque obcaecati mollitia aspernatur ratione veniam quam alias, sunt velit et sapiente beatae at nostrum perferendis neque tempora cum nisi commodi ad iure quae enim a ipsa! Id, explicabo aliquid! Deleniti, ullam deserunt recusandae explicabo harum fugiat delectus quis itaque vero qui eligendi expedita mollitia distinctio ipsum nobis quibusdam repellat. Beatae, totam velit.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolor porro, fugit similique dolore laudantium veniam placeat nihil minima voluptatum deleniti enim iusto, ullam impedit quasi?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minus quae molestiae officia excepturi, maxime nam corrupti. Ea sequi eos quasi quod vitae fuga doloremque error quam explicabo velit, expedita labore consectetur blanditiis debitis quae cum nostrum nemo ut molestias excepturi cumque ullam a quo veritatis. Est atque obcaecati mollitia aspernatur ratione veniam quam alias, sunt velit et sapiente beatae at nostrum perferendis neque tempora cum nisi commodi ad iure quae enim a ipsa! Id, explicabo aliquid! Deleniti, ullam deserunt recusandae explicabo harum fugiat delectus quis itaque vero qui eligendi expedita mollitia distinctio ipsum nobis quibusdam repellat. Beatae, totam velit.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus dolor porro, fugit similique dolore laudantium veniam placeat nihil minima voluptatum deleniti enim iusto, ullam impedit quasi?',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut minus quae molestiae officia excepturi, maxime nam corrupti. Ea sequi eos quasi quod vitae fuga doloremque error quam explicabo velit, expedita labore consectetur blanditiis debitis quae cum nostrum nemo ut molestias excepturi cumque ullam a quo veritatis. Est atque obcaecati mollitia aspernatur ratione veniam quam alias, sunt velit et sapiente beatae at nostrum perferendis neque tempora cum nisi commodi ad iure quae enim a ipsa! Id, explicabo aliquid! Deleniti, ullam deserunt recusandae explicabo harum fugiat delectus quis itaque vero qui eligendi expedita mollitia distinctio ipsum nobis quibusdam repellat. Beatae, totam velit.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
