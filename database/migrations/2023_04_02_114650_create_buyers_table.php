<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('profession');
            $table->string('contactno');
            $table->string('email');
            $table->string('maillingAddress');
            $table->string('preferedLoc');
            $table->string('preferedSize');
            $table->integer('carparkingReq');
            $table->string('expectedHOD');
            $table->string('facing');
            $table->string('preferedFlr');
            $table->integer('numOfbedRoom');
            $table->integer('numOfBathRoom');
            $table->tinyInteger('readStatus');
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
        Schema::dropIfExists('buyers');
    }
};
