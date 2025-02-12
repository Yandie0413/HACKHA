<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investir Maintenant - Madagascar Pauvreté</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            padding: 50px 20px;
            margin: 50px auto;
            background-color: #1a2b3a;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 2.5rem;
            color: #fdbb2d;
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Montserrat', sans-serif;
        }

        .form-group label {
            font-size: 1.1rem;
            color: #fff;
        }

        .form-control {
            background-color: #0c3c60;
            border: 1px solid #ffcc00;
            color: #fff;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #fdbb2d;
            outline: none;
        }

        .btn-primary {
            background-color: #ffcc00;
            border: none;
            padding: 12px 30px;
            color: #0c3c60;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #fdbb2d;
            transform: translateY(-3px);
        }

        .btn-primary:active {
            transform: translateY(1px);
        }

        .back-btn {
            text-decoration: none;
            font-size: 1rem;
            color: #fff;
            background-color: #0c3c60;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
            text-align: center;
        }

        .back-btn:hover {
            background-color: #fdbb2d;
            color: #0c3c60;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Formulaire d'Investissement</h2>

        <form action="submit_investment.php" method="POST">
            <!-- Nom de l'investisseur -->
            <div class="form-group mb-3">
                <label for="name">Nom Complet</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <!-- E-mail de l'investisseur -->
            <div class="form-group mb-3">
                <label for="email">Adresse E-mail</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            <!-- Montant à investir -->
            <div class="form-group mb-3">
                <label for="amount">Montant à Investir (en $)</label>
                <input type="number" id="amount" name="amount" class="form-control" required>
            </div>

            <!-- Message / Détails supplémentaires -->
            <div class="form-group mb-3">
                <label for="message">Message / Détails supplémentaires</label>
                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Optionnel"></textarea>
            </div>

            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary">Soumettre l'Investissement</button>
        </form>

        <!-- Bouton retour -->
        <a href="home.php" class="back-btn">Retour à la page principale</a>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
