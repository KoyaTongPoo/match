<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateRecommendsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("recommends", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('from_user')->nullable();
						$table->integer('to_man')->nullable();
						$table->integer('to_woman')->nullable();
						$table->string('to_man_message',20)->nullable();
						$table->string('to_woman_message',20)->nullable();
						$table->integer('man_qa_1')->nullable();
						$table->integer('man_qa_2')->nullable();
						$table->integer('man_qa_3')->nullable();
						$table->integer('woman_qa_1')->nullable();
						$table->integer('woman_qa_2')->nullable();
						$table->integer('woman_qa_3')->nullable();
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
                    Schema::dropIfExists("recommends");
                }
            }
        