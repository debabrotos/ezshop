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
            'name'=>'Samsung',
            "price"=>"69000",
            "description"=>"Flagship",
            "category"=>"Mobile Phone",
            "gallery"=>"https://www.google.com",
            ],
            [
            'name'=>'Samsung',
            "price"=>"69000",
            "description"=>"Flagship",
            "category"=>"Mobile Phone",
            "gallery"=>"https://www.google.com",
            ],
            [
            'name'=>'Samsung',
            "price"=>"69000",
            "description"=>"Flagship",
            "category"=>"Mobile Phone",
            "gallery"=>"https://www.google.com",
            ],
            [
            'name'=>'Samsung',
            "price"=>"69000",
            "description"=>"Flagship",
            "category"=>"Mobile Phone",
            "gallery"=>"https://www.google.com",
            ],
        ]);
    }
}
