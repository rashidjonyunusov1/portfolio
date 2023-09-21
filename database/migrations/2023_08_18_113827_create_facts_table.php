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
        Schema::create('facts', function (Blueprint $table) {
            $table->id();
            $table->string('title_uz');
            $table->string('title_ru');
            $table->string('title_en');
            $table->string('happy_clients_num');
            $table->string('happy_clients_uz');
            $table->string('happy_clients_ru');
            $table->string('happy_clients_en');
            $table->string('projects_num');
            $table->string('projects_uz');
            $table->string('projects_ru');
            $table->string('projects_en');
            $table->string('hours_of_support_num');
            $table->string('hours_of_support_uz');
            $table->string('hours_of_support_ru');
            $table->string('hours_of_support_en');
            $table->string('hard_workers_num');
            $table->string('hard_workers_uz');
            $table->string('hard_workers_ru');
            $table->string('hard_workers_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facts');
    }
};
