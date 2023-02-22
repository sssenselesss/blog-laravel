<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->create(['name' => 'Nature']); // 1
        Category::query()->create(['name' => 'Development']); // 2
        Category::query()->create(['name' => 'News']); // 3
        Category::query()->create(['name' => 'IT']); // 4
        Category::query()->create(['name' => 'Study']); // 5
    }
}
