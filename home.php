<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Madagascar Pauvreté</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
            padding: 20px;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.4rem;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        .btn {
            background-color: #35b3a0;
            padding: 12px 30px;
            color: #0c3c60;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            text-decoration: none;
            color: aliceblue;
        }
        .btn:hover {
            background-color: black;
            transform: translateY(-4px);
        }
        .container {
            padding: 50px 20px;
        }
        .solutions-header {
            text-align: center;
            margin-bottom: 50px;
        }
        .solutions-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 15px;
        }
        .solutions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 50px;
            text-align: left;
        }
        .solution {
            width: 50%;
        }
        .solution h3 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }
        .solution p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #f1f1f1;
        }
        .solution a {
            display: inline-block;
            background-color: #35b3a0;
            padding: 12px 25px;
            color: white;
            font-size: 1.1rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }
        .solution a:hover {
            background-color: #0a3c55;
        }
        .form-container {
            max-width: 700px;
            margin: 30px auto;
            background-color: #2a2a2a;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border: 2px solid #444;
        }
        .form-container h3 {
            margin-bottom: 20px;
            font-size: 1.8rem;
            color: #fff;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #333;
            color: white;
        }
        .form-control:focus {
            border-color: #35b3a0;
        }
        .btn-form {
            background-color: #35b3a0;
            color: white;
            font-size: 1.2rem;
            font-weight: bold;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }
        .btn-form:hover {
            background-color: #0a3c55;
        }
    </style>
</head>
<body>
    <div class="hero">
        <h1>Ensemble, sortons Madagascar de la pauvreté</h1>
        <p>Agir maintenant pour un avenir meilleur à travers l'agriculture durable et les énergies renouvelables.</p>
    </div>

    <div class="container">
        <div class="solutions-header">
            <h2>Nos Solutions Innovantes</h2>
        </div>

        <div class="solutions">
            <div class="solution">
                <h3>Solution pour les Zones Rurales</h3>
                <p>Nous aidons les paysans à mieux gérer leurs cultures, suivre les ressources naturelles et garantir une sécurité pour la circulation de leurs produits en collaborant avec des investisseurs.</p>
                <a href="#formulaireInvestisseur">Investissez maintenant</a>
            </div>

            <div class="solution">
                <h3>Solution pour les Zones Urbaines</h3>
                <p>Nous proposons une technologie innovante pour transformer les déchets plastiques en carburant, afin de résoudre les problèmes d'électricité et d'eau en ville.</p>
                <a href="#formulaireInvestisseur">Investissez maintenant</a>
            </div>
        </div>

        <div class="form-container" id="formulaireInvestisseur">
            <h3>Formulaire d'Inscription à l'Investissement</h3>
            <form action="handle_form.php" method="POST">
                <div class="form-group">
                    <label for="name">Nom complet</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="Votre nom complet">
                </div>
                <div class="form-group">
                    <label for="company">Nom de la société</label>
                    <input type="text" id="company" name="company" class="form-control" required placeholder="Nom de votre société">
                </div>
                <div class="form-group">
                    <label for="investment_type">Choisissez le type de projet</label>
                    <select id="investment_type" name="investment_type" class="form-control" required>
                        <option value="rural">Projet rural</option>
                        <option value="urban">Projet urbain</option>
                    </select>
                </div>
                <button type="submit" class="btn-form">S'inscrire</button>
            </form>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="create.php" class="btn btn-success">Page Suivante</a>
    </div>

    <script>
        anime({
            targets: '.hero',
            opacity: [0, 1],
            translateY: [-50, 0],
            easing: 'easeOutQuad',
            duration: 1000
        });

        // Animation d'apparition du formulaire
        anime({
            targets: '.form-container',
            opacity: [0, 1],
            translateY: [50, 0],
            easing: 'easeOutQuad',
            duration: 1000
        });

        // Redirection selon le choix du projet
        document.querySelector('.btn-form').addEventListener('click', function(event) {
            event.preventDefault(); // Empêche l'envoi du formulaire
            var investmentType = document.getElementById('investment_type').value;

            // Vérifie si le choix est rural ou urbain et redirige en conséquence
            if (investmentType === 'rural') {
                window.location.href = 'Hackathon/index.php'; // Remplace ce chemin par l'URL de ton projet rural
            } else if (investmentType === 'urban') {
                window.location.href = 'urbain/backend.php/config.php/index.html'; // Remplace ce chemin par l'URL de ton projet urbain
            }
        });
    </script>
</body>
</html>
