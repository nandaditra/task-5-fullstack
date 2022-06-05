<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
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
            DB::table('articles')->insert([
                'title'=>$faker->name,
                'content'=>$faker->text,
                'images'=>$faker->imageUrl(200,200),
                'user_id'=>$faker->buildingNumber,
                'category_id'=>$faker->buildingNumber
            ]);
        }

       
    }
}
