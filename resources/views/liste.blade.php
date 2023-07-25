<!-- resources/views/etudiants/index.blade.php -->

<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>

    <!-- Boostraps -->
          <!-- <link rel="stylesheet" href="{{ asset('style/bootstrap-5.0.2-dist/css/bootstrap.min.css')}}">  -->
</head>
<body>
<x-slot name="header">
        <h2 >
            {{ __('Liste') }}
        </h2>
    </x-slot>

    <div class="table">
        <div class="table_header">
            <p>Liste des étudiants</p>
            <div>
                <input type="text" class="op" placeholder="rechercher">
                <button class="add_new">rechercher</button>
            </div>
        </div>
       
        <div class="table_section">
        <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Naissance</th>
                <th>Cycle</th>
                <th>Niveau d'étude</th>
                <th>Année </th>
                <th>Photo</th>
                <th>Action</th>
                <th><a href="">Imprimer</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->date_naissance }}</td>
                <td>{{ $etudiant->cycle }}</td>
                <td>{{ $etudiant->niveau_etude }}</td>
                <td>{{ $etudiant->annee_academique }}</td>
                <td>
                    @if($etudiant->photo)
                        <img src="{{ asset('photos/'.$etudiant->photo) }}" alt="Photo de l'étudiant" width="50px" height="50px">
                    @else
                        Aucune photo
                    @endif
                </td>
                <td>
                   <button class="button"><a href="/detail/{{ $etudiant->id }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a></button> 
               <button class="button"><a href="/modifier/{{ $etudiant->id }}"><i class='fas fa-edit'></i></a></button>
               <button class="button"><a href="/delete/{{ $etudiant->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
                </td>
                <td><a href="/carte/{{ $etudiant->id }}">Imprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table> 
        </div>

    </div>

    <!-- <h1 class="list">Liste des étudiants</h1> -->

    
</body>
</html>

</x-app-layout>
