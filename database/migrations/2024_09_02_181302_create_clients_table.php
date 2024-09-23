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
          Schema::create('clients', function (Blueprint $table) {
               $table->id();
               $table->string('raisonsociale', 50)->unique();
               $table->string('siret', 20)->unique();
               $table->string('adresse', 50)->nullable();
               $table->string('codepostal', 5)->nullable();
               $table->string('ville', 50)->nullable();
               $table->string('web')->nullable();
               $table->timestamps();
          });
     }

     /**
     * Reverse the migrations.
     */
     public function down(): void
     {
          Schema::dropIfExists('clients');
     }
};
