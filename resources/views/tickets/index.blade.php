<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Tickets</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Tickets</h1>
        <a href="{{ route('tickets.create') }}" class="btn btn-primary">Créer un Ticket</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Libellé</th>
                    <th>Prix</th>
                    <th>Nombre de Places</th>
                    <th>Type</th>
                    <th>Événement</th>
                    <th>Template</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->libelle }}</td>
                    <td>{{ $ticket->prix }}</td>
                    <td>{{ $ticket->nombre_place }}</td>
                    <td>{{ $ticket->type }}</td>
                    <td>{{ $ticket->evenement->nom }}</td>
                    <td>{{ $ticket->template->libelle }}</td>
                    <td>
                        <a href="{{ route('tickets.show', $ticket->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('tickets.edit', $ticket->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
