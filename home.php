<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil - Madagascar Pauvreté</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <style>
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            font-family: 'Roboto', sans-serif;
        }
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }
        .hero h1 {
            font-size: 4rem;
            font-weight: 600;
        }
        .hero p {
            font-size: 1.8rem;
            margin-bottom: 30px;
        }
        button{
            background-color: #0a3c55;
        }
        .btn{
            background-color:#35b3a0;
            border: none;
            padding: 12px 30px;
            color: #0c3c60;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
            text-decoration: none;
            color:aliceblue;
        } 
        .btn-primary:hover {
            background-color:black;
            transform: translateY(-4px);
        }
        
    </style>
</head>
<body>
    <div class="hero">
        <h1 id="pageTitle">Ensemble, sortons Madagascar de la pauvreté</h1>
        <p id="pageSubtitle">Agir maintenant pour un avenir meilleur</p>
        <!-- Bouton pour la page suivante -->
<a href="create.php" class="btn btn-primary">Page suivante</a>


    </div>
    <button onclick="window.history.back();" class="btn btn-secondary">Retour</button>

    <script>
        // Animation d'entrée de la page
        anime({
            targets: '.hero',
            opacity: [0, 1],
            translateY: [-50, 0],
            easing: 'easeOutQuad',
            duration: 1000
        });
    </script>
</body>
</html>
