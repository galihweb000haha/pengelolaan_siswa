<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
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
	        DB::table('students')->insert([
	        	'nisn' => $faker->unique()->randomNumber,
	        	'first_name' => $faker->firstName,
	        	'last_name' => $faker->lastName,
	        	'address' => $faker->address,
	        	'age' => $faker->numberBetween(13,17),
	        	'email' => $faker->email,
	        	'created_at' => date("Y-m-d H:i:s"),
	        	'updated_at' => date("Y-m-d H:i:s")
	        ]);
    	}
    }
}
 