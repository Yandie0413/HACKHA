<?php 
// Inclusion du fichier de configuration pour la connexion à la base de données
require_once('config.php');

// Traitement du formulaire d'ajout
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
    $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);

    // Requête pour insérer le paysan dans la base de données
    $query = "INSERT INTO paysans (nom, prenom, email, telephone, adresse, region) VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$region')";
    if (mysqli_query($conn, $query)) {
        $message = "<div class='alert alert-success animated fadeIn'>Paysan ajouté avec succès !</div>";
    } else {
        $message = "<div class='alert alert-danger animated fadeIn'>Erreur lors de l'ajout du paysan : " . mysqli_error($conn) . "</div>";
    }
}

// Requête pour récupérer les paysans de la base de données
$result = mysqli_query($conn, "SELECT * FROM paysans ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajouter un Paysan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background-color: #f4fdf4;
            font-family: 'Roboto', sans-serif;
        }

        .form-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        .btn-success {
            background-color: #00b894;
            border-color: #00b894;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            background-color: #1dd99a;
            border-color: #1dd99a;
            transform: scale(1.05);
        }

        .table-container {
            margin-top: 50px;
        }

        /* Style du footer */
        footer {
            background: linear-gradient(135deg, #00b894, #0984e3);
            color: white;
            padding: 40px 0;
            text-align: center;
            font-size: 16px;
            position: relative;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            border-top: 2px solid #fff;
        }

        footer a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        footer a:hover {
            text-decoration: underline;
            color: #dfe6e9;
        }

        .social-icons a {
            margin: 0 15px;
            font-size: 24px;
            color: white;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: #00b894;
        }

        /* Animation for hover effect */
        footer:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center text-success mb-4 animated fadeIn">Ajouter un Paysan</h2>

    <!-- Affichage du message de succès ou d'erreur -->
    <?php if (isset($message)) { echo $message; } ?>

    <form action="ajouter_paysan.php" method="POST" class="form-container shadow-lg rounded-3">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control shadow-sm" id="nom" name="nom" required placeholder="Entrez le nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control shadow-sm" id="prenom" name="prenom" required placeholder="Entrez le prénom">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control shadow-sm" id="email" name="email" required placeholder="Entrez l'email">
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control shadow-sm" id="telephone" name="telephone" required placeholder="Entrez le numéro de téléphone">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <textarea class="form-control shadow-sm" id="adresse" name="adresse" required placeholder="Entrez l'adresse"></textarea>
        </div>
        <div class="form-group">
            <label for="region">Région</label>
            <input type="text" class="form-control shadow-sm" id="region" name="region" required placeholder="Entrez la région">
        </div>
        <button type="submit" class="btn btn-success w-100 py-2 mt-3 shadow-sm hover-shadow-lg">Ajouter</button>
    </form>

    <!-- Tableau pour afficher les paysans -->
    <div class="table-container">
        <h3 class="text-center text-success mb-4">Liste des Paysans</h3>
        <table class="table table-striped table-bordered shadow-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Adresse</th>
                    <th>Région</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nom']; ?></td>
                        <td><?php echo $row['prenom']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['telephone']; ?></td>
                        <td><?php echo $row['adresse']; ?></td>
                        <td><?php echo $row['region']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2025, Tous droits réservés. | <a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    <div class="social-icons">
        <a href="#" class="fab fa-facebook-f" aria-label="Facebook"></a>
        <a href="#" class="fab fa-twitter" aria-label="Twitter"></a>
        <a href="#" class="fab fa-linkedin-in" aria-label="LinkedIn"></a>
    </div>
</footer>

<!-- Scripts de Bootstrap et Popper -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
