<!-- resources/views/templates/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modifier le Template</title>
</head>
<body>
    <div class="container">
        <h1>Modifier le Template</h1>
        <form action="{{ route('templates.update', $template->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="libelle" class="form-label">Libelle</label>
                <input type="text" name="libelle" class="form-control" id="libelle" value="{{ $template->libelle }}">
            </div>
            <div class="mb-3">
                <label for="contenu" class="form-label">Contenu</label>
                <input type="text" name="contenu" class="form-control" id="contenu" value="{{ $template->contenu }}">
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
</body>
</html>
