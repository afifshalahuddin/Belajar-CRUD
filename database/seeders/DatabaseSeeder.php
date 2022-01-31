<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'afif shalahuddin',
            'email' => 'Afifshal@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Post::create([
            'title' => 'Judul Pertama',
            'excerp' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, '
        ]);

        User::create([
            'name' => 'Handy Gusyon',
            'email' => 'Handygusyon@gmail.com',
            'password' => bcrypt('12345')
        ]);
        Post::create([
            'title' => 'Judul kedua',
            'excerp' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, ',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex officiis iure nostrum labore quod maiores exercitationem totam quaerat laboriosam soluta nesciunt, '
        ]);
    }
}
