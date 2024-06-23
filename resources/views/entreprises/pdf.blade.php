<!DOCTYPE html>
<html>
<head>
    <title>Entreprise PDF</title>
</head>
<body>
    <h1>{{ $entreprise->nom }}</h1>
    <p>Pays: {{ $entreprise->pays }}</p>
    <p>Ville: {{ $entreprise->ville }}</p>
    <p>Quartier: {{ $entreprise->quartier }}</p>
    <p>Adresse: {{ $entreprise->adresse }}</p>
    <p>Utilisateur ID: {{ $entreprise->user_id }}</p>
</body>
</html>
