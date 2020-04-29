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
        $categories = new App\Categories([
            'imgPath' => 'images/hood.jpg',
            'title' => 'Hoodies',
            'description' => 'Im baby chia VHS dreamcatcher'
        ]);
        $categories->save();

        $categories = new App\Categories([
            'imgPath' => 'images/pants.jpg',
            'title' => 'Pants',
            'description' => 'Im baby chia VHS dreamcatcher, narwhal.'
        ]);
        $categories->save();

        $categories = new App\Categories([
            'imgPath' => 'images/shirt.jpg',
            'title' => 'Shirts',
            'description' => 'Im baby chia, artisan YOLO raclette mixtape.'
        ]);
        $categories->save();

        $categories = new App\Categories([
            'imgPath' => 'images/shoes.jpg',
            'title' => 'Shoes',
            'description' => 'Im baby chia VHS dreamcatcher mixtape.'
        ]);
        $categories->save();

    }
}
