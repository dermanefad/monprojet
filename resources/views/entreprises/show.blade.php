<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Détail Entreprise</title>
</head>
<body>
    <div class="container">
        <h1>{{ $entreprise->nom }}</h1>
        <p><strong>Pays:</strong> {{ $entreprise->pays }}</p>
        <p><strong>Ville:</strong> {{ $entreprise->ville }}</p>
        <p><strong>Quartier:</strong> {{ $entreprise->quartier }}</p>
        <p><strong>Adresse:</strong> {{ $entreprise->adresse }}</p>
        <p><strong>Utilisateur:</strong> {{ $entreprise->user->nom }}</p>
        <a href="{{ route('entreprises.index') }}" class="btn btn-secondary">Retour</a>
        <a href="{{ route('entreprises.downloadPdf', $entreprise->id) }}" class="btn btn-secondary">Télécharger en PDF</a>
    </div>
</body>
</html>
