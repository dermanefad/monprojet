<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modifier un Événement</title>
</head>
<body>
    <div class="container">
        <h1>Modifier un Événement</h1>
        <form action="{{ route('evenements.update', $evenement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{ $evenement->nom }}" required>
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">Pays</label>
                <input type="text" class="form-control" id="pays" name="pays" value="{{ $evenement->pays }}" required>
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" value="{{ $evenement->ville }}" required>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $evenement->adresse }}" required>
            </div>
            <div class="mb-3">
                <label for="gps" class="form-label">GPS</label>
                <input type="text" class="form-control" id="gps" name="gps" value="{{ $evenement->gps }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" required>{{ $evenement->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $evenement->date }}" required>
            </div>
            <div class="mb-3">
                <label for="heur_debut" class="form-label">Heure de Début</label>
                <input type="time" class="form-control" id="heur_debut" name="heur_debut" value="{{ $evenement->heur_debut }}" required>
            </div>
            <div class="mb-3">
                <label for="heur_fin" class="form-label">Heure de Fin</label>
                <input type="time" class="form-control" id="heur_fin" name="heur_fin" value="{{ $evenement->heur_fin }}" required>
            </div>
            <div class="mb-3">
                <label for="entreprises_id" class="form-label">Entreprise</label>
                <input type="number" class="form-control" id="entreprises_id" name="entreprises_id" value="{{ $evenement->entreprises_id }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Sauvegarder</button>
            <a href="{{ route('evenements.index') }}" class="btn btn-primary">Retour à la liste</a>
        </form>
    </div>
</body>
</html>
