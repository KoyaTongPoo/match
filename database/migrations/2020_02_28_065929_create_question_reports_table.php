<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateQuestionReportsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("question_reports", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('from_user')->nullable();
						$table->integer('to_user')->nullable();
						$table->integer('kanri_flg')->nullable();
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
                    Schema::dropIfExists("question_reports");
                }
            }
        