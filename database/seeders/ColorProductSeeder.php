<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Builder;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color', true)
                ->where('size', false);

        })->get();

        foreach ($products as $product) {
            $product->colors()->attach([
                1 => [
                    'quantity'  => 5
                ],
                2 => [
                    'quantity'  => 5
                ],
                3 => [
                    'quantity'  => 5
                ],
                4 => [
                    'quantity'  => 5
                ],
            ]);
        }
    }
}
