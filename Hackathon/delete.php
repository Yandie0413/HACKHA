<?php
// Inclure la connexion à la base de données
include('db.php');

// Vérifier si l'ID de la parcelle est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Préparer la requête SQL pour supprimer la parcelle
    $sql = "DELETE FROM fields WHERE id = :id";

    // Exécuter la requête
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Parcelle supprimée avec succès!";
    } else {
        echo "Erreur lors de la suppression de la parcelle.";
    }
} else {
    echo "Aucun ID spécifié.";
}
?>
