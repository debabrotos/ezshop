<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('products')->insert([
            [
            'name'=>'Google Pixel 6A',
            "price"=>"52000",
            "description"=>"Tensor 5",
            "category"=>"Mobile Phone",
            "gallery"=>"https://fdn2.gsmarena.com/vv/pics/google/google-pixel-6a-0.jpg",
            ],
            
        ]);
    }
}
