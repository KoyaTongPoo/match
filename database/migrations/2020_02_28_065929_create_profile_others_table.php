<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateProfileOthersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("profile_others", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('telephone')->nullable();
						$table->integer('meet')->nullable();
						$table->integer('checklist_1')->nullable();
						$table->integer('checklist_2')->nullable();
						$table->integer('checklist_3')->nullable();
						$table->integer('checklist_4')->nullable();
						$table->integer('checklist_5')->nullable();
						$table->string('comment',20)->nullable();
						$table->integer('count')->nullable();
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
                    Schema::dropIfExists("profile_others");
                }
            }
        