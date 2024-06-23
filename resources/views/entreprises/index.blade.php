<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title}}</h1>
    {{-- <h1>{{dump($liste_entrepris)}}</h1> --}}
    <a href="{{ route('entreprises.create') }}" class="btn btn-primary">Créer une Entreprise</a>
    <table class="table">
        <thead>
           
            <th>Nom</th>
            <th>Pays</th>
            <th>Ville</th>
            <th>Quartier</th>
            <th>Adresse</th>
            <th>User</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($liste_entrepris as $liste)
            <tr>
               
                <td>{{$liste->nom}}</td>
                <td>{{$liste->pays}}</td>
                <td>{{$liste->ville}}</td>
                <td>{{$liste->quartier}}</td>
                <td>{{$liste->adresse}}</td>
                <td>{{$liste->user->nom}}</td>
                <td>
                    <a href="{{ route('entreprises.show', $liste->id) }}" class="btn btn-warning">Voir</a>
                    <a href="{{ route('entreprises.edit', $liste->id) }}" class="btn btn-info">Edit</a>
                   
                    <form action="{{route('entreprises.destroy',$liste->id)}}" method="post">
                        @csrf
                        @method("DELETE")

                        <button class="btn btn-danger">Delete</a></button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>

    </table>
</body>
</html>