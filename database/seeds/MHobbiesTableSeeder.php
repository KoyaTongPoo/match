<?php
use Illuminate\Database\Seeder;

    class MHobbiesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="m_hobbieTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MHobby::create([
					"m_hobby_id" => $faker->randomDigit(),
					"m_hobby_name" => $faker->name()
                ]);
            }
        }
    }