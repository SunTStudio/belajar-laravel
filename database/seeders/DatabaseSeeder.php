<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Mahsun',
        //     'email' => 'mahsun@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Yusuf',
        //     'email' => 'yusuf@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit alias iste aperiam placeat perspiciatis quas sapiente doloremque consequatur inventore error.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat quia quos, accusantium porro, quae reiciendis at consequuntur possimus placeat autem maxime debitis architecto assumenda eaque. Suscipit hic expedita ea voluptate officiis explicabo libero deserunt quibusdam ipsum soluta, sit nam quidem. Quaerat mollitia laboriosam quas corrupti maxime cupiditate deleniti ducimus culpa eum ea quis,</p><p>vel repellat dicta eligendi alias pariatur numquam nesciunt, debitis assumenda placeat ipsam vitae accusamus. Inventore eos et excepturi ea accusantium dignissimos neque impedit velit, totam provident non minima fugiat laborum dolorem officia voluptate, magni veritatis facere quod suscipit minus architecto placeat necessitatibus? A debitis similique, veniam error consequatur non molestias quae aperiam doloribus culpa sequi iure dolores cumque repellat beatae mollitia necessitatibus itaque deserunt laborum voluptates.</p> ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit alias iste aperiam placeat perspiciatis quas sapiente doloremque consequatur inventore error.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat quia quos, accusantium porro, quae reiciendis at consequuntur possimus placeat autem maxime debitis architecto assumenda eaque. Suscipit hic expedita ea voluptate officiis explicabo libero deserunt quibusdam ipsum soluta, sit nam quidem. Quaerat mollitia laboriosam quas corrupti maxime cupiditate deleniti ducimus culpa eum ea quis,</p><p>vel repellat dicta eligendi alias pariatur numquam nesciunt, debitis assumenda placeat ipsam vitae accusamus. Inventore eos et excepturi ea accusantium dignissimos neque impedit velit, totam provident non minima fugiat laborum dolorem officia voluptate, magni veritatis facere quod suscipit minus architecto placeat necessitatibus? A debitis similique, veniam error consequatur non molestias quae aperiam doloribus culpa sequi iure dolores cumque repellat beatae mollitia necessitatibus itaque deserunt laborum voluptates.</p> ',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);


        // Post::create([
        //     'tittle' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit alias iste aperiam placeat perspiciatis quas sapiente doloremque consequatur inventore error.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat quia quos, accusantium porro, quae reiciendis at consequuntur possimus placeat autem maxime debitis architecto assumenda eaque. Suscipit hic expedita ea voluptate officiis explicabo libero deserunt quibusdam ipsum soluta, sit nam quidem. Quaerat mollitia laboriosam quas corrupti maxime cupiditate deleniti ducimus culpa eum ea quis,</p><p>vel repellat dicta eligendi alias pariatur numquam nesciunt, debitis assumenda placeat ipsam vitae accusamus. Inventore eos et excepturi ea accusantium dignissimos neque impedit velit, totam provident non minima fugiat laborum dolorem officia voluptate, magni veritatis facere quod suscipit minus architecto placeat necessitatibus? A debitis similique, veniam error consequatur non molestias quae aperiam doloribus culpa sequi iure dolores cumque repellat beatae mollitia necessitatibus itaque deserunt laborum voluptates.</p> ',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit alias iste aperiam placeat perspiciatis quas sapiente doloremque consequatur inventore error.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores repellat quia quos, accusantium porro, quae reiciendis at consequuntur possimus placeat autem maxime debitis architecto assumenda eaque. Suscipit hic expedita ea voluptate officiis explicabo libero deserunt quibusdam ipsum soluta, sit nam quidem. Quaerat mollitia laboriosam quas corrupti maxime cupiditate deleniti ducimus culpa eum ea quis,</p><p>vel repellat dicta eligendi alias pariatur numquam nesciunt, debitis assumenda placeat ipsam vitae accusamus. Inventore eos et excepturi ea accusantium dignissimos neque impedit velit, totam provident non minima fugiat laborum dolorem officia voluptate, magni veritatis facere quod suscipit minus architecto placeat necessitatibus? A debitis similique, veniam error consequatur non molestias quae aperiam doloribus culpa sequi iure dolores cumque repellat beatae mollitia necessitatibus itaque deserunt laborum voluptates.</p> ',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
