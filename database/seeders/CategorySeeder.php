<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id');

        for($i=1;$i<=50;$i++) {
            DB::table('categories')->insert([
                'name'=> $faker->name,
                'user_id'=> $faker->buildingNumber                      
            ]);
        }
        
    }
}
