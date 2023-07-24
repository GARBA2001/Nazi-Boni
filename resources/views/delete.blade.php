<!-- resources/views/etudiants/index.blade.php -->

<x-app-layout>

    <h1>Liste des étudiants</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date de Naissance</th>
                <!-- Ajoutez d'autres colonnes ici si nécessaire -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($etudiants as $etudiant)
            <tr>
                <td>{{ $etudiant->nom }}</td>
                <td>{{ $etudiant->prenom }}</td>
                <td>{{ $etudiant->date_naissance }}</td>
                <!-- Ajoutez d'autres colonnes ici si nécessaire -->
                <td>
                    <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $etudiants->links() }}

</x-app-layout>
