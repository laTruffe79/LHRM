<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); //user is_manager id
            $table->unsignedBigInteger('service_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');

            $table->unique(['user_id','service_id'],'unique_composite_key');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_projects', function (Blueprint $table) {
            $table->dropUnique('unique_composite_key');
            $table->dropForeign('user_id');
            $table->dropForeign('service_id');
        });

        Schema::dropIfExists('manager_service');
    }
}
