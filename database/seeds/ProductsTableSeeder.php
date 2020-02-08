<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 30; $i++) {
            Product::create([
                'name' => 'Shoe '.$i,
                'slug' => 'shoe-'.$i,
                'sku' => 's-'.$i,
                'quantity' => $i,
                'type' => 'Shoe',
               // 'details' => [array_rand([13,14,15])] . 'oz' . [1, 2, 3],
                'price' => rand(149999, 249999),
                'description' =>'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!' .$i,
            ]);
        }
    }
}
