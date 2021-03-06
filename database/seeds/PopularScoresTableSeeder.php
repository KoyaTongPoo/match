<?php
use Illuminate\Database\Seeder;

    class PopularScoresTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="popular_scoreTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\PopularScore::create([
					"from_user" => $faker->randomDigit(),
					"to_user" => $faker->randomDigit(),
					"score" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }