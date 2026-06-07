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
        Schema::create('land_owners', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contactperson')->nullable();
            $table->string('email');
            $table->string('contactno');
            $table->string('locality');
            $table->string('address');
            $table->integer('landsize');
            $table->string('roadwidth');
            $table->string('landCategory');
            $table->string('facing');
            $table->string('features')->nullable();
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
        Schema::dropIfExists('land_owners');
    }
};
