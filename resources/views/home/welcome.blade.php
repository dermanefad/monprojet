<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav id="a">
        <ul style="display: flex;justify-content:space-between">
            <li><a href="#"> Welcome</a></li>
            <li><a href={{route('about')}}> About</a></li>
            <li><a href={{route('contact')}}> Contact </a></li>
        </ul>
    </nav>
    <h1 style="margin-top: 12px;color:blue">Page: Welcome</h1>
    <a href="{{ route('commandes.index') }}" class="btn btn-sm btn-info">commande</a>
    <a href="{{ route('ligne_commandes.index') }}" class="btn btn-sm btn-info">ligne_commandes</a>
    <a href="{{ route('tickets.index') }}" class="btn btn-sm btn-info">ticker</a>

     
</body>
</html>