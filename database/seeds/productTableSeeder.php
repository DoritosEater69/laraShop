<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new App\Product([
            'imgPath' => 'images/hood.jpg',
            'title' => 'Product 1',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr',
            'price' => 120,
            'size' => 'M',
            'color' => 'Gray'
        ]);
        $product->save();

        $product = new App\Product([
            'imgPath' => 'images/male_hoodie1.png',
            'title' => 'Product 2',
            'description' => 'At vero eos et accusam et justo duo dolores et ea rebum.',
            'price' => 90,
            'size' => 'M',
            'color' => 'Black'
        ]);
        $product->save();

        $product = new App\Product([
            'imgPath' => 'images/male_hoodie2.png',
            'title' => 'Product 3',
            'description' => 'Lorem ipsum dolor sit amet consetetur sadipscing elitr',
            'price' => 200,
            'size' => 'M',
            'color' => 'White'
        ]);
        $product->save();

        $product = new App\Product([
            'imgPath' => 'images/female_hoodie1.png',
            'title' => 'Product 4',
            'description' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr',
            'price' => 140,
            'size' => 'M',
            'color' => 'Black'
        ]);
        $product->save();
    }
}
