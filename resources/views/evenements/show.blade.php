<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Détails de l'Événement</title>
</head>
<body>
    <div class="container">
        <h1>Détails de l'Événement</h1>
        <p><strong>Nom:</strong> {{ $evenement->nom }}</p>
        <p><strong>Pays:</strong> {{ $evenement->pays }}</p>
        <p><strong>Ville:</strong> {{ $evenement->ville }}</p>
        <p><strong>Adresse:</strong> {{ $evenement->adresse }}</p>
        <p><strong>GPS:</strong> {{ $evenement->gps }}</p>
        <p><strong>Description:</strong> {{ $evenement->description }}</p>
        <p><strong>Date:</strong> {{ $evenement->date }}</p>
        <p><strong>Heure de Début:</strong> {{ $evenement->heur_debut }}</p>
        <p><strong>Heure de Fin:</strong> {{ $evenement->heur_fin }}</p>
        <p><strong>Entreprise ID:</strong> {{ $evenement->entreprises_id }}</p>
        <a href="{{ route('evenements.index') }}" class="btn btn-primary">Retour à la liste</a>
    </div>
</body>
</html>
