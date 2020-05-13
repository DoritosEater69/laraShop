<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new App\Categories([
            'imgPath' => 'images/hood.jpg',
            'title' => 'Hoodies',
            'description' => 'Im baby chia VHS dreamcatcher',
            'route' => 'hoodies'
        ]);
        $category->save();

        $category = new App\Categories([
            'imgPath' => 'images/pants.jpg',
            'title' => 'Pants',
            'description' => 'Im baby chia VHS dreamcatcher, narwhal.',
            'route' => 'pants'
        ]);
        $category->save();

        $category = new App\Categories([
            'imgPath' => 'images/shirt.jpg',
            'title' => 'Shirts',
            'description' => 'Im baby chia, artisan YOLO raclette mixtape.',
            'route' => 'shirt'
        ]);
        $category->save();

        $category = new App\Categories([
            'imgPath' => 'images/shoes.jpg',
            'title' => 'Shoes',
            'description' => 'Im baby chia VHS dreamcatcher mixtape.',
            'route' => 'shoes'
        ]);
        $category->save();

        $category = new App\Categories([
            'imgPath' => 'images/accessories_header.jpg',
            'title' => 'Shoes',
            'description' => 'Im baby chia VHS dreamcatcher mixtape.',
            'route' => 'accessories'
        ]);
        $category->save();

    }
}
