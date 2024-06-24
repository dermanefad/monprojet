<!DOCTYPE html>
<html>
<head>
    <title>Événement PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 20px;
        }
        .field {
            margin-bottom: 10px;
        }
        .field label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="field">
            <label>Nom:</label> {{ $evenement->nom }}
        </div>
        <div class="field">
            <label>Pays:</label> {{ $evenement->pays }}
        </div>
        <div class="field">
            <label>Ville:</label> {{ $evenement->ville }}
        </div>
        <div class="field">
            <label>Adresse:</label> {{ $evenement->adresse }}
        </div>
        <div class="field">
            <label>GPS:</label> {{ $evenement->gps }}
        </div>
        <div class="field">
            <label>Description:</label> {{ $evenement->description }}
        </div>
        <div class="field">
            <label>Date:</label> {{ $evenement->date }}
        </div>
        <div class="field">
            <label>Heure de début:</label> {{ $evenement->heur_debut }}
        </div>
        <div class="field">
            <label>Heure de fin:</label> {{ $evenement->heur_fin }}
        </div>
        <div class="field">
            <label>Entreprise ID:</label> {{ $evenement->entreprises_id }}
        </div>
    </div>
</body>
</html>
