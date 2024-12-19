<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Pablo Dinata',
        //     'username' => 'pablooqt',
        //     'email' => 'satria123@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);
        // $pablo = User::create([
        //     'name' => 'Pablo Dinata',
        //     'username' => 'pablooqt',
        //     'email' => 'satria123@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Post::factory(100)->recycle([
        //     Category::factory(3)->create(),
        //     $pablo,
        //     User::factory(5)->create()
        // ]);

        // Category::create([
        //     'name' => 'UI UX',
        //     'slug' => 'ui-ux'
        // ]);
        // Category::create([
        //     'name' => 'Machine Learning',
        //     'slug' => 'machine-learning'
        // ]);
        // Category::create([
        //     'name' => 'Data Structure',
        //     'slug' => 'data-structure'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }

}
