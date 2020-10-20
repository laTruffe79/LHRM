<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->char('name',100);
            $table->text('logo')->nullable();
            $table->char('siret',50)->nullable();//french administrative id
            $table->char('phone',20);
            $table->char('address',254);
            $table->char('city',70);
            $table->char('postal_code',10);
            $table->char('country',50);
            $table->time('business_hour_from')->nullable();
            $table->time('business_hour_to')->nullable();
            $table->char('email',100)->nullable();
            $table->char('website',100)->nullable();
            $table->boolean('head_office')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
