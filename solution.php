<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions - Madagascar Pauvreté</title>
    <!-- Liens vers les polices modernes -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Lien vers Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            padding: 50px 20px;
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
            animation: fadeIn 1.5s ease-out;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #fdbb2d;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-family: 'Montserrat', sans-serif;
            animation: fadeIn 1.5s ease-out;
        }

        ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 30px;
            animation: fadeIn 2s ease-out;
        }

        li {
            margin: 10px 0;
            font-size: 1.2rem;
            color: #ffcc00;
            animation: fadeIn 2s ease-out;
        }

        li:hover {
            color: #fdbb2d;
            cursor: pointer;
            transform: translateY(-5px);
            transition: transform 0.3s, color 0.3s ease;
        }

        textarea {
            margin-top: 20px;
            padding: 10px;
            width: 100%;
            font-size: 1rem;
            border: 1px solid #ffcc00;
            background-color: transparent;
            color: #fff;
            border-radius: 5px;
            resize: none;
            transition: border 0.3s ease;
        }

        textarea:focus {
            border: 1px solid #fdbb2d;
            outline: none;
        }

        .cta-section {
            background-color: #0c3c60;
            padding: 40px 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .cta-section h3 {
            font-size: 2rem;
            color: #fdbb2d;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 20px;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .cta-btn {
            padding: 15px 30px;
            font-size: 1.1rem;
            background-color: #ffcc00;
            color: #0c3c60;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .cta-btn:hover {
            background-color: #fdbb2d;
            transform: translateY(-3px);
        }

        .cta-btn:active {
            transform: translateY(1px);
        }

        .submit-btn {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: #0c3c60;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-transform: uppercase;
        }

        .submit-btn:hover {
            background-color: #fdbb2d;
            transform: scale(1.05);
        }

        .message-confirmation {
            font-size: 1.5rem;
            color: #fdbb2d;
            margin-top: 20px;
            display: none;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Section Solutions -->
    <div class="container" id="solutions">
        <h2>Nos Solutions</h2>
        <ul>
            <li>Fournir une éducation accessible</li>
            <li>Construire des infrastructures durables</li>
            <li>Promouvoir l'agriculture durable</li>
            <li>Encourager l'entrepreneuriat local</li>
        </ul>
        <p>Proposez une solution ci-dessous :</p>
        <textarea id="solutionMessage" placeholder="Proposez une solution ici..." rows="4"></textarea>
        <br>
        <button class="submit-btn" onclick="submitSolution()">Envoyer</button> <!-- Bouton envoyer -->
        <p class="message-confirmation" id="confirmationMessage">Merci pour votre proposition !</p> <!-- Message de confirmation -->
    </div>

    <!-- Section Appel à l'action -->
    <div class="cta-section container" id="contact">
        <h3>Rejoignez notre mission et faites la différence</h3>
        <p>Nous sommes en train de transformer Madagascar, mais nous avons besoin de partenaires stratégiques pour aller plus loin. Si vous êtes prêt à faire une réelle différence, contactez-nous dès maintenant et rejoignez notre cause.</p>
        <a href="contact.php" class="cta-btn">Contactez-nous maintenant</a> <!-- Bouton lié à la page contact.php -->
    </div>

    <!-- Section Contact -->
    <div class="container" id="contact">
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook"></a>
            <a href="https://web.whatsapp.com" target="_blank" class="fab fa-whatsapp"></a>
            <a href="https://www.instagram.com" target="_blank" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com" target="_blank" class="fab fa-linkedin"></a>
            <a href="mailto:contact@votreemail.com" target="_blank" class="fas fa-envelope"></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        function submitSolution() {
            var message = document.getElementById('solutionMessage').value;
            if (message.trim() !== '') {
                document.getElementById('solutionMessage').value = ''; // Efface le message
                document.getElementById('confirmationMessage').style.display = 'block'; // Affiche la confirmation
            }
        }
    </script>
</body>
</html>
