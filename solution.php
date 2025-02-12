<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solutions - Madagascar Pauvreté</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
            animation: fadeIn 1.5s ease-out;
        }

        h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #fdbb2d;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-family: 'Montserrat', sans-serif;
        }

        .card {
            margin: 20px 0;
            background-color: #1a2b3a;
            border: 1px solid #ffcc00;
            border-radius: 10px;
            color: #fff;
        }

        .card-header {
            background-color: #fdbb2d;
            font-size: 1.5rem;
            font-weight: 600;
            padding: 10px;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.2rem;
            color: #ffcc00;
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

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Section témoignages améliorée */
        .testimonials {
            background-color: #1a2b3a;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .testimonial-item {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
            background-color: #0c3c60;
            padding: 20px;
            border-radius: 10px;
        }

        .testimonial-item img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .testimonial-text {
            font-style: italic;
            font-size: 1.2rem;
            color: #fdbb2d;
            flex: 1;
            margin-left: 15px;
        }

        .testimonial-author {
            font-weight: bold;
            color: #fff;
        }

        .testimonial-carousel .carousel-item img {
            max-height: 120px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto;
        }

        .investment-options {
            background-color: #0c3c60;
            padding: 40px 20px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .investment-options h3 {
            font-size: 2rem;
            color: #fdbb2d;
            font-family: 'Montserrat', sans-serif;
            margin-bottom: 20px;
        }

        .investment-options p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #fff;
        }

        .social-icons a {
            margin: 0 10px;
            font-size: 2rem;
            color: #fff;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #fdbb2d;
        }
    </style>
</head>
<body>
    <div class="container" id="solutions">
        <h2>Nos Solutions</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Énergie Renouvelable</div>
                    <div class="card-body">
                        <h5 class="card-title">Investir dans des énergies renouvelables</h5>
                        <p>Les entreprises peuvent participer à l'essor de l'énergie solaire et éolienne pour des bénéfices à long terme et un impact positif sur l'environnement.</p>
                        <!-- Lien vers recherche Google sur les énergies renouvelables -->
                        <a href="https://www.google.com/search?q=énergie+renouvelable+Madagascar" target="_blank" class="cta-btn">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Infrastructures Durables</div>
                    <div class="card-body">
                        <h5 class="card-title">Investir dans des infrastructures modernes</h5>
                        <p>Le développement d'infrastructures durables peut générer des revenus tout en améliorant la qualité de vie à Madagascar.</p>
                        <!-- Lien vers recherche Google sur les infrastructures durables -->
                        <a href="https://www.google.com/search?q=infrastructure+durable+Madagascar" target="_blank" class="cta-btn">En savoir plus</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Agriculture Durable</div>
                    <div class="card-body">
                        <h5 class="card-title">Soutenir l'agriculture durable</h5>
                        <p>Encouragez l'agriculture biologique et durable pour créer des opportunités économiques tout en protégeant l'environnement.</p>
                        <!-- Lien vers recherche Google sur l'agriculture durable -->
                        <a href="https://www.google.com/search?q=agriculture+durable+Madagascar" target="_blank" class="cta-btn">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Témoignages améliorés -->
        <div class="testimonials">
            <h2>Témoignages d'entreprises</h2>
            <div class="testimonial-carousel carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-item">
                            <img src="company1.jpg" alt="Entreprise X">
                            <div class="testimonial-text">"Investir dans les énergies renouvelables à Madagascar a non seulement réduit nos coûts, mais a aussi ouvert de nouvelles opportunités commerciales."</div>
                            <p class="testimonial-author">- Entreprise X</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <img src="company2.jpg" alt="Entreprise Y">
                            <div class="testimonial-text">"Les infrastructures modernes ont grandement amélioré notre efficacité opérationnelle et ont contribué à un retour sur investissement rapide."</div>
                            <p class="testimonial-author">- Entreprise Y</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section pour investir -->
        <div class="investment-options">
            <h3>Investir Maintenant</h3>
            <p>Si vous souhaitez investir, veuillez remplir le formulaire ci-dessous pour obtenir plus d'informations.</p>
            <a href="investe.php" class="btn btn-primary">Investir Maintenant</a>
            <button onclick="window.history.back();" class="btn btn-secondary">Retour</button>

        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
