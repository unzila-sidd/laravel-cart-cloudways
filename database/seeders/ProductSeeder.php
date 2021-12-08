<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = [
            [
                'name' => 'Apple Macbook pro 14',
                'details' => '16 gb,16 gpo',
                'description' => 'The most powerful MacBook Pro ever is here. With the blazing-fast M1 Pro or M1 Max chip — the first Apple silicon designed for pros — you get groundbreaking performance and amazing battery life. Add to that a stunning Liquid Retina XDR display, the best camera and audio ever in a Mac notebook, and all the ports you need. The first notebook of its kind, this MacBook Pro is a beast.',
                'price' => 1999,
                'shipping_cost' =>25,
                'brand' =>'apple',
                'image_path' =>'storage/product1.jpg'

            ],[
                'name' => 'Samsung galaxy book pro',
                'details' => '8 gb , 512 gb',
                'description' => 'This lightweight laptop is also lightning fast. Quickly do everything you need—from downloading large files fast, to watching streams with no lag, to multitasking and more—all with the latest Intel® 11th Gen Core™ processor that’s also Intel® Evo™ certified, so you know it works on a premium platform. And with up to 512 GB of storage, you’ll have the space you need when you need it.',
                'price' => 1400,
                'shipping_cost' =>25,
                'brand' =>'samsung',
                'image_path' =>'storage/product2.jpg'

            ],
        ];
        foreach ($products as $key => $value){
            Product::create($value);
        }
    }
}
