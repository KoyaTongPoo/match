<?php
use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="userTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\User::create([
					"name" => $faker->name(),
					"password" => $faker->password(),
					"year" => $faker->randomDigit(),
					"mouth" => $faker->randomDigit(),
					"day" => $faker->randomDigit(),
					"gender" => $faker->word(),
					"referral_code" => $faker->word(),
					"uranai_seikaku" => $faker->randomDigit(),
					"kanri_flg" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }