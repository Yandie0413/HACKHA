<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Agricole</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Fond avec effet dégradé animé */
        body {
            background: linear-gradient(120deg, #4CAF50, #2E7D32);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }

        /* Carte moderne translucide */
        .welcome-section {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        /* Animation d'apparition */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Titre stylisé */
        .welcome-section h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        /* Paragraphe stylisé */
        .welcome-section p {
            font-size: 1.2rem;
            margin-bottom: 25px;
        }

        /* Bouton moderne avec effet lumineux */
        .btn-custom {
            background-color: #FFC107;
            border: none;
            padding: 12px 25px;
            font-size: 1.2rem;
            font-weight: bold;
            color: black;
            border-radius: 30px;
            transition: 0.3s ease-in-out;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-custom::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.4);
            transition: 0.3s ease-in-out;
            z-index: -1;
        }

        .btn-custom:hover::before {
            left: 0;
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="welcome-section">
        <h1>Bienvenue dans la Gestion Agricole</h1>
        <p>Gérez efficacement vos parcelles, cultures, stocks et finances en un seul endroit.</p>
        <a href="maison.php" class="btn btn-custom">Accéder au Tableau de Bord</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
