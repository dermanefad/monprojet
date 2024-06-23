<!-- resources/views/tickets/pdf.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Details PDF</title>
</head>
<body>
    <h1>Détails du Ticket</h1>
    <p><strong>Libellé:</strong> {{ $ticket->libelle }}</p>
    <p><strong>Prix:</strong> {{ $ticket->prix }}</p>
    <p><strong>Nombre de Places:</strong> {{ $ticket->nombre_place }}</p>
    <p><strong>Type:</strong> {{ $ticket->type }}</p>
    <p><strong>Événement:</strong> {{ $ticket->evenement->nom }}</p>
    <p><strong>Template:</strong> {{ $ticket->template->libelle }}</p>
</body>
</html>
