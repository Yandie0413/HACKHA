<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions - Madagascar Pauvreté</title>
    <!-- Lien vers une police moderne -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Lien vers Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        h2 {
            font-size: 2.5rem;
            color: #fdbb2d;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-family: 'Montserrat', sans-serif;
        }

        ul {
            list-style: none;
            padding-left: 0;
            font-size: 1.3rem;
            line-height: 1.8;
            animation: fadeIn 2s ease-out;
        }

        li {
            margin-bottom: 15px;
            padding-left: 20px;
            text-align: left;
            position: relative;
        }

        li::before {
            content: '\2022';
            font-size: 2rem;
            color: #fdbb2d;
            position: absolute;
            left: 0;
            top: 0;
        }

        li:hover {
            color: #fdbb2d;
            transform: translateX(10px);
            transition: transform 0.3s, color 0.3s ease;
        }

        .cta-btn {
            background-color: #ffcc00;
            color: #0c3c60;
            padding: 15px 30px;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 30px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .cta-btn:hover {
            background-color: #fdbb2d;
            transform: translateY(-3px);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 2rem;
            color: #ffcc00;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .icon {
            font-size: 3rem;
            color: #fdbb2d;
            margin-right: 15px;
        }

        .cause-item {
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: slideIn 0.6s ease-out;
        }

        .cause-item:nth-child(even) {
            animation-delay: 0.2s;
        }

        .cause-item:nth-child(odd) {
            animation-delay: 0.4s;
        }

        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

    </style>
</head>

<body>

    <!-- Première section : Introduction -->
    <div class="container">
        <h2>Les Causes de la Pauvreté à Madagascar</h2>
        <ul>
            <li>Manque d'accès à l'éducation <i class="fas fa-book-open icon"></i></li>
            <li>Infrastructures insuffisantes <i class="fas fa-road icon"></i></li>
            <li>Corruption généralisée <i class="fas fa-gavel icon"></i></li>
            <li>Chômage élevé et manque de formation professionnelle <i class="fas fa-briefcase icon"></i></li>
            <li>Catastrophes naturelles fréquentes (cyclones, sécheresses) <i class="fas fa-cloud-showers-heavy icon"></i></li>
        </ul>
        <a href="#solutions" class="cta-btn">Découvrir Nos Solutions</a>
    </div>

    <!-- Deuxième section : Solutions proposées -->
    <div class="container" id="solutions">
        <h2 class="section-title">Nos Solutions pour un Avenir Meilleur</h2>
        <p>Rejoignez-nous dans notre mission pour apporter des solutions durables à ces problèmes.</p>

        <div class="cause-item">
            <i class="fas fa-chalkboard-teacher icon"></i>
            <div>Renforcement de l'éducation de qualité pour tous</div>
        </div>
        <div class="cause-item">
            <i class="fas fa-building icon"></i>
            <div>Développement des infrastructures essentielles</div>
        </div>
        <div class="cause-item">
            <i class="fas fa-handshake icon"></i>
            <div>Promotion de la transparence et de la lutte contre la corruption</div>
        </div>
        <div class="cause-item">
            <i class="fas fa-users icon"></i>
            <div>Création d'emplois et de formations professionnelles adaptées</div>
        </div>
        <div class="cause-item">
            <i class="fas fa-tint icon"></i>
            <div>Gestion proactive des risques liés aux catastrophes naturelles</div>
        </div>

        <a href="contact.php" class="cta-btn">Nous Contacter</a>
    </div>

    <!-- Scripts pour Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
