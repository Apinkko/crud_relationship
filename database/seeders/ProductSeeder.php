<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->create([
            'category_id' => '1',
            'category_sub_id' => '1',
            'name' => 'pecel lele'
        ]);
        Product::query()->create([
            'category_id' => '2',
            'category_sub_id' => '4',
            'name' => 'Proman'
        ]);
        Product::query()->create([
            'category_id' => '1',
            'category_sub_id' => '3',
            'name' => 'Soto ayam'
        ]);
    }
}
