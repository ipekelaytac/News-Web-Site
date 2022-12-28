<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('category')->truncate();
        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('category')->insert([
                'category_name'=>$faker->name,
                'slug'=>$faker->slug,
            ]);
        }
    }
}
