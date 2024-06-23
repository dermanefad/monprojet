<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modifier un Ticket</title>
</head>
<body>
    <div class="container">
        <h1>Modifier un Ticket</h1>
        <form action="{{ route('tickets.update', $ticket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="libelle" class="form-label">Libellé</label>
                <input type="text" class="form-control" id="libelle" name="libelle" value="{{ $ticket->libelle }}" required>
            </div>
            <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix" value="{{ $ticket->prix }}" required>
            </div>
            <div class="mb-3">
                <label for="nombre_place" class="form-label">Nombre de Places</label>
                <input type="text" class="form-control" id="nombre_place" name="nombre_place" value="{{ $ticket->nombre_place }}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $ticket->type }}" required>
            </div>
            <div class="mb-3">
                <label for="evenements_id" class="form-label">Événement</label>
                <select class="form-control" id="evenements_id" name="evenements_id" required>
                    @foreach ($evenements as $evenement)
                        <option value="{{ $evenement->id }}" {{ $evenement->id == $ticket->evenements_id ? 'selected' : '' }}>{{ $evenement->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="templates_id" class="form-label">Template</label>
                <select class="form-control" id="templates_id" name="templates_id" required>
                    @foreach ($templates as $template)
                        <option value="{{ $template->id }}" {{ $template->id == $ticket->templates_id ? 'selected' : '' }}>{{ $template->libelle }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
            <a href="{{ route('tickets.index') }}" class="btn btn-primary">Retour à la liste</a>
        </form>
    </div>
</body>
</html>
