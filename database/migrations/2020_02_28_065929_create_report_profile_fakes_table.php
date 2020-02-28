<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateReportProfileFakesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("report_profile_fakes", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('from_user')->nullable();
						$table->integer('to_user')->nullable();
						$table->string('fake_status')->nullable();
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
                    Schema::dropIfExists("report_profile_fakes");
                }
            }
        