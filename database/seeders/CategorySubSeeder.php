<?php

namespace Database\Seeders;

use App\Models\CategorySub;
use Illuminate\Database\Seeder;

class CategorySubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategorySub::query()->create([
            'category_id' => 1,
            'name' => 'seafood'
        ]);
        CategorySub::query()->create([
            'category_id' => 1,
            'name' => 'grilled meat'
        ]);
        CategorySub::query()->create([
            'category_id' => 1,
            'name' => 'soup'
        ]);
        CategorySub::query()->create([
            'category_id' => 2,
            'name' => 'energy drink'
        ]);
        CategorySub::query()->create([
            'category_id' => 2,
            'name' => 'Boba'
        ]);
        CategorySub::query()->create([
            'category_id' => 3,
            'name' => 'pancake'
        ]);
    }
}
