<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
$faker = \Faker\Factory::create();

        for ($i = 0; $i < 25; $i++) {
            $product_name = $faker->text(100); // Batasi hingga 100 karakter
            $description = $faker->text(255); // Batasi hingga 255 karakter
            $retail_price = $faker->randomFloat(2, 0, 100); // Menghasilkan nilai desimal
            $wholesale_price = $faker->randomFloat(2, 0, 100); // Menghasilkan nilai desimal
            $origin = $faker->countryCode(); // Menghasilkan kode negara 2 karakter
            $quantity = $faker->numberBetween(0, 100); // Sesuai dengan UNSIGNED INT
            $product_image = $faker->imageUrl(); // Menghasilkan URL gambar
            $created_at = $faker->dateTimeBetween('-30 days', 'now');

            DB::table('shops')->insert([
                'product_name' => $product_name,
                'description' => $description,
                'retail_price' => $retail_price,
                'wholesale_price' => $wholesale_price,
                'origin' => $origin,
                'quantity' => $quantity,
                'product_image' => $product_image, // URL gambar disimpan di TEXT
                'created_at' => $created_at,
                'updated_at' => $created_at
            ]);
        }
    }
}
