<!-- resources/views/etudiants/show.blade.php -->

<x-app-layout>

    <h1>Détails de l'étudiant</h1>


<p><strong>Photo</strong>    @if($etudiant->photo)
                        <img src="{{ asset('photos/'.$etudiant->photo) }}" alt="Photo de l'étudiant" width="50px" height="50px">
                    @else
                        Aucune photo
                    @endif</p>
    <p><strong>Nom :</strong> {{ $etudiant->nom }}</p>
    <p><strong>Prénom :</strong> {{ $etudiant->prenom }}</p>
    <p><strong>Date de Naissance :</strong> {{ $etudiant->date_naissance }}</p>
    <p><strong>Cycle :</strong> {{ $etudiant->cycle }}</p>
    <p><strong>Niveau:</strong> {{ $etudiant->niveau_etude }}</p>
    <p><strong>Annee :</strong> {{ $etudiant->annee_academique }}</p>
    
    
    <!-- Ajoutez d'autres informations à afficher ici si nécessaire -->

    <a href="" class="btn">Retour</a>

</x-app-layout>
