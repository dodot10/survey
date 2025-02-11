<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        Category::create([
            'name' => 'web design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',  
        ]);
        
        Category::create([
            'name' => 'machine learning',
            'slug' => 'machine-learning',  
        ]);

        Category::create([
            'name' => 'data structure',
            'slug' => 'data-structure',  
        ]);
    }
}
