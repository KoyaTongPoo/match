<?php
use Illuminate\Database\Seeder;

    class ProfileReportsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="profile_reportTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\ProfileReport::create([
					"from_user" => $faker->randomDigit(),
					"to_user" => $faker->randomDigit(),
					"kanri_flg" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }