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
    </style>
</head>
<body>
    <div class="hero">
        <h1 id="pageTitle">Ensemble, sortons Madagascar de la pauvreté</h1>
        <p id="pageSubtitle">Agir maintenant pour un avenir meilleur</p>
    </div>

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
