<?php
include 'config.php';

// Ajouter des déchets et calculer l'énergie produite
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['wasteType']) && isset($_POST['wasteAmount'])) {
        $wasteType = $_POST['wasteType'];
        $wasteAmount = $_POST['wasteAmount'];

        // Validation des entrées
        if (!is_numeric($wasteAmount) || $wasteAmount <= 0) {
            echo "La quantité de déchets doit être un nombre positif.";
            exit();
        }

        // Calcul de l'énergie produite en fonction du type de déchet
        $energyProduced = 0;
        switch (strtolower($wasteType)) {
            case 'plastique':
                $energyProduced = $wasteAmount * 5; // 5 kWh par kg
                break;
            case 'métal':
                $energyProduced = $wasteAmount * 10; // 10 kWh par kg
                break;
            case 'papier':
                $energyProduced = $wasteAmount * 2; // 2 kWh par kg
                break;
            default:
                $energyProduced = 0; // Pas de production d'énergie pour d'autres types de déchets
                break;
        }

        // Insertion dans la base de données
        $sql = "INSERT INTO waste_data (waste_type, waste_amount, energy_produced) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$wasteType, $wasteAmount, $energyProduced]);

        echo "Déchets ajoutés et énergie produite : " . $energyProduced . " kWh.";
    }
}

// Récupérer les données des déchets pour affichage et graphique
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['export']) && $_GET['export'] == 'true') {
        // Exporter les données en CSV
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="waste_data.csv"');

        $output = fopen('php://output', 'w');
        fputcsv($output, ['ID', 'Type de Déchet', 'Quantité (kg)', 'Énergie Produite (kWh)', 'Date']);

        $sql = "SELECT * FROM waste_data ORDER BY date_created DESC";
        $stmt = $pdo->query($sql);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            fputcsv($output, $row);
        }

        fclose($output);
        exit();
    }

    $sql = "SELECT * FROM waste_data ORDER BY date_created DESC";
    $stmt = $pdo->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $response = [];
    foreach ($data as $row) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['waste_type']}</td>
                <td>{$row['waste_amount']}</td>
                <td>{$row['date_created']}</td>
            </tr>";
        
        // Préparer les données pour le graphique
        $response[] = [
            'waste_type' => $row['waste_type'],
            'energy_produced' => $row['energy_produced']
        ];
    }

    // Renvoi des données pour le graphique en JSON
    if (!empty($response)) {
        echo json_encode($response);
    }
}
?>
