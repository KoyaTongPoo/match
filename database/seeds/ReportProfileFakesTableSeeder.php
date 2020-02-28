<?php
use Illuminate\Database\Seeder;

    class ReportProfileFakesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="report_profile_fakeTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\ReportProfileFake::create([
					"from_user" => $faker->randomDigit(),
					"to_user" => $faker->randomDigit(),
					"fake_status" => $faker->word(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }