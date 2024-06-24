<!-- resources/views/commandes/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Détails de la Commande</title>
</head>
<body>
    <div class="container">
        <h1>Détails de la Commande</h1>
        <p><strong>ID :</strong> {{ $commande->id }}</p>
        <p><strong>Date :</strong> {{ $commande->date }}</p>
        <p><strong>Utilisateur :</strong> {{ $commande->user->nom }} {{ $commande->user->prenom }}</p>
        
        <a href="{{ route('commandes.index') }}" class="btn btn-primary">Retour</a>
        <a href="{{ route('commandes.downloadPDF', $commande->id) }}" class="btn btn-secondary">Télécharger en PDF</a>
    </div>
</body>
</html>
