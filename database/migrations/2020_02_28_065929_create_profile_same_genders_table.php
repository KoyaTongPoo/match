<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateProfileSameGendersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("profile_same_genders", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable();
						$table->string('profile',120)->nullable();
						$table->string('star_love')->nullable();
						$table->string('star_like')->nullable();
						$table->string('star_dislike')->nullable();
						$table->string(' dislike_1')->nullable();
						$table->string('dislike_2')->nullable();
						$table->string('dislike_3')->nullable();
						$table->string('dislike_4')->nullable();
						$table->string('dislike_5')->nullable();
						$table->string('dream_3y')->nullable();
						$table->string('dream_10y')->nullable();
						$table->string('dream_20y')->nullable();
						$table->string('dream')->nullable();
						$table->integer('status')->nullable();
						$table->integer('tobacco')->nullable();
						$table->integer('salary')->nullable();
						$table->integer('Liquor')->nullable();
						$table->integer('blood')->nullable();
						$table->integer('rikon')->nullable();
						$table->integer('children')->nullable();
						$table->integer('body')->nullable();
						$table->integer('height')->nullable();
						$table->integer('Living_together')->nullable();
						$table->string('value')->nullable();
						$table->integer('recommend_flg')->nullable();
						$table->timestamps();
						$table->softDeletes();

                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("profile_same_genders");
                }
            }
        