<!-- resources/views/commandes/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Créer une Commande</title>
</head>
<body>
    <div class="container">
        <h1>Créer une Commande</h1>
        <form action="{{ route('commandes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="text" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">Utilisateur</label>
                <select class="form-control" id="user_id" name="user_id" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->nom }} {{ $user->prenom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
        <a href="{{ route('commandes.index') }}" class="btn btn-secondary">Retour</a>
    </div>
</body>
</html>
