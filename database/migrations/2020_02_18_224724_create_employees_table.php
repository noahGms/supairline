<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('socialNumero')->unique();
            $table->string('name');
            $table->string('firstName');
            $table->string('address');
            $table->unsignedInteger('city_id');
            $table->float('salary');
            $table->float('hours');
            $table->unsignedInteger('license_id')->unique()->nullable();
            $table->unsignedInteger('employeesFunction_id');
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
        Schema::dropIfExists('employees');
    }
}
