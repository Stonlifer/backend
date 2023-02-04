<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Store;
use App\Models\Category;
use App\Models\Product;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Store::factory()
            ->count(8)
            ->has(
                Category::factory()
                    ->count(4)
                    ->hasProducts(5))->create();
            
    }
}
