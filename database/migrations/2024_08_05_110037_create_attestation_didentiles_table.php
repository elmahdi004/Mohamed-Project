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
        // <th class="wd-15p border-bottom-0">Nom et prénom</th>
        // <th class="wd-15p border-bottom-0">né(e) le - à</th>
        // <th class="wd-20p border-bottom-0">N° de registre national</th>
        // <th class="wd-15p border-bottom-0">Domicilié(e) à</th>
        // <th class="wd-10p border-bottom-0">Téléphone</th>
        // <th class="wd-25p border-bottom-0">Agissant pour la société</th>
        // <th class="wd-25p border-bottom-0">Agissant pour la société ou l’asbl</th>
        // <th class="wd-25p border-bottom-0">en qualité de</th>
        // <th class="wd-25p border-bottom-0">Actions</th>
        Schema::create('attestation_didentiles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom')->nullable();
            $table->date('date_de_naissance')->nullable();
            $table->string('place_de_naissance')->nullable();
            $table->string('num_registre_national')->nullable();
            $table->string('domicilie')->nullable();
            $table->string('tel')->nullable();
            $table->string('agissant_societe')->nullable();
            $table->string('agissant_societe_asbl')->nullable();
            $table->string('qualite')->nullable();
            $table->boolean('constitution')->default(0);
            $table->boolean('nomination')->default(0);
            $table->boolean('demission')->default(0);
            $table->boolean('transfert')->default(0);
            $table->boolean('autre_modification')->default(0);
            $table->string('autre_modification_value')->nullable();
            $table->date('en_date_du')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attestation_didentiles');
    }
};
