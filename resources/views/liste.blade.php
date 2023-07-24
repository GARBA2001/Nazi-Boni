<!-- resources/views/etudiants/index.blade.php -->

<x-app-layout>

    <h1>Liste des étudiants</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <th>Cycle</th>
                <th>Niveau d'étude</th>
                <th>Année Académique</th>
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
              <a href="/detail/{{ $etudiant->id }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
              <a href="/modifier/{{ $etudiant->id }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
              <a href="/delete/{{ $etudiant->id }}"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                </td>
                <td><a href="/carte/{{ $etudiant->id }}">Imprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>
