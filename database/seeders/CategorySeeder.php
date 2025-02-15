<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(3)->create();
        
        Category::create([
            'name' => 'Coba Laravel',
            'slug' => 'coba-laravel',
            'color' => 'yellow',
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'red',
        ]);
        
        Category::create([
            'name' => 'coba-PHP',
            'slug' => 'coba-php',
            'color' => 'green',
        ]);

        Category::create([
            'name' => 'coba-JavaScript',
            'slug' => 'coba-javascript',
            'color' => 'blue',
        ]);

    }
}
