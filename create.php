<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortant Madagascar de la pauvreté</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }

        .navbar {
            background-color: transparent;
        }

        .navbar-nav .nav-link {
            color: #ffcc00 !important;
            font-size: 1.2rem;
        }

        .navbar-nav .nav-link:hover {
            color: #fdbb2d !important;
        }

        /* Modernisation des sections */
        .section {
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
            transition: all 0.5s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(20px);
        }

        .section.show {
            opacity: 1;
            transform: translateY(0);
        }

        .section:hover {
            transform: translateY(-5px);
        }

        /* Animation du bouton */
        .toggle-btn {
            background-color: #ffcc00;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .toggle-btn:hover {
            background-color: #fdbb2d;
        }

        /* Animation de la section cachée */
        .fade-section {
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            transform: scaleY(0);
            transform-origin: top;
            transition: max-height 0.5s ease, opacity 0.5s ease, transform 0.5s ease;
        }

        .fade-section.show {
            max-height: 1000px;
            opacity: 1;
            transform: scaleY(1);
        }

        /* Nouveau style pour l'image */
        .img-fluid.custom-size {
            max-width: 100%;
            height: auto;
            max-height: 400px; /* Ajuste la hauteur maximale de l'image */
            object-fit: cover; /* Pour maintenir un bon rapport d'aspect tout en remplissant l'espace */
        }

        /* Transition pour les sections au défilement */
        .section {
            transition: transform 0.6s ease, opacity 0.6s ease;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Madagascar Pauvreté</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solution.php">Solution</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contactez-nous</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container text-center py-4">
        <h1 class="fw-bold">BIENVENUE</h1>
        <p class="fs-5">Une solution durable pour réduire l'impact environnemental tout en produisant de l'énergie propre et accessible.</p>
    </div>

    <!-- Solutions Section -->
    <div class="container">
        <div class="row">
            <!-- Première solution (Production d'électricité) -->
            <div class="col-md-6 mb-4">
                <div class="section">
                    <h2 class="text-center">Production d'Électricité</h2>
                    <p>Les déchets organiques peuvent produire du biogaz, utilisé pour produire de l'électricité.</p>
                    <img src="pexel1.jpg" alt="Image 1" class="img-fluid custom-size">
                </div>
            </div>

            <!-- Deuxième solution (Production de carburant et routes) -->
            <div class="col-md-6 mb-4">
                <div class="section">
                    <h2 class="text-center">Production de Carburant et Routes</h2>
                    <p>Les déchets plastiques peuvent être transformés en carburant liquide par pyrolyse et utilisés pour construire des routes durables.</p>
                    <img src="pexel2.jpg" alt="Image 2" class="img-fluid custom-size">
                </div>
            </div>
        </div>
    </div>

    <!-- Toggle Button -->
    <div class="text-center mt-4">
        <button class="toggle-btn" id="toggleButton">Afficher plus</button>
    </div>

    <!-- Section cachée -->
    <div class="container fade-section" id="hiddenSection">
        <div class="row">
            <!-- Première solution supplémentaire -->
            <div class="col-md-6 mb-4">
                <div class="section">
                    <h2 class="text-center">Agriculture Durable</h2>
                    <p>Améliorer l'accès aux semences de qualité et aux techniques agricoles durables.</p>
                    <img src="semence.jpg" alt="Image 3" class="img-fluid custom-size">
                </div>
            </div>

            <!-- Deuxième solution supplémentaire -->
            <div class="col-md-6 mb-4">
                <div class="section">
                    <h2 class="text-center">Eau Potable</h2>
                    <p>Des solutions pour la purification et la distribution de l'eau dans les zones rurales et urbaines.</p>
                    <img src="route.jpg" alt="Image 4" class="img-fluid custom-size">
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle button functionality
        document.getElementById('toggleButton').addEventListener('click', function () {
            const hiddenSection = document.getElementById('hiddenSection');
            const button = document.getElementById('toggleButton');

            if (hiddenSection.classList.contains('show')) {
                hiddenSection.classList.remove('show');
                button.textContent = 'Afficher plus';
            } else {
                hiddenSection.classList.add('show');
                button.textContent = 'Afficher moins';
            }
        });

        // Animation des sections au scroll
        const sections = document.querySelectorAll('.section');
        window.addEventListener('scroll', function() {
            sections.forEach(function(section) {
                const sectionTop = section.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (sectionTop < windowHeight * 0.8) {
                    section.classList.add('show');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
