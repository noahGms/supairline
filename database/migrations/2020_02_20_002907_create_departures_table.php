<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeparturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numero', 8)->unique();
            $table->dateTime('departureDate');
            $table->integer('placeEmpty');
            $table->integer('placeUsed');

            $table->unsignedInteger('employeesPiloteId');
            $table->unsignedInteger('employeesPiloteId1')->nullable();
            $table->unsignedInteger('employeesMemberId1');
            $table->unsignedInteger('employeesMemberId2');
            $table->unsignedInteger('employeesMemberId3')->nullable();
            $table->unsignedInteger('employeesMemberId4')->nullable();

            $table->unsignedInteger('flight_id');

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
        Schema::dropIfExists('departures');
    }
}
