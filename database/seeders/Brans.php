<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Brans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

// datos random


    \App\Models\Brands::factory(10)->create();

// datos manualmente


    //     $data = [
    //         [
    //         'name' => 'Coca-Cola',
    //         'enable' => '1'
    //         ],            
    //         [
    //         'name' => 'Bimbo',
    //         'enable' => '1'
    //         ]
    //         ];
    //         DB::table('brands')->insert($data);


    }
}
