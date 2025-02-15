<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Madagascar Pauvreté</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            font-family: 'Roboto', sans-serif;
        }
        .hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        }
        .hero img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            transition: transform 0.5s ease;
            margin-bottom: 20px;
        }
        .hero img:hover {
            transform: scale(1.1);
        }
        .solutions-header h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 40px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-body {
            padding: 30px;
        }
        .card-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #333;
        }
        .card-text {
            color: #555;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .btn-custom {
            background-color: #0a3c55;
            color: white;
            border: none;
            padding: 10px 25px;
            font-size: 1.1rem;
            text-transform: uppercase;
            border-radius: 30px;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #35b3a0;
        }
        .form-container {
            background-color: #2c3e50;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }
        .form-container h3 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: white;
        }
        .form-container .form-label {
            color: #fff;
        }
        .form-container .form-control {
            background-color: #34495e;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 15px;
        }
        .form-container .form-control:focus {
            background-color: #1abc9c;
            color: white;
        }
        .form-container .btn-custom {
            width: 100%;
        }
        .text-center a {
            text-decoration: none;
            font-size: 1.2rem;
            color: #0a3c55;
            padding: 10px 25px;
            border-radius: 25px;
            border: 2px solid #0a3c55;
            transition: all 0.3s ease;
        }
        .text-center a:hover {
            background-color: #0a3c55;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container text-center py-5 hero">
        <h1 class="display-4">Ensemble, sortons Madagascar de la pauvreté</h1>
        <p class="lead">Agir maintenant pour un avenir meilleur à travers l'agriculture durable et les énergies renouvelables.</p>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <img src="téléchargement (1).jpeg" alt="Image symbolique 1" class="img-fluid">
            </div>
            <div class="col-md-3 mb-3">
                <img src="téléchargement (2).jpeg" alt="Image symbolique 2" class="img-fluid">
            </div>
            <div class="col-md-3 mb-3">
                <img src="téléchargement (3).jpeg" alt="Image symbolique 3" class="img-fluid">
            </div>
            <div class="col-md-3 mb-3">
                <img src="téléchargement.jpeg" alt="Image symbolique 4" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="text-center solutions-header">
            <h2>Nos Solutions Innovantes</h2>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="card-title">Solution pour les Zones Rurales</h3>
                        <p class="card-text">Nous aidons les paysans à mieux gérer leurs cultures, suivre les ressources naturelles et garantir une sécurité pour la circulation de leurs produits en collaborant avec des investisseurs.</p>
                        <a href="#formulaireInvestisseur" class="btn-custom">Investissez maintenant</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h3 class="card-title">Solution pour les Zones Urbaines</h3>
                        <p class="card-text">Nous proposons une technologie innovante pour transformer les déchets plastiques en carburant, afin de résoudre les problèmes d'électricité et d'eau en ville.</p>
                        <a href="#formulaireInvestisseur" class="btn-custom">Investissez maintenant</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-container" id="formulaireInvestisseur">
            <h3 class="text-center">Formulaire d'Inscription à l'Investissement</h3>
            <form action="handle_form.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nom complet</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Nom de la société</label>
                    <input type="text" id="company" name="company" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="investment_type" class="form-label">Choisissez le type de projet</label>
                    <select id="investment_type" name="investment_type" class="form-select" required>
                        <option value="rural">Projet rural</option>
                        <option value="urban">Projet urbain</option>
                    </select>
                </div>
                <button type="submit" class="btn-custom">S'inscrire</button>
            </form>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="create.php" class="btn-custom">Page Suivante</a>
    </div>

    <script>
        anime({
            targets: '.hero',
            opacity: [0, 1],
            translateY: [-50, 0],
            easing: 'easeOutQuad',
            duration: 1000
        });

        anime({
            targets: '.card',
            opacity: [0, 1],
            translateY: [50, 0],
            easing: 'easeOutQuad',
            duration: 1000,
            delay: anime.stagger(200)
        });

        // Modifications du formulaire de redirection
        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault(); // Empêche l'envoi immédiat du formulaire
            var investmentType = document.getElementById('investment_type').value;

            // Redirection en fonction du choix
            if (investmentType === 'rural') {
                window.location.href = 'Hackathon/index.php'; // Redirection vers le projet rural
            } else if (investmentType === 'urban') {
                window.location.href = 'urbain/index.html'; // Redirection vers le projet urbain
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
