<?php
use Illuminate\Database\Seeder;

    class TextsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="textTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Text::create([
					"title_id" => $faker->word(),
					"user_id" => $faker->randomDigit(),
					"message" => $faker->word(),
					"image" => $faker->bothify('##??.jpg'),
					"ip" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }