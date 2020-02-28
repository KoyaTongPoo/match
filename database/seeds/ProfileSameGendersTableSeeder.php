<?php
use Illuminate\Database\Seeder;

    class ProfileSameGendersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="profile_same_genderTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\ProfileSameGender::create([
					"user_id" => $faker->randomDigit(),
					"profile" => $faker->word(),
					"star_love" => $faker->word(),
					"star_like" => $faker->word(),
					"star_dislike" => $faker->word(),
					" dislike_1" => $faker->word(),
					"dislike_2" => $faker->word(),
					"dislike_3" => $faker->word(),
					"dislike_4" => $faker->word(),
					"dislike_5" => $faker->word(),
					"dream_3y" => $faker->word(),
					"dream_10y" => $faker->word(),
					"dream_20y" => $faker->word(),
					"dream" => $faker->word(),
					"status" => $faker->randomDigit(),
					"tobacco" => $faker->randomDigit(),
					"salary" => $faker->randomDigit(),
					"Liquor" => $faker->randomDigit(),
					"blood" => $faker->randomDigit(),
					"rikon" => $faker->randomDigit(),
					"children" => $faker->randomDigit(),
					"body" => $faker->randomDigit(),
					"height" => $faker->randomDigit(),
					"Living_together" => $faker->randomDigit(),
					"value" => $faker->word(),
					"recommend_flg" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }