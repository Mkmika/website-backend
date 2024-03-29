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
        Schema::create('emplois', function (Blueprint $table) {
            $table->id();
            $table->string("titreEmploi");
            $table->string("description");
            $table->string("role");
            $table->string("responsabilite");
            $table->string("profil");
            $table->string("categorieEmploi");
            $table->string("anneeExperience");
            $table->string("nomEntreprise");
            $table->string("remuneration");
            $table->string("adresse");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emplois');
    }
};
