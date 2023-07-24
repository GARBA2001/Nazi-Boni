<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nom', 100); // Ajout de contrainte de longueur (par exemple, 100 caractères max)
            $table->string('prenom', 100); // Ajout de contrainte de longueur (par exemple, 100 caractères max)
            $table->date('date_naissance');
            $table->string('cycle', 50); // Ajout de contrainte de longueur (par exemple, 50 caractères max)
            $table->string('niveau_etude', 50); // Ajout de contrainte de longueur (par exemple, 50 caractères max)
            $table->string('annee_academique', 20); // Ajout de contrainte de longueur (par exemple, 20 caractères max)
            // $table->string('matricule')->nullable();
            $table->string('photo'); // Vous pouvez définir une longueur pour ce champ si nécessaire
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}
