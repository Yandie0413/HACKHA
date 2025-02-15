<?php
// Connexion à la base de données
$host = "localhost";
$user = "root"; // Ton nom d'utilisateur MySQL
$password = ""; // Ton mot de passe MySQL
$dbname = "gestion_dechets";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fonction pour calculer les totaux par période
function getRevenusByPeriod($period) {
    global $conn;

    // Calculer la date limite en fonction de la période
    if ($period == "weekly") {
        $dateLimit = date('Y-m-d H:i:s', strtotime("-1 week"));
    } elseif ($period == "monthly") {
        $dateLimit = date('Y-m-d H:i:s', strtotime("-1 month"));
    } elseif ($period == "annual") {
        $dateLimit = date('Y-m-d H:i:s', strtotime("-1 year"));
    }

    $sql = "SELECT SUM(amount) as total FROM revenus WHERE date >= '$dateLimit'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['total'] ?? 0;
    }
    return 0;
}

// Traitement de la soumission d'un revenu
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    $amount = $_POST['amount'];
    $investAmount = $_POST['investAmount'];
    $expenses = $_POST['expenses'];
    $carFuelSales = $_POST['carFuelSales'];
    $recyclableFuelSales = $_POST['recyclableFuelSales'];
    $pyrolysisCost = $_POST['pyrolysisCost'];

    // Insertion dans la base de données
    $stmt = $conn->prepare("INSERT INTO revenus (amount, investAmount, expenses, carFuelSales, recyclableFuelSales, pyrolysisCost) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("dddddd", $amount, $investAmount, $expenses, $carFuelSales, $recyclableFuelSales, $pyrolysisCost);
    $stmt->execute();
    $stmt->close();
    
    echo 'success';
}

// Récupérer les revenus en fonction de la période demandée
if (isset($_GET['period'])) {
    $period = $_GET['period'];
    $total = getRevenusByPeriod($period);
    echo json_encode(['total' => $total]);
}

// Fermer la connexion
$conn->close();
?>
