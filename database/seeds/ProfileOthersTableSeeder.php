<?php
use Illuminate\Database\Seeder;

    class ProfileOthersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="profile_otherTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\ProfileOther::create([
					"telephone" => $faker->randomDigit(),
					"meet" => $faker->randomDigit(),
					"checklist_1" => $faker->randomDigit(),
					"checklist_2" => $faker->randomDigit(),
					"checklist_3" => $faker->randomDigit(),
					"checklist_4" => $faker->randomDigit(),
					"checklist_5" => $faker->randomDigit(),
					"comment" => $faker->word(),
					"count" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }