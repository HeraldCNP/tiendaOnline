<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            // Celulares y Tablets
            [
                'category_id' => 1,
                'name' => 'Celulares y Smartphones',
                'slug' => Str::slug('Celulares y Smartphones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'SmartWachtes',
                'slug' => Str::slug('SmartWachtes'),
            ],
            // Tv, Audio y Video
            [
                'category_id' => 2,
                'name' => 'Tv y Audio',
                'slug' => Str::slug('Tv y Audio'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para Autos',
                'slug' => Str::slug('Audio para Autos'),
            ],
            // Consolas y Videojuegos
            [
                'category_id' => 3,
                'name' => 'X-Box',
                'slug' => Str::slug('X-Box'),
            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation'),
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC'),
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],
            // Computacion
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),
            ],
            [
                'category_id' => 4,
                'name' => 'PC Escritorio',
                'slug' => Str::slug('PC Escritorio'),
            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios PC',
                'slug' => Str::slug('Accesorios PC'),
            ],
            // Moda
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true
            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true
            ],
        ];
        foreach ($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
