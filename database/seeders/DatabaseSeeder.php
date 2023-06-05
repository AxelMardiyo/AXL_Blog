<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'Axel Pratama',
            'username' => 'AxelMardiyo',
            'email' => 'axelmardiyo@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Maritza Ransi',
        //     'email' => 'ransi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in tenetur quas molestias quibusdam fugiat consequatur esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in tenetur quas molestias quibusdam fugiat consequatur esse. Molestias iure ducimus nostrum fugiat ex dicta nihil minima animi iste incidunt provident aliquid deserunt quaerat, expedita nobis omnis ad atque alias excepturi dolorum corporis. Dicta ipsum cupiditate perspiciatis rerum cumque tenetur est deleniti, eligendi ratione vitae dolorem labore voluptatibus explicabo accusamus recusandae dolor enim ducimus modi libero culpa odit unde. Odio porro saepe quisquam, quas quod a totam consectetur necessitatibus nulla in, doloremque rem iste enim reprehenderit quam id eum minus fugiat ratione? Facere velit blanditiis, ducimus omnis molestias labore, quas ipsam officiis nobis autem obcaecati, facilis tenetur amet. Ipsam deserunt consequatur consectetur, fugiat vero et, eligendi repellat debitis asperiores, ducimus soluta?',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in tenetur quas molestias quibusdam fugiat consequatur esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in tenetur quas molestias quibusdam fugiat consequatur esse. Molestias iure ducimus nostrum fugiat ex dicta nihil minima animi iste incidunt provident aliquid deserunt quaerat, expedita nobis omnis ad atque alias excepturi dolorum corporis. Dicta ipsum cupiditate perspiciatis rerum cumque tenetur est deleniti, eligendi ratione vitae dolorem labore voluptatibus explicabo accusamus recusandae dolor enim ducimus modi libero culpa odit unde. Odio porro saepe quisquam, quas quod a totam consectetur necessitatibus nulla in, doloremque rem iste enim reprehenderit quam id eum minus fugiat ratione? Facere velit blanditiis, ducimus omnis molestias labore, quas ipsam officiis nobis autem obcaecati, facilis tenetur amet. Ipsam deserunt consequatur consectetur, fugiat vero et, eligendi repellat debitis asperiores, ducimus soluta?',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in tenetur quas molestias quibusdam fugiat consequatur esse.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet in tenetur quas molestias quibusdam fugiat consequatur esse. Molestias iure ducimus nostrum fugiat ex dicta nihil minima animi iste incidunt provident aliquid deserunt quaerat, expedita nobis omnis ad atque alias excepturi dolorum corporis. Dicta ipsum cupiditate perspiciatis rerum cumque tenetur est deleniti, eligendi ratione vitae dolorem labore voluptatibus explicabo accusamus recusandae dolor enim ducimus modi libero culpa odit unde. Odio porro saepe quisquam, quas quod a totam consectetur necessitatibus nulla in, doloremque rem iste enim reprehenderit quam id eum minus fugiat ratione? Facere velit blanditiis, ducimus omnis molestias labore, quas ipsam officiis nobis autem obcaecati, facilis tenetur amet. Ipsam deserunt consequatur consectetur, fugiat vero et, eligendi repellat debitis asperiores, ducimus soluta?',
        //     'category_id' => 3,
        //     'user_id' => 1

        // ]);



        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
