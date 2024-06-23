<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Détails de la Ligne de Commande</title>
</head>
<body>
    <div class="container">
        <h1>Détails de la Ligne de Commande</h1>
        <p><strong>Quantité:</strong> {{ $ligneCommande->quantite }}</p>
        <p><strong>Commande:</strong> {{ $ligneCommande->commande->date }}</p>
        <p><strong>Ticket:</strong> {{ $ligneCommande->ticket->libelle }}</p>
        <a href="{{ route('ligne_commandes.index') }}" class="btn btn-primary">Retour à la liste</a>
        <a href="{{ route('ligne_commandes.downloadPdf', $ligneCommande->id) }}" class="btn btn-secondary">Télécharger en PDF</a>
    </div>
</body>
</html>
