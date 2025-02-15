<?php
// Connexion à la base de données si nécessaire
// require_once('config.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Agricole</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> <!-- Lien vers ton fichier CSS personnalisé -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Pour les icônes -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Animation smooth scroll -->
    <style>
        /* Style général */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Navbar modernisée */
        .navbar {
            background: linear-gradient(to right, #28a745, #2d8e55);
            transition: all 0.3s ease-in-out;
        }
        .navbar-brand, .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            color: #f9d342 !important;
        }

        /* Section Hero */
        .hero {
            background: linear-gradient(to bottom right, #28a745, #2d8e55);
            color: white;
            padding: 100px 0;
            text-align: center;
            box-shadow: inset 0 0 50px rgba(0, 0, 0, 0.2);
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
        }
        .hero p {
            font-size: 1.2rem;
            font-weight: 300;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.4);
        }
        .hero .btn {
            background-color: #f9d342;
            color: #333;
            padding: 10px 25px;
            border-radius: 50px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .hero .btn:hover {
            background-color: #2d8e55;
            color: #fff;
        }

        /* Section Services */
        .card {
            border: none;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .card img {
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .card:hover img {
            transform: scale(1.1);
        }
        .card-body {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        /* Section Footer */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 50px 0;
            text-align: center;
            box-shadow: inset 0 -10px 30px rgba(0, 0, 0, 0.1);
        }
        .footer p {
            font-size: 1rem;
            color: #bbb;
        }
        .footer .social-icons a {
            color: #fff;
            margin: 0 15px;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        .footer .social-icons a:hover {
            color: #f9d342;
        }

        /* Animation globale */
        .animated {
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <!-- Navbar sticky avec effet de survol -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <a class="navbar-brand" href="home.php"><i class="fas fa-leaf"></i> Gestion Agricole</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajouter_paysan.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="route.php">Projets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="culture.php">Culture</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero animated">
        <div class="container">
            <h1>Améliorons ensemble l'agriculture</h1>
            <p>Fournir des outils modernes, des semences et des infrastructures pour une meilleure production agricole.</p>
            <a href="ajouter_paysan.php" class="btn btn-lg">Ajouter un paysan</a>
        </div>
    </section>

    <!-- Section des services -->
    <section id="services" class="container my-5 py-5 animated">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success">
                    <img src="semence.jpg" class="card-img-top" alt="Cultures">
                    <div class="card-body">
                        <h5 class="card-title">Suivi des Cultures</h5>
                        <p class="card-text">Suivi détaillé des cultures des paysans pour garantir une gestion optimale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success">
                    <img src="outil.jpg" class="card-img-top" alt="Outils">
                    <div class="card-body">
                        <h5 class="card-title">Outils Modernes</h5>
                        <p class="card-text">Fourniture d'outils agricoles avancés pour améliorer la productivité.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success">
                    <img src="route.jpeg" class="card-img-top" alt="Infrastructure">
                    <div class="card-body">
                        <h5 class="card-title">Infrastructures</h5>
                        <p class="card-text">Création de routes pour un meilleur accès aux marchés et à la distribution des produits.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Gestion Agricole - Tous droits réservés</p>
            <div class="social-icons">
                <a href="#" class="fab fa-facebook"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>
    </footer>

    <script>
        // Animation de la page au chargement
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.animated');
            elements.forEach((el, index) => {
                setTimeout(() => el.classList.add('fadeInUp'), index * 200); 
            });
        });
    </script>
</body>
</html>
