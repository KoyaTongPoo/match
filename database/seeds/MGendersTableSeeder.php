<?php
use Illuminate\Database\Seeder;

    class MGendersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="m_genderTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\MGender::create([
					"m_gender_id" => $faker->randomDigit(),
					"m_gender_name" => $faker->name()
                ]);
            }
        }
    }