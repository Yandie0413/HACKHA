<?php
    // Démarrage de la session
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortant Madagascar de la pauvreté - Nos Actions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d);
            color: white;
            font-family: 'Roboto', sans-serif;
            padding: 0;
            margin: 0;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            animation: fadeIn 2s ease-in-out;
            background: rgba(0, 0, 0, 0.5); /* Overlay for better text visibility */
            backdrop-filter: blur(10px);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: 600;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }
        .hero p {
            font-size: 1.8rem;
            margin-bottom: 30px;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.7);
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
        .action-card {
            margin-top: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
            transition: transform 0.3s ease-in-out;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .action-card:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.3);
        }
        .action-icon {
            font-size: 3.5rem;
            color: #ffcc00;
            margin-bottom: 20px;
            animation: bounce 1s infinite alternate;
        }
        @keyframes bounce {
            from { transform: translateY(0); }
            to { transform: translateY(-15px); }
        }
        .container {
            max-width: 1200px;
            margin-top: 50px;
        }
        .section-title {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 40px;
            font-weight: 700;
            color: #fdbb2d;
        }
        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 20px;
            background: #000000;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <div class="hero">
        <h1>Ensemble, sortons Madagascar de la pauvreté</h1>
        <p>Agir maintenant pour un avenir meilleur</p>
        <!-- Bouton retour à la première page -->
        <a href="index.php" class="btn btn-custom">Retour à l'accueil</a>
    </div>

    <!-- Section Actions -->
    <div class="container">
        <h2 class="section-title">Nos Actions Pour un Avenir Meilleur</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="action-card">
                    <i class="fas fa-hand-holding-heart action-icon"></i>
                    <h3>Aide Humanitaire</h3>
                    <p>Fournir de l'eau potable, des médicaments, et des produits de première nécessité aux familles démunies.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-card">
                    <i class="fas fa-education action-icon"></i>
                    <h3>Éducation</h3>
                    <p>Construire des écoles et offrir des formations pour un accès à l'éducation pour tous les enfants malgaches.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-card">
                    <i class="fas fa-leaf action-icon"></i>
                    <h3>Environnement</h3>
                    <p>Agir pour reforester Madagascar et promouvoir des pratiques agricoles durables pour protéger la biodiversité.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Impact -->
    <div class="container">
        <h2 class="section-title">L'Impact de Votre Soutien</h2>
        <div class="row">
            <div class="col-md-6">
                <p>Avec votre aide, nous avons pu offrir des solutions concrètes à plus de 10 000 familles malgaches. Grâce aux dons et à l'engagement de chaque citoyen, nous pouvons apporter des changements durables et améliorer les conditions de vie de milliers de personnes.</p>
            </div>
            <div class="col-md-6">
                <p>Nos programmes d'éducation ont permis à plus de 5 000 enfants d'avoir accès à une éducation gratuite. Rejoignez-nous et ensemble, transformons l'avenir de Madagascar.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 Sortir Madagascar de la pauvreté - Tous droits réservés</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
