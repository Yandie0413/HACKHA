<?php
$host = "localhost"; // hôte de la base de données
$dbname = "gestion_dechets"; // nom de la base de données
$username = "root"; // utilisateur de la base de données (souvent 'root' en local)
$password = ""; // mot de passe (vide pour les configurations locales)

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit();
}
?>
