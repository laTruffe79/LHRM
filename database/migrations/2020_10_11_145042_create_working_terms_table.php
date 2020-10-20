<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkingTermsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_terms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('employment_id');
            $table->unsignedBigInteger('service_id');
            $table->date('valid_untill')->nullable();
            $table->boolean('active')->default(0);
            $table->tinyInteger('days_off_per_year')->nullable(); //How many days off per year
            $table->tinyInteger('additional_days_off')->nullable(); //due to exceptional working time
            $table->tinyInteger('current_balance_days_off')->nullable(); //current balance days off
            $table->tinyInteger('working_time_per_week')->nullable();
            $table->float('annual_salary')->nullable();
            $table->float('current_total_bonus')->nullable(); // calculated field from bonus
            $table->text('informations')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('employment_id')->references('id')->on('employments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('working_terms', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['employment_id']);
        });
        Schema::dropIfExists('working_terms');
    }
}
