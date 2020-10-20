<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomizeUserModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->date('hired_at')->nullable();
            $table->char('gender',6)->nullable();
            $table->date('birthdate')->nullable();
            $table->char('phone_prefix',6)->nullable();
            $table->char('phone_number',20)->nullable();
            $table->boolean('is_manager')->nullable()->default('0');
            $table->text('informations')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('hired_at');
            $table->dropColumn('gender');
            $table->dropColumn('birthdate');
            $table->dropColumn('phone_prefix');
            $table->dropColumn('phone_number');
            $table->dropColumn('is_manager');
            $table->dropColumn('informations');
            $table->dropColumn('deleted_at');
        });
    }
}
