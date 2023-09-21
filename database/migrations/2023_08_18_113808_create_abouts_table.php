<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->text('description1_uz');
            $table->text('description1_ru');
            $table->text('description1_en');
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('brithday_uz');
            $table->string('brithday_ru');
            $table->string('brithday_en');
            $table->string('website');
            $table->string('phone');
            $table->string('city_uz');
            $table->string('city_ru');
            $table->string('city_en');
            $table->string('age');
            $table->string('dagree_uz');
            $table->string('dagree_ru');
            $table->string('dagree_en');
            $table->string('email');
            $table->string('freelance_uz');
            $table->string('freelance_ru');
            $table->string('freelance_en');
            $table->text('description2_uz');
            $table->text('description2_ru');
            $table->text('description2_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
