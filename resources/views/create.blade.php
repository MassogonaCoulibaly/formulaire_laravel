<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription des élèves</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Couleur de fond */
        }

        .header {
            background-color: #333; /* Couleur de l'en-tête */
            color: #fff; /* Couleur du texte de l'en-tête */
            padding: 20px;
        }

        .footer {
            background-color: #333; /* Couleur du pied de page */
            color: #fff; /* Couleur du texte du pied de page */
            padding: 20px;
            text-align: center;
        }

        .custom-form {
            max-width: 700px; /* Largeur maximale du formulaire */
            height: 450px;
            margin: 0 auto; /* Centrer le formulaire horizontalement */
            background-color: #fff; /* Couleur de fond du formulaire */
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
        }
    </style>
</head>
<body class="bg-primary">
    <div class="header">
        <h1 class="text-center">Inscription des élèves</h1>
    </div>

    <div class="container mt-4 custom-form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/eleves" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="tuteur">Tuteur :</label>
                <input type="text" class="form-control" id="tuteur" name="tuteur" required>
            </div>

            <button type="submit" class="btn btn-primary">Inscrire</button>
        </form>

        <div class="text-center mt-3">
            <a href="/" class="btn btn-secondary">Retour</a>
        </div>
    </div>

    <div class="footer">
        <p class="text-center">&copy; 2023 - Tous droits réservés</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
