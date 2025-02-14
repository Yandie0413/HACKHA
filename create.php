
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortant Madagascar de la pauvreté</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        body {
            background: linear-gradient(to right, #0c3c60, #0a3c55, #35b3a0);
            color: white;
            font-family: 'Roboto', sans-serif;
            margin: 0;
        }
        .navbar {
            background-color: transparent;
        }
        .navbar-nav .nav-link {
            color: #ffcc00 !important;
            font-size: 1.2rem;
        }
        .navbar-nav .nav-link:hover {
            color: #fdbb2d !important;
        }
        .search-bar {
            display: flex;
            align-items: center;
        }
        .search-bar input {
            padding: 10px;
            font-size: 1.1rem;
            width: 250px;
            border: none;
            border-radius: 5px;
        }
        .search-bar button {
            background-color: #ffcc00;
            border: none;
            padding: 10px 15px;
            margin-left: 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .search-bar button:hover {
            background-color: #fdbb2d;
        }
        .intro-section {
            padding: 50px 15px;
        }
        .intro-text {
            font-size: 1.25rem;
            line-height: 1.6;
            color: #f8f9fa;
            text-align: justify;
        }
        .text-center {
            margin-bottom: 20px;
        }
        /* Ajout d'un style pour les formulaires */
        .form-section {
            margin: 20px 0;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
        }
        .form-section input, .form-section textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        .form-section button {
            background-color: #ffcc00;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 5px;
        }
        .form-section button:hover {
            background-color: #fdbb2d;
        }
        .table {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            padding: 20px;
        }
        .table th, .table td {
            color: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Madagascar Pauvreté</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="solution.php">Solution</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contactez-nous</a>
                    </li>
                    <li class="nav-item">
                        <div class="search-bar">
                            <input type="text" placeholder="Rechercher" id="searchInput">
                            <button onclick="searchGoogle()">🔍</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        function searchGoogle() {
            var query = document.getElementById("searchInput").value;
            window.open(`https://www.google.com/search?q=${query}`, '_blank');
        }
    </script>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
