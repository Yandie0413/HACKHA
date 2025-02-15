<?php
include('config.php');

// Tableau des cultures
$cultures = [
    ['produit' => 'Riz', 'engrais' => 100, 'outils' => ['Binette', 'Pelle', 'Râteau', 'Brouette']],
    ['produit' => 'Maïs', 'engrais' => 80, 'outils' => ['Tracteur', 'Binette', 'Charrue', 'Brouette']],
    ['produit' => 'Tomate', 'engrais' => 50, 'outils' => ['Binette', 'Pelle', 'Tuyau d\'arrosage', 'Brouette']],
    ['produit' => 'Pommes de terre', 'engrais' => 120, 'outils' => ['Tracteur', 'Binette', 'Pelle', 'Râteau', 'Brouette']],
    ['produit' => 'Carottes', 'engrais' => 40, 'outils' => ['Binette', 'Râteau', 'Pelle', 'Brouette']],
    // Ajouter d'autres cultures ici
];

// Inventaire des engrais
$engraisInventaire = [
    'Azote' => 2000,
    'Phosphore' => 1500,
    'Potassium' => 1800,
    'Calcaire' => 1000,
    'Engrais organique' => 5000
];

// Inventaire des outils
$outilsInventaire = [
    'Binette' => 30,
    'Râteau' => 25,
    'Brouette' => 15,
    'Tracteur' => 10,
    'Charrue' => 12,
    'Pulvérisateur' => 5,
    'Pelle' => 40,
    'Tuyau d\'arrosage' => 20
];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Agricole</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Design général */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }

        /* Ajout de couleurs naturelles */
        h1,
        h3 {
            color: #3a6a47;
            text-align: center;
        }

        h3 {
            margin-top: 50px;
            color: #4CAF50;
        }

        /* Style des tables */
        .table {
            margin-top: 20px;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table thead {
            background-color: #3a6a47;
            color: #fff;
            font-weight: bold;
        }

        .table tbody tr {
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        /* Ajout d'animations et transitions */
        .table tbody td {
            transition: transform 0.2s ease, background-color 0.2s ease;
        }

        .table tbody td:hover {
            transform: scale(1.05);
            background-color: #e0e0e0;
        }

        /* Footer design */
        footer {
            background-color: #3a6a47;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-top: 5px solid #4CAF50;
            font-size: 14px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #4CAF50;
            text-decoration: underline;
        }

        /* Boutons modernes */
        .btn {
            background-color: #4CAF50;
            color: #fff;
            border-radius: 50px;
            padding: 10px 20px;
            text-transform: uppercase;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #3a6a47;
        }
    </style>
</head>

<body>

    <div class="container mt-5">

        <!-- Titre -->
        <h1 class="text-center mb-4">Tableau de Gestion Agricole</h1>

        <!-- Tableau des cultures -->
        <h3>Tableau des cultures</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Culture</th>
                    <th>Quantité d'engrais (kg/ha)</th>
                    <th>Outils utilisés</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cultures as $culture): ?>
                <tr>
                    <td><i class="fas fa-seedling"></i> <?php echo $culture['produit']; ?></td>
                    <td><?php echo $culture['engrais']; ?></td>
                    <td><?php echo implode(', ', $culture['outils']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Inventaire des engrais -->
        <h3 class="mt-5">Inventaire des engrais</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Engrais</th>
                    <th>Quantité disponible (kg)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($engraisInventaire as $engrais => $quantite): ?>
                <tr>
                    <td><i class="fas fa-leaf"></i> <?php echo $engrais; ?></td>
                    <td><?php echo $quantite; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Inventaire des outils -->
        <h3 class="mt-5">Inventaire des outils</h3>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Outil</th>
                    <th>Quantité disponible</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($outilsInventaire as $outil => $quantite): ?>
                <tr>
                    <td><i class="fas fa-toolbox"></i> <?php echo $outil; ?></td>
                    <td><?php echo $quantite; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Gestion Agricole. Tous droits réservés.</p>
        <p><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
