<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ScoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1, 100) as $index) {     
	        DB::table('scores')->insert([
	        	'id_student' => $index,
	        	'bahasa_indonesia' => $faker->numberBetween(45,100),
	        	'matematika' => $faker->numberBetween(45,100),
	        	'pengetahuan_alam' => $faker->numberBetween(45,100),
	        	'bahasa_inggris' => $faker->numberBetween(45,100),
	        	'pendidikan_agama'=> $faker->numberBetween(45,100),
	        	'bahasa_jawa' => $faker->numberBetween(45,100),
	        	'olahraga' => $faker->numberBetween(45,100)
	        ]);
    	}
    }
}
