<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('validator_id'); // user who validates holiday period for example
            $table->unsignedBigInteger('period_type_id')->nullable();
            $table->text('informations')->nullable();
            $table->boolean('accepted')->nullable()->default(0);
            $table->boolean('denied')->nullable()->default(0);
            $table->text('reason_denied')->nullable();
            $table->boolean('read_by_manager')->nullable()->default(0);
            $table->boolean('read_by_user')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('validator_id')
                ->references('id')
                ->on('users');

            $table->foreign('period_type_id')
                ->references('id')
                ->on('period_types')
                ->onDelete('set null');
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
            $table->dropForeign(['validator_id']);
            $table->dropForeign(['period_type_id']);
        });
        Schema::dropIfExists('periods');
    }
}
