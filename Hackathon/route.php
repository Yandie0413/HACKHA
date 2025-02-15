<?php
// Connexion à la base de données
require_once('config.php');

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $longueur = mysqli_real_escape_string($conn, $_POST['longueur']);
    $statut = mysqli_real_escape_string($conn, $_POST['statut']);

    // Requête d'insertion dans la base de données
    $query = "INSERT INTO route (nom, longueur, statut) VALUES ('$nom', '$longueur', '$statut')";

    if (mysqli_query($conn, $query)) {
        echo '<div class="alert alert-success">Route ajoutée avec succès!</div>';
    } else {
        echo '<div class="alert alert-danger">Erreur lors de l\'ajout de la route: ' . mysqli_error($conn) . '</div>';
    }
}

// Récupération des routes depuis la base de données
$query = "SELECT * FROM route";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Routes - 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion des Routes</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero text-center py-5" style="background-color: #e1f7e1;">
        <div class="container">
            <h1 class="display-4 text-dark">Optimisation des Routes</h1>
            <p class="lead text-dark">Améliorons les infrastructures routières pour un futur durable.</p>
        </div>
    </section>

    <!-- Liste des Routes -->
    <section id="routes" class="container my-5">
        <h2 class="text-center text-success mb-4">Routes Déjà Ajoutées</h2>
        <div class="row">
            <?php
            if ($result !== false) {
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nom']; ?></h5>
                                <p class="card-text">Longueur : <?php echo $row['longueur']; ?> km</p>
                                <p class="card-text">Statut : <?php echo $row['statut']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>
        </div>
    </section>

    <!-- Formulaire d'ajout -->
    <section id="add-route" class="container my-5">
        <h2 class="text-center text-success mb-4">Ajouter une Nouvelle Route</h2>
        <form action="route.php" method="POST" class="p-4 shadow-lg rounded-3" style="background-color: #f9f9f9;">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de la Route</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="longueur" class="form-label">Longueur (km)</label>
                <input type="number" class="form-control" id="longueur" name="longueur" required>
            </div>
            <div class="mb-3">
                <label for="statut" class="form-label">Statut</label>
                <select class="form-select" id="statut" name="statut" required>
                    <option value="En construction">En construction</option>
                    <option value="Terminée">Terminée</option>
                    <option value="Planifiée">Planifiée</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success w-100">Ajouter la Route</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="footer bg-success text-white text-center py-4">
        <p>&copy; 2025 Gestion des Routes - Tous droits réservés</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
