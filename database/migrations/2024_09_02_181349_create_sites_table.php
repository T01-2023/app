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
          Schema::create('sites', function (Blueprint $table) {
               $table->id();
               $table->foreignId('client_id')->constrained();
               $table->string('nom', 200)->unique();
               $table->string('adresse', 50)->nullable();
               $table->string('codepostal', 5)->nullable();
               $table->string('ville', 50)->nullable();
               $table->timestamps();
          });
     }

     /**
     * Reverse the migrations.
     */
     public function down(): void
     {
          Schema::dropIfExists('sites');
     }
};
