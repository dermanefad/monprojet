<!-- resources/views/tickets/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Ticket</title>
</head>
<body>
    <div class="container">
        <h1>Détails du Ticket</h1>
        <p><strong>Libellé:</strong> {{ $ticket->libelle }}</p>
        <p><strong>Prix:</strong> {{ $ticket->prix }}</p>
        <p><strong>Nombre de Places:</strong> {{ $ticket->nombre_place }}</p>
        <p><strong>Type:</strong> {{ $ticket->type }}</p>
        @if ($ticket->evenement)
            <p><strong>Événement:</strong> {{ $ticket->evenement->nom }}</p>
        @else
            <p><strong>Événement:</strong> Aucun événement associé</p>
        @endif
        <p><strong>Template:</strong> {{ $ticket->template->libelle }}</p>
        <a href="{{ route('tickets.index') }}" class="btn btn-primary">Retour à la liste</a>
        <a href="{{ route('tickets.downloadPdf', $ticket->id) }}" class="btn btn-secondary">Télécharger en PDF</a>
    </div>
</body>
</html>
