<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('user')->truncate();
        $faker = Faker::create();
        foreach (range(1,10) as $value){
            DB::table('user')->insert([
                'name_surname'=>$faker->name,
                'email'=>$faker->email,
                'password'=>$faker->password,
                'isit_executive'=>1,
                'isit_active'=>1,
                'created_at'=>'2022-12-26 22:05:27',
                'updated_at'=>'2022-12-26 22:05:27',
            ]);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
