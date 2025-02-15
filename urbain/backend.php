<?php
// backend.php

// Simuler une base de données avec des données en dur (vous pouvez connecter une vraie base de données ici)
$wasteHistory = [
    ['type' => 'Plastique', 'amount' => 1500],
    ['type' => 'Verre', 'amount' => 800],
];

// Vérifier si une requête POST est reçue pour ajouter des données
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données envoyées
    $wasteType = $_POST['wasteType'];
    $wasteAmount = $_POST['wasteAmount'];
    
    // Ajouter les nouvelles données à l'historique (ici, on ne les sauvegarde pas réellement dans une base de données)
    $wasteHistory[] = ['type' => $wasteType, 'amount' => $wasteAmount];
    
    echo json_encode(['success' => true]);
} else {
    // Retourner l'historique des déchets sous forme JSON
    echo json_encode($wasteHistory);
}
?>
