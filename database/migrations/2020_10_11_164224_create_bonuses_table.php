<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('working_terms_id');
            $table->unsignedBigInteger('user_id');
            $table->char('name');
            $table->tinyInteger('amount');
            $table->date('payment_date');
            $table->text('informations')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('working_terms_id')->references('id')->on('working_terms')->onDelete('cascade');

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
            $table->dropForeign(['working_terms_id']);
        });
        Schema::dropIfExists('bonuses');
    }
}
