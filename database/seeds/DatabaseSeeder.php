<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //********************************************
        // Cmd:[ php artisan db:seed ]
        //********************************************
        // $this->call(UsersTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(BoardsTableSeeder::class);
		$this->call(TextsTableSeeder::class);
		$this->call(ProfilesTableSeeder::class);
		$this->call(MessagesTableSeeder::class);
		$this->call(MatchingsTableSeeder::class);
		$this->call(MGendersTableSeeder::class);
		$this->call(QuestionsTableSeeder::class);
		$this->call(TextLikesTableSeeder::class);
		$this->call(QuestionReportsTableSeeder::class);
		$this->call(ProfileReportsTableSeeder::class);
		$this->call(RecommendsTableSeeder::class);
		$this->call(ProfileSameGendersTableSeeder::class);
		$this->call(ProfileOthersTableSeeder::class);
		$this->call(MeetsTableSeeder::class);
		$this->call(LogsTableSeeder::class);
		$this->call(CreditScoresTableSeeder::class);
		$this->call(ReportProfileFakesTableSeeder::class);
		$this->call(PopularScoresTableSeeder::class);
		$this->call(MHobbiesTableSeeder::class);
   }
}