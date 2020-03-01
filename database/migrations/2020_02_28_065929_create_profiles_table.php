<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateProfilesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("profiles", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('user_id')->nullable();
						$table->string('name',64)->nullable();
						$table->string('profile',120)->nullable();
						$table->integer('hobby')->nullable();
						$table->string('address')->nullable();
						$table->string('academic_history')->nullable();
						$table->string('job')->nullable();
						$table->string('job_address')->nullable();
						$table->string('image_1',50)->nullable();
						$table->string('image_2',50)->nullable();
						$table->string('image_3',50)->nullable();
						$table->string('image_4',50)->nullable();
						$table->string('image_5',50)->nullable();
						$table->string('image_6',50)->nullable();
						$table->string('image_7',50)->nullable();
						$table->string('image_8',50)->nullable();
						$table->string('image_9',50)->nullable();
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
                    Schema::dropIfExists("profiles");
                }
            }
        