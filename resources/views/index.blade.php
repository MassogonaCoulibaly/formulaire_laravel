<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élèves</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #007bff; /* Couleur de fond en bleu */
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
    </style>
</head>
<body>
    <div class="header">
        <h1 class="text-center">Liste des élèves</h1>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Tuteur</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->tuteur }}</td>
                        <td>
                            <a href="/edit/{{ $eleve->id }}" class="btn btn-primary btn-sm">Modifier</a>
                            <a href="/view/{{ $eleve->id }}" class="btn btn-info btn-sm">Voir les détails</a>
                            <a href="/delete/{{ $eleve->id }}" class="btn btn-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/create" class="btn btn btn-light">Ajouter un élève</a>
    </div>

    <div class="footer">
        <p class="text-center">&copy; 2023 - Tous droits réservés</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
