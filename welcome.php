<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $investment_type = $_POST['investment_type'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue - Madagascar Pauvreté</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <style>
        body {
            color: white;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            padding: 50px;
        }
        .rural-theme {
            background: #68a3e0;
            background-image: url('https://example.com/agriculture.jpg');
            background-size: cover;
        }
        .urban-theme {
            background: #bfa29d;
            background-image: url('https://example.com/city.jpg');
            background-size: cover;
        }
        h1 {
            font-size: 3rem;
            font-weight: 600;
        }
        h2 {
            font-size: 2rem;
            font-weight: 500;
        }
        .btn-back {
            background-color: #0a3c55;
            border: none;
            padding: 12px 30px;
            color: #0c3c60;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-back:hover {
            background-color: black;
            transform: translateY(-4px);
        }
    </style>
</head>
<body class="<?php echo $investment_type; ?>-theme">
    <h1>Bienvenue, <?php echo $name; ?> !</h1>
    <h2>Vous avez choisi un projet : 
        <?php 
        if ($investment_type == "rural") {
            echo "Rural - Agriculture et Élevage";
        } else {
            echo "Urbain - Développement des Villes";
        }
        ?>
    </h2>
    <p>
        Félicitations pour votre engagement dans ce projet !
    </p>
    <a href="index.php" class="btn-back">Retour à la page d'accueil</a>

    <script>
        // Animation d'entrée de la page
        anime({
            targets: 'h1',
            opacity: [0, 1],
            translateY: [-50, 0],
            easing: 'easeOutQuad',
            duration: 1000
        });

        anime({
            targets: 'h2',
            opacity: [0, 1],
            translateY: [-30, 0],
            easing: 'easeOutQuad',
            duration: 1000,
            delay: 500
        });
    </script>
</body>
</html>
