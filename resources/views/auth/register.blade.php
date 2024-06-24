<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div>
            <label for="prenom">Prénom:</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="contact">Contact:</label>
            <input type="text" id="contact" name="contact" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirmer le mot de passe:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <button type="submit">S'inscrire</button>
    </form>
    <a href="{{ route('login') }}">Se connecter</a>
</body>
</html>
