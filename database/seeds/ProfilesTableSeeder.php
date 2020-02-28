<?php
use Illuminate\Database\Seeder;

    class ProfilesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="profileTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Profile::create([
					"user_id" => $faker->randomDigit(),
					"name" => $faker->name(),
					"profile" => $faker->word(),
					"hobby" => $faker->randomDigit(),
					"address" => $faker->address(),
					"academic_history" => $faker->word(),
					"job" => $faker->word(),
					"job_address" => $faker->address(),
					"image_1" => $faker->bothify('##??.jpg'),
					"image_2" => $faker->bothify('##??.jpg'),
					"image_3" => $faker->bothify('##??.jpg'),
					"image_4" => $faker->bothify('##??.jpg'),
					"image_5" => $faker->bothify('##??.jpg'),
					"image_6" => $faker->bothify('##??.jpg'),
					"image_7" => $faker->bothify('##??.jpg'),
					"image_8" => $faker->bothify('##??.jpg'),
					"image_9" => $faker->bothify('##??.jpg'),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }