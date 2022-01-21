<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Celulares y Tablets', 
                'slug' => Str::slug('Celulares y Tablets'),
                'icon' => '<i class="fa-solid fa-mobile-screen"></i>'
            ],
            [
                'name' => 'Tv, Audio y Video', 
                'slug' => Str::slug('Tv, Audio y Video'),
                'icon' => '<i class="fa-solid fa-tv"></i>'
            ],
            [
                'name' => 'Consolas y Videojuegos', 
                'slug' => Str::slug('Consolas y Videojuegos'),
                'icon' => '<i class="fa-solid fa-gamepad-modern"></i>'
            ],
            [
                'name' => 'Computacion', 
                'slug' => Str::slug('Computacion'),
                'icon' => '<i class="fa-solid fa-desktop"></i>'
            ],
            [
                'name' => 'Ropa y Accesorios', 
                'slug' => Str::slug('Ropa y Accesorios'),
                'icon' => '<i class="fa-solid fa-desktop"></i>'
            ],
        ];

        foreach ($categories as $category){
            $category = Category::factory(1)->create($category)->first();
            $brands = Brand::factory(3)->create();
            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
