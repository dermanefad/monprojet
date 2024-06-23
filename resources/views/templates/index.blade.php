<!-- resources/views/templates/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste des Templates</title>
</head>
<body>
    <div class="container">
        <h1>Liste des Templates</h1>
        <a href="{{ route('templates.create') }}" class="btn btn-primary">Créer un Template</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Libelle</th>
                    <th>Contenu</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($templates as $template)
                <tr>
                    <td>{{ $template->libelle }}</td>
                    <td>{{ $template->contenu }}</td>
                    <td>
                        <a href="{{ route('templates.show', $template->id) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('templates.edit', $template->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('templates.destroy', $template->id) }}" method="POST" style="display:inline;">
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
