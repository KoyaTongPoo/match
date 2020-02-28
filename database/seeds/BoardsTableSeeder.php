<?php
use Illuminate\Database\Seeder;

    class BoardsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="boardTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Board::create([
					"title" => $faker->word(),
					"user_id" => $faker->word(),
					"published" => $faker->date()." ".$faker->time(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }