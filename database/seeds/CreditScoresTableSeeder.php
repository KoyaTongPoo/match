<?php
use Illuminate\Database\Seeder;

    class CreditScoresTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="credit_scoreTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\CreditScore::create([
					"user_id" => $faker->randomDigit(),
					"credit_score" => $faker->randomDigit(),
					"login_3" => $faker->randomDigit(),
					"login_10" => $faker->randomDigit(),
					"login_30" => $faker->randomDigit(),
					"login_75" => $faker->randomDigit(),
					"comment_likes_7" => $faker->randomDigit(),
					"comment_likes_30" => $faker->randomDigit(),
					"comment_likes_75" => $faker->randomDigit(),
					"comment_dislikes_7" => $faker->randomDigit(),
					"comment_dislikes_30" => $faker->randomDigit(),
					"comment_dislikes_75" => $faker->randomDigit(),
					"profile_checklist_1" => $faker->randomDigit(),
					"profile_checklist_2" => $faker->randomDigit(),
					"profile_checklist_3" => $faker->randomDigit(),
					"profile_checklist_4" => $faker->randomDigit(),
					"profile_checklist_5" => $faker->randomDigit(),
					"message_response_1" => $faker->randomDigit(),
					"message_response_2" => $faker->randomDigit(),
					"message_response_3" => $faker->randomDigit(),
					"reported_1" => $faker->randomDigit(),
					"reported_2" => $faker->randomDigit(),
					"reported_3" => $faker->randomDigit(),
					"reported_kanri" => $faker->randomDigit(),
					"profile_fake" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }