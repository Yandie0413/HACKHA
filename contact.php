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
        .btn{
            background-color: white;
            border: none;
            border-radius: 10px;
            margin-top: 20px;
            z-index: 2;
        
        }

        .btn btn-seconadry:hover {
            background-color: #fdbb2d;
            transform: translateY(-3px);
            transition: background-color 0.4s,transform 0.1s;
        }
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: auto;
        }

        .card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        h1 {
            font-family: 'Arial', sans-serif;
            font-weight: bold;
            font-size: 3.2em;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        h2,
        h3 {
            font-weight: bold;
            color: #f8f9fa;
        }

        .solution-2 h3 {
            font-size: 1.6em;
            margin-top: 20px;
        }

        .solution-2 p {
            font-size: 1.1em;
            color: #f8f9fa;
        }

        .div {
            margin-top: 40px;
        }

        .btn-primary {
            background-color: #ff5733;
            border: none;
            padding: 12px 24px;
            font-size: 1.1em;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff2d00;
            transform: scale(1.05);
        }

        .solution-2 {
            display: none;
            margin-top: 20px;
            transition: all 0.4s ease-in-out;
        }

        .solution-left,
        .solution-right {
            margin-top: 20px;
        }

        .solution-left {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            border-radius: 10px;
            padding: 20px;
        }

        .solution-right {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(8px);
            border-radius: 10px;
            padding: 20px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5em;
            }

            .card {
                margin-bottom: 20px;
            }

            .solution-left,
            .solution-right {
                margin-bottom: 20px;
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
            <a href="https://www.Gmail.com" target="_blank" class="fas fa-envelope"></a>
           
        </div>
    </div>
    <button onclick="window.history.back();" class="btn btn-secondary">Retour</button>


    <!-- Footer -->
    <div class="footer">
        <p>© 2025 Madagascar Pauvreté - Tous droits réservés</p>
    </div>

    <!-- Lien vers Bootstrap 5 JS et Popper.js -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
