<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTypesToPeriodTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('period_types', function (Blueprint $table) {
            $table->boolean('type_days_off')->nullable()->default(0)->after('name');
            $table->boolean('type_additional_days_off')->nullable()->default(0)->after('type_days_off');
            $table->boolean('type_sickness')->nullable()->default(0)->after('type_additional_days_off');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('period_types', function (Blueprint $table) {
            $table->dropColumn('type_days_off');
            $table->dropColumn('type_additional_days_off');
            $table->dropColumn('type_sickness');
        });
    }
}
