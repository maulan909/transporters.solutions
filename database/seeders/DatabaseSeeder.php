<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // \App\Models\User::factory(10)->create();

        \App\Models\Homepage::create([
            'hero_title' => 'Solusi Distribusi untuk Usaha Anda',
            'about_content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus expedita doloribus debitis impedit vel sapiente, veniam accusantium voluptas dicta neque!'
        ]);

        //create user
        User::create([
            'name' => 'Hilmi Maulana',
            'username' => 'maulana909',
            'email' => 'maulanahilmi909@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        //create service/layanan
        \App\Models\Service::create([
            'name' => 'Transportation & Distribution',
            'image' => 'service-default.png',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deleniti, fuga labore dignissimos tempore nisi, maiores inventore placeat odit ea alias consequatur voluptatibus pariatur, sit illo praesentium quas nemo corrupti. Officia placeat quis provident dignissimos perferendis ullam quo soluta voluptatum sint, omnis, ab fuga iste! Iure, asperiores illo. Rerum eius facilis inventore aliquam explicabo doloremque, veritatis debitis possimus consequatur dignissimos? Unde est molestiae sint explicabo fugit eligendi officia quam dolorum repellat! Eveniet ducimus nobis aliquid? Officia odio ipsa soluta totam quisquam labore ea aliquam maiores quas aspernatur quaerat debitis recusandae voluptates asperiores distinctio consequatur ipsum omnis expedita reiciendis necessitatibus, corrupti quia obcaecati iure quis. Magnam pariatur praesentium fugiat sunt quibusdam quae ad mollitia omnis. Amet, asperiores tempora? Quibusdam excepturi porro eveniet veritatis. Sequi ipsa odio molestiae aut hic ab veniam, cupiditate nulla, culpa architecto enim officiis nemo dolorum corporis. Qui nesciunt, incidunt molestias quas porro totam tempore. Magni eveniet quod labore deserunt quis pariatur dolore officia animi et beatae nulla, ea sequi laboriosam necessitatibus, sit quia ipsum! Velit eligendi doloremque alias optio accusamus? Minima laborum consequuntur asperiores quaerat facilis sapiente consequatur iusto ea alias, eius esse dignissimos dolores voluptatibus repellendus, vitae quae nam praesentium quisquam velit quasi sunt, sint impedit?'
        ]);
        \App\Models\Service::create([
            'name' => 'Supply Chain, Warehouse, Aggregator Last Mile Delivery',
            'image' => 'service-default.png',
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque deleniti, fuga labore dignissimos tempore nisi, maiores inventore placeat odit ea alias consequatur voluptatibus pariatur, sit illo praesentium quas nemo corrupti. Officia placeat quis provident dignissimos perferendis ullam quo soluta voluptatum sint, omnis, ab fuga iste! Iure, asperiores illo. Rerum eius facilis inventore aliquam explicabo doloremque, veritatis debitis possimus consequatur dignissimos? Unde est molestiae sint explicabo fugit eligendi officia quam dolorum repellat! Eveniet ducimus nobis aliquid? Officia odio ipsa soluta totam quisquam labore ea aliquam maiores quas aspernatur quaerat debitis recusandae voluptates asperiores distinctio consequatur ipsum omnis expedita reiciendis necessitatibus, corrupti quia obcaecati iure quis. Magnam pariatur praesentium fugiat sunt quibusdam quae ad mollitia omnis. Amet, asperiores tempora? Quibusdam excepturi porro eveniet veritatis. Sequi ipsa odio molestiae aut hic ab veniam, cupiditate nulla, culpa architecto enim officiis nemo dolorum corporis. Qui nesciunt, incidunt molestias quas porro totam tempore. Magni eveniet quod labore deserunt quis pariatur dolore officia animi et beatae nulla, ea sequi laboriosam necessitatibus, sit quia ipsum! Velit eligendi doloremque alias optio accusamus? Minima laborum consequuntur asperiores quaerat facilis sapiente consequatur iusto ea alias, eius esse dignissimos dolores voluptatibus repellendus, vitae quae nam praesentium quisquam velit quasi sunt, sint impedit?'
        ]);

        //create page
        \App\Models\Page::factory(3)->create();

        //create category
        \App\Models\Category::create([
            'category' => 'Tech',
            'category_slug' => 'tech'
        ]);
        \App\Models\Category::create([
            'category' => 'Distribution',
            'category_slug' => 'distribution'
        ]);

        //create Post
        \App\Models\Post::factory(5)->create();

        \App\Models\Setting::create([
            'name' => 'Transporter | Fleet Solution',
            'description' => 'Your Business Distribution Solution',
            'instagram' => 'we.transporter_id'
        ]);
    }
}
