<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Détails du Ticket</title>
</head>
<body>
    <div class="container">
        <h1>Détails du Ticket</h1>
        <p><strong>Libellé:</strong> {{ $ticket->libelle }}</p>
        <p><strong>Prix:</strong> {{ $ticket->prix }}</p>
        <p><strong>Nombre de Places:</strong> {{ $ticket->nombre_place }}</p>
        <p><strong>Type:</strong> {{ $ticket->type }}</p>
        <p><strong>Événement:</strong> {{ $ticket->evenement->nom }}</p>
        <p><strong>Template:</strong> {{ $ticket->template->libelle }}</p>
        <a href="{{ route('tickets.index') }}" class="btn btn-primary">Retour à la liste</a>
        <a href="{{ route('tickets.downloadPdf', $ticket->id) }}" class="btn btn-secondary">Télécharger en PDF</a>
    </div>
</body>
</html>
