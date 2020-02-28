<?php
use Illuminate\Database\Seeder;

    class MeetsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="meetTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Meet::create([
					"from_user" => $faker->randomDigit(),
					"to_user" => $faker->randomDigit(),
					"meet_day" => $faker->date()." ".$faker->time(),
					"tel_day" => $faker->date()." ".$faker->time(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }