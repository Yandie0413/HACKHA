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
    <link rel="stylesheet" href="css/style.css">  <!-- Lien vers ton fichier CSS personnalisé -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>  <!-- Pour les icônes -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Animation smooth scroll -->
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <!-- Navbar sticky avec effet de survol -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow-lg">
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
                    <a class="nav-link" href="paysans.php">Contact</a>
                </li>
                <!-- Liens vers les pages de gestion -->
              <!-- Si besoin, ajoute d'autres liens ici -->
            </ul>
        </div>
    </nav>

    <!-- Hero Section avec un fond d'illustration -->
    <section id="home" class="hero bg-cover bg-center text-white py-5" style="background-image: url('images/agriculture.jpg');">
        <div class="container text-center">
            <h1 class="display-4 font-weight-bold text-shadow">Améliorons ensemble l'agriculture</h1>
            <p class="lead text-shadow">Fournir des outils modernes, des semences et des infrastructures pour une meilleure production agricole.</p>
            <a href="create.php" class="btn btn-light btn-lg mt-3 shadow-lg">Ajouter un paysan</a>
        </div>
    </section>

    <!-- Section des services ou informations -->
    <section id="services" class="container my-5 py-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success hover-shadow">
                    <img src="images/culture.jpg" class="card-img-top" alt="Cultures">
                    <div class="card-body">
                        <h5 class="card-title">Suivi des Cultures</h5>
                        <p class="card-text">Suivi détaillé des cultures des paysans pour garantir une gestion optimale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success hover-shadow">
                    <img src="images/outils.jpg" class="card-img-top" alt="Outils">
                    <div class="card-body">
                        <h5 class="card-title">Outils Modernes</h5>
                        <p class="card-text">Fourniture d'outils agricoles avancés pour améliorer la productivité.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-lg border-success hover-shadow">
                    <img src="images/route.jpg" class="card-img-top" alt="Infrastructure">
                    <div class="card-body">
                        <h5 class="card-title">Infrastructures</h5>
                        <p class="card-text">Création de routes pour un meilleur accès aux marchés et à la distribution des produits.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section des projets -->
    <section id="projects" class="container my-5 py-5">
        <h2 class="text-center text-success mb-4">Nos Projets en Cours</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-success">
                    <img src="images/projet1.jpg" class="card-img-top" alt="Projet 1">
                    <div class="card-body">
                        <h5 class="card-title">Amélioration des Techniques Agricoles</h5>
                        <p class="card-text">Formation des paysans pour utiliser des techniques modernes et rentables.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card shadow-lg border-success">
                    <img src="images/projet2.jpg" class="card-img-top" alt="Projet 2">
                    <div class="card-body">
                        <h5 class="card-title">Construction de Routes pour les Zones Rurales</h5>
                        <p class="card-text">Faciliter l'accès aux marchés pour améliorer la circulation des produits agricoles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section de contact -->
    <section id="contact" class="container py-5">
        <h2 class="text-center text-success mb-4">Contactez-nous</h2>
        <form action="contact_form.php" method="POST">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Votre Nom" required>
                </div>
                <div class="col-md-6 mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Votre Email" required>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" placeholder="Votre Message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-success btn-block btn-lg">Envoyer</button>
        </form>
    </section>

    <!-- Pied de page élégant -->
    <footer class="footer bg-dark text-white text-center py-4 mt-5">
        <p>&copy; 2025 Gestion Agricole - Tous droits réservés</p>
    </footer>

    <!-- Scripts pour l'animation -->
    <script>
        // Animation au survol des cartes
        const cards = document.querySelectorAll('.hover-shadow');
        cards.forEach(card => {
            card.addEventListener('mouseover', () => {
                card.classList.add('shadow-lg');
            });
            card.addEventListener('mouseout', () => {
                card.classList.remove('shadow-lg');
            });
        });
    </script>
</body>
</html>
