<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Madagascar Pauvreté</title>
    <!-- Lien vers Bootstrap CSS local -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Lien vers Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            font-family: 'Roboto', sans-serif;
            color: white;
            margin: 0;
        }

        .contact-section {
            padding: 60px 20px;
            text-align: center;
            animation: fadeIn 1.5s ease-out forwards;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #fdbb2d;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .social-icons a {
            font-size: 3rem;
            color: #ffcc00;
            text-decoration: none;
            transition: transform 0.3s, color 0.3s;
        }

        .social-icons a:hover {
            color: #fdbb2d;
            transform: scale(1.2);
        }

        .social-icons a:active {
            transform: scale(0.95);
        }

        .footer {
            background: #000000;
            color: #ffffff;
            text-align: center;
            padding: 20px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <!-- Section Contact -->
    <div class="contact-section container">
        <h2>Contactez-nous via :</h2>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook"></a>
            <a href="https://web.whatsapp.com" target="_blank" class="fab fa-whatsapp"></a>
            <a href="https://www.instagram.com" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" target="_blank" class="fab fa-linkedin"></a>
            <a href="mailto:contact@votreemail.com" target="_blank" class="fas fa-envelope"></a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 Madagascar Pauvreté - Tous droits réservés</p>
    </div>

    <!-- Lien vers Bootstrap 5 JS et Popper.js -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
