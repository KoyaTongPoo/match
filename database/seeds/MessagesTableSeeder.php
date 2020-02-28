<?php
use Illuminate\Database\Seeder;

    class MessagesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="messageTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Message::create([
					"from_user" => $faker->randomDigit(),
					"to_user" => $faker->randomDigit(),
					"message" => $faker->word(),
					"read_flg" => $faker->randomDigit(),
					"delete_flg" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }