<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Lignes de Commande</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Lignes de Commande</h1>
        <a href="{{ route('ligne_commandes.create') }}" class="btn btn-primary">Créer une nouvelle ligne de commande</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Quantité</th>
                    <th>Commande</th>
                    <th>Ticket</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ligneCommandes as $ligneCommande)
                <tr>
                    <td>{{ $ligneCommande->id }}</td>
                    <td>{{ $ligneCommande->quantite }}</td>
                    <td>{{ $ligneCommande->commande->date }}</td>
                    <td>{{ $ligneCommande->ticket->libelle }}</td>
                    <td>
                        <a href="{{ route('ligne_commandes.show', $ligneCommande->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('ligne_commandes.edit', $ligneCommande->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('ligne_commandes.destroy', $ligneCommande->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('ligne_commandes.downloadPdf', $ligneCommande->id) }}" class="btn btn-secondary">Télécharger en PDF</a>
    </div>
</body>
</html>
