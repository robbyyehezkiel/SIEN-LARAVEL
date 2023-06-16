<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        /**
         * User Seeder
         */

        User::create([
            'name' => 'Robby Yehezkiel',
            'username' => 'robbyyehezkiel',
            'email' => 'robbyyehezkiel@gmail.com',
            'password' => bcrypt('robby123'),
        ]);

        User::create([
            'name' => 'Dasha Taranka',
            'username' => 'dashataranka',
            'email' => 'dashataran@gmail.com',
            'password' => bcrypt('dasha123'),
        ]);

        User::factory(3)->create();

        /**
         * Category Seeder
         */

        Category::create([
            'name' => 'Tinta Warna',
            'slug' => 'tinta-warna'
        ]);
            
        Category::create([
            'name' => 'Hitam Putih',
            'slug' => 'hitam-putih'
        ]);

        /**
         * Post Seeder
         */

        //Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Ke Satu',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-satu',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem quibusdam incidunt et.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem quibusdam incidunt et. Debitis ratione quo facere consequatur optio fugiat totam dicta alias omnis, illo ea possimus, ullam rerum sit tenetur quasi autem eum reprehenderit voluptates repudiandae commodi labore.Numquam placeat molestiae saepe quos iure quia, assumenda eos sequi cum. Assumenda totam, eum hic in dicta deserunt ratione excepturi libero laboriosam aperiam error aspernatur explicabo dolorem beatae ex praesentium ipsam odio esse numquam. Dolor facere, tempora accusantium possimus repellendus alias nesciunt reprehenderit.In cum. Numquam placeat molestiae saepe quos iure quia, assumenda eos sequi cum. Assumenda totam, eum hic in dicta deserunt ratione excepturi libero laboriosam aperiam error aspernatur explicabo dolorem beatae ex praesentium ipsam odio esse numquam. Dolor facere, tempora accusantium possimus repellendus alias nesciunt reprehenderit.',
        // ]);
    }
}
