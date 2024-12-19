<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        Category::create([
            'name' => 'Data Structure',
            'slug' => 'data-structure'
        ]);

        
    }

}
