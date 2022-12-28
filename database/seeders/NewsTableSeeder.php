<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('news')->truncate();
        $faker = Faker::create();
        foreach (range(1,30) as $value){
            DB::table('news')->insert([
                'title'=>$faker->name,
                'slug'=>$faker->slug,
                'content'=>$faker->paragraph(20),
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
