<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Joran Shimano Carbon X',
                'description' => 'Joran pancing berbahan carbon fiber yang sangat ringan namun kuat. Cocok untuk memancing di laut maupun danau. Panjang 180cm.',
                'price' => 750000,
                'image' => 'joran-shimano.jpg',
                'category' => 'Joran',
            ],
            [
                'name' => 'Reel Daiwa Spinning 3000',
                'description' => 'Reel pancing dengan putaran sangat halus (smooth). Dilengkapi 5 ball bearing dan gear ratio 5.2:1. Anti karat.',
                'price' => 550000,
                'image' => 'reel-daiwa.jpg',
                'category' => 'Reel',
            ],
            [
                'name' => 'Umpan Minnow Lure',
                'description' => 'Umpan tiruan berbentuk ikan kecil dengan warna mencolok. Sangat ampuh untuk menarik perhatian ikan predator seperti Kakap.',
                'price' => 45000,
                'image' => 'umpan-minnow.jpg',
                'category' => 'Umpan',
            ],
            [
                'name' => 'Senar PE Braided X8',
                'description' => 'Senar pancing anyaman 8 lilitan. Sangat kuat, tidak mudah putus, dan tahan gesekan karang. Panjang 100 meter.',
                'price' => 120000,
                'image' => 'senar-pe.jpg',
                'category' => 'Aksesoris',
            ],
            [
                'name' => 'Tas Pancing Waterproof',
                'description' => 'Tas untuk membawa joran dan perlengkapan lainnya. Tahan air dan memiliki banyak kantong penyimpanan.',
                'price' => 250000,
                'image' => 'tas-pancing.jpg',
                'category' => 'Aksesoris',
            ],
            [
                'name' => 'Joran Tegek Maguro',
                'description' => 'Joran tegek ruas panjang, cocok untuk memancing ikan nila atau mujair di sungai. Bahan grafit berkualitas.',
                'price' => 180000,
                'image' => 'joran-tegek.jpg',
                'category' => 'Joran',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
