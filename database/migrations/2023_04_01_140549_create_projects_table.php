<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('area');
            $table->longText('locationLink')->nullable();
            $table->longText('details');
            $table->longText('features');
            $table->string('qoute');
            $table->integer('typeID');
            $table->string('typeName');
            $table->integer('categoryID');
            $table->string('categoryName');
            $table->string('thumbnail_img', 100);
            $table->string('background_img', 100);
            $table->string('ataglance_img', 100);
            $table->string('features_img', 100);
            $table->string('booknow_img', 100);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
