<?php
use Illuminate\Database\Seeder;

    class QuestionsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="questionTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Question::create([
					"from_user" => $faker->randomDigit(),
					"to_user" => $faker->randomDigit(),
					"question" => $faker->word(),
					"answer" => $faker->word(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }