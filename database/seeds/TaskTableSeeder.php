<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 20;
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([
                'description' => $faker->sentence(),
                'archive' => $faker->boolean($chanceOfGettingTrue = 50),
            ]);
        }
    }
}
