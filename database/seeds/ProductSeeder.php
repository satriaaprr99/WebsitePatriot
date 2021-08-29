<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'nama' => 'Shirt Bloom Winter',
            'category_id' => 1,
            'stok' => 10,
            'gambar' => 'Shirt_BloomWinter.png'
        ]);

    }
}
