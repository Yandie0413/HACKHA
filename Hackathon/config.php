<?php
$host = "localhost"; // Adresse du serveur
$user = "root"; // Nom d'utilisateur MySQL
$password = ""; // Mot de passe MySQL (laisser vide si aucun)
$database = "gestion agricole"; // Remplace par le vrai nom de ta base de données

// Connexion à la base de données
$conn = mysqli_connect($host, $user, $password, $database);

// Vérification de la connexion
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
?>

