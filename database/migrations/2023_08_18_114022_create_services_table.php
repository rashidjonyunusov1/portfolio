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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('description_uz');
            $table->text('description_ru');
            $table->text('description_en');
            $table->text('services_name_uz');
            $table->text('services_name_ru');
            $table->text('services_name_en');
            $table->text('services_description_uz');
            $table->text('services_description_ru');
            $table->text('services_description_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
