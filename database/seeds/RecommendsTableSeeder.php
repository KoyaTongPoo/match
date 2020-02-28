<?php
use Illuminate\Database\Seeder;

    class RecommendsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="recommendTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Recommend::create([
					"from_user" => $faker->randomDigit(),
					"to_man" => $faker->randomDigit(),
					"to_woman" => $faker->randomDigit(),
					"to_man_message" => $faker->word(),
					"to_woman_message" => $faker->word(),
					"man_qa_1" => $faker->randomDigit(),
					"man_qa_2" => $faker->randomDigit(),
					"man_qa_3" => $faker->randomDigit(),
					"woman_qa_1" => $faker->randomDigit(),
					"woman_qa_2" => $faker->randomDigit(),
					"woman_qa_3" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }