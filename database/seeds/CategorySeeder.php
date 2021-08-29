<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	'name' => 'shirt',
        	'gambar' => 'shirt.png',
        ]);

        DB::table('categories')->insert([
        	'name' => 'jacket',
        	'gambar' => 'jacket.png',
        ]);

        DB::table('categories')->insert([
        	'name' => 'pants',
        	'gambar' => 'pants.png',
        ]);
    }
}
