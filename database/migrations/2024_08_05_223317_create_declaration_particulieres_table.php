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
        Schema::create('declaration_particulieres', function (Blueprint $table) {
            $table->id();
            $table->string('num_entreprise')->nullable();
            $table->string('denomation_sociale')->nullable();
            $table->string('forme_legale')->nullable();
            $table->string('siege_social')->nullable();
            $table->string('representer_par')->nullable();
            $table->string('fait_a')->nullable();
            $table->date('en_date_du')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaration_particulieres');
    }
};
