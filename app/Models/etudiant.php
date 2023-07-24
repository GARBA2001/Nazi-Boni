<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants';

    protected $fillable = [
        'id', // Ajoutez la clé primaire 'id' à la liste des champs $fillable si elle existe dans votre table
        'nom',
        'prenom',
        'date_naissance',
        'cycle',
        'niveau_etude',
        'annee_academique',
        'photo',
    ];
}
