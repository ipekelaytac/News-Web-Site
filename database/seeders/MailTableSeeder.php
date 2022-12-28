<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('mail')->truncate();
        $faker = Faker::create();
        foreach (range(1,20) as $value){
            DB::table('mail')->insert([
                'name_surname'=>$faker->name,
                'email'=>$faker->email,
                'subject'=>$faker->name,
                'content'=>$faker->paragraph(20),

            ]);
        }
    }
}
