<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name'        => 'Action',
            'description' => 'Action-packed movies',
        ]);

        Category::create([
            'name'        => 'Drama',
            'description' => 'Dramatic and emotional stories',
        ]);

        Category::create([
            'name'        => 'Comedy',
            'description' => 'Funny and entertaining movies',
        ]);

        Category::create([
            'name'        => 'Sci-Fi',
            'description' => 'Science fiction and futuristic themes',
        ]);
    }
}
