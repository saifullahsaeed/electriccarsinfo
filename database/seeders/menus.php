<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class menus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add data
        DB::table('menus')->insert([
            'name' => 'Suvs',
        ]);
        DB::table('menus')->insert([
            'name' => 'Cars',
        ]);
        DB::table('menus')->insert([
            'name' => 'Trucks',
        ]);
        DB::table('menus')->insert([
            'name' => 'Crossovers',
        ]);
        DB::table('menus')->insert([
            'name' => 'Convertibles',
        ]);
        DB::table('menus')->insert([
            'name' => 'Coupe',
        ]);
        DB::table('menus')->insert([
            'name' => 'Hatchback',
        ]);
        DB::table('menus')->insert([
            'name' => 'Sedans',
        ]);
        DB::table('menus')->insert([
            'name' => 'Wagons',
        ]);
        DB::table('menus')->insert([
            'name' => 'Pickups',
        ]);
        DB::table('menus')->insert([
            'name' => 'Vans',
        ]);
        DB::table('menus')->insert([
            'name' => 'Minivans',
        ]);
        DB::table('menus')->insert([
            'name' => 'Cabriolets',
        ]);
        DB::table('menus')->insert([
            'name' => 'Convertibles',
        ]);
        DB::table('menus')->insert([
            'name' => 'Coupe',
        ]);
        DB::table('menus')->insert([
            'name' => 'Hatchback',
        ]);
        DB::table('menus')->insert([
            'name' => 'Sedans',
        ]);
        DB::table('menus')->insert([
            'name' => 'Wagons',
        ]); 
        DB::table('menus')->insert([
            'name' => 'Pickups',
        ]);
        
    }
}