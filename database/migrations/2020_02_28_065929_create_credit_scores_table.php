<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateCreditScoresTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("credit_scores", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable();
						$table->integer('credit_score')->nullable();
						$table->integer('login_3')->nullable();
						$table->integer('login_10')->nullable();
						$table->integer('login_30')->nullable();
						$table->integer('login_75')->nullable();
						$table->integer('comment_likes_7')->nullable();
						$table->integer('comment_likes_30')->nullable();
						$table->integer('comment_likes_75')->nullable();
						$table->integer('comment_dislikes_7')->nullable();
						$table->integer('comment_dislikes_30')->nullable();
						$table->integer('comment_dislikes_75')->nullable();
						$table->integer('profile_checklist_1')->nullable();
						$table->integer('profile_checklist_2')->nullable();
						$table->integer('profile_checklist_3')->nullable();
						$table->integer('profile_checklist_4')->nullable();
						$table->integer('profile_checklist_5')->nullable();
						$table->integer('message_response_1')->nullable();
						$table->integer('message_response_2')->nullable();
						$table->integer('message_response_3')->nullable();
						$table->integer('reported_1')->nullable();
						$table->integer('reported_2')->nullable();
						$table->integer('reported_3')->nullable();
						$table->integer('reported_kanri')->nullable();
						$table->integer('profile_fake')->nullable();
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
                    Schema::dropIfExists("credit_scores");
                }
            }
        