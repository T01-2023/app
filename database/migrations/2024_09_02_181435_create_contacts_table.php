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
          Schema::create('contacts', function (Blueprint $table) {
               $table->id();
               $table->foreignId('client_id')->constrained()->nullable();
               $table->foreignId('site_id')->constrained()->nullable();
               $table->string('nom', 50)->nullable();
               $table->string('prenom', 50)->nullable();
               $table->string('email', 50)->nullable();
               $table->string('mobile', 50)->nullable();
               $table->string('fixe', 50)->nullable();
               $table->timestamps();
          });
     }

     /**
     * Reverse the migrations.
     */
     public function down(): void
     {
          Schema::dropIfExists('contacts');
     }
};
