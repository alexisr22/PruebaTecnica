<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'name' => 'Agua',
            'upc'=> 'ABC123',
            'current_cost'=> '12',
            'profit_percentage'=> '2',
            'enable' => '1',
            'brand' => '1'
            ],            
            [
            'name' => 'Fanta',
            'upc'=> 'DBC123',
            'current_cost'=> '12',
            'profit_percentage'=> '2',
            'enable' => '1',
            'brand' => '2'
            ],
            [
            'name' => 'Sprite',
            'upc'=> 'DWC123',
            'current_cost'=> '12',
            'profit_percentage'=> '2',
            'enable' => '1',
            'brand' => '3'
            ]
            ];
            DB::table('products')->insert($data);
    }
}
