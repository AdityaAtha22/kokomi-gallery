<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // users
        User::create([
            'name' => 'Yoi Project',
            'username' => 'YoiProject',
            'email' => 'aoikagura26@gmail.com',
            'password' => bcrypt('xiao1112')
        ]);

        // categories
        Category::create([
            'name' => 'Nature',
            'slug' => 'nature',
            'image' => 'nature.png'
        ]);

        Category::create([
            'name' => 'Historical Building',
            'slug' => 'historical-building',
            'image' => 'historical-building.png'
        ]);

        Category::create([
            'name' => 'Art & Culture',
            'slug' => 'art-culture',
            'image' => 'art-culture.png'
        ]);

        Category::create([
            'name' => 'People',
            'slug' => 'people',
            'image' => 'people.png'
        ]);
    }
}
