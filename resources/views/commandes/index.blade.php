<!-- resources/views/commandes/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Commandes</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Commandes</h1>
        <a href="{{ route('commandes.create') }}" class="btn btn-primary">Créer une Commande</a>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date</th>
                    <th scope="col">Utilisateur</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <td>{{ $commande->id }}</td>
                        <td>{{ $commande->date }}</td>
                        <td>{{ $commande->user->nom }} {{ $commande->user->prenom }}</td>
                        <td>
                            <a href="{{ route('commandes.show', $commande->id) }}" class="btn btn-sm btn-info">Voir</a>
                            <a href="{{ route('commandes.edit', $commande->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                            
                            <form action="{{ route('commandes.destroy', $commande->id) }}"  method="post">
                                @csrf
                                @method("DELETE")
        
                                <button class="btn btn-danger">Delete</a></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>
