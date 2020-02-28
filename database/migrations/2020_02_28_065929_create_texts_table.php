<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateTextsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("texts", function (Blueprint $table) {
						$table->increments('id');
						$table->string('title_id')->nullable();
						$table->integer('user_id')->nullable();
						$table->text('message')->nullable();
						$table->string('image',50)->nullable();
						$table->integer('ip')->nullable();
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
                    Schema::dropIfExists("texts");
                }
            }
        