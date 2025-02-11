<?php
    // Démarrage de la session
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortant Madagascar de la pauvreté</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            max-width: 1200px;
            margin: auto;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: white;
            font-family: Arial, sans-serif;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.5rem;
        }
        .btn-custom {
            background: #ffcc00;
            color: black;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
            text-decoration: none;
            transition: transform 0.3s ease-in-out;
        }
        .btn-custom:hover {
            transform: scale(1.1);
            background: #ffdd44;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>Ensemble, sortons Madagascar de la pauvreté</h1>
        <p>Un avenir meilleur commence par des actions concrètes</p>
        <!-- Lien mis à jour pour rediriger vers create.php -->
        <a href="create.php" class="btn btn-custom">Découvrir nos actions</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
