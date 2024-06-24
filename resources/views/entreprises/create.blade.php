<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Créer Entreprise</title>
</head>
<body>
    <div class="container">
        <h1>Créer Entreprise</h1>
        <form action="{{ route('entreprises.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="{{old('nom')}}">
                @error('nom')
                    <span style="color:red">Champ obliger</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pays" class="form-label">Pays</label>
                <input type="text" class="form-control" id="pays" name="pays">
                @error('pays')
                    <span style="color:red">Champ obliger</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" class="form-control" id="ville" name="ville" >
                @error('ville')
                    <span style="color:red">Champ obliger</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="quartier" class="form-label">Quartier</label>
                <input type="text" class="form-control" id="quartier" name="quartier" >
                @error('quartier')
                    <span style="color:red">Champ obliger</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" >
                @error('adresse')
                    <span style="color:red">Champ obliger</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="user_id" class="form-label">Utilisateur</label>
                <input type="number" class="form-control" id="user_id" name="user_id" >
                @error('user_id')
                    <span style="color:red">Champ obliger</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Sauvegarder</button>
            <a href="{{ route('entreprises.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>
