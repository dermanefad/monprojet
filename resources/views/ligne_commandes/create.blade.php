<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Créer une Ligne de Commande</title>
</head>
<body>
    <div class="container">
        <h1>Créer une Ligne de Commande</h1>
        <form action="{{ route('ligne_commandes.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="quantite" class="form-label">Quantité</label>
                <input type="text" class="form-control" id="quantite" name="quantite" required>
            </div>
            <div class="mb-3">
                <label for="commandes_id" class="form-label">Commande</label>
                <select class="form-control" id="commandes_id" name="commandes_id" required>
                    @foreach ($commandes as $commande)
                        <option value="{{ $commande->id }}">{{ $commande->date }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tickets_id" class="form-label">Ticket</label>
                <select class="form-control" id="tickets_id" name="tickets_id" required>
                    @foreach ($tickets as $ticket)
                        <option value="{{ $ticket->id }}">{{ $ticket->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
</body>
</html>
