<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Événements</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Événements</h1>
        <a href="{{ route('evenements.create') }}" class="btn btn-primary">Créer un Événement</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Pays</th>
                    <th>Ville</th>
                    <th>Adresse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                <tr>
                   {{-- @dump($evenement); --}}
                    <td>{{ $evenement->nom }}</td>
                    <td>{{ $evenement->pays }}</td>
                    <td>{{ $evenement->ville }}</td>
                    <td>{{ $evenement->adresse }}</td>
                    <td>
                        <a href="{{ route('evenements.show', $evenement->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('evenements.edit', $evenement->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
