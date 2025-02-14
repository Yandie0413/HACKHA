<?php
// Inclure la connexion à la base de données
include('db.php');

// Vérifier si l'ID de la parcelle est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Récupérer les informations de la parcelle à modifier
    $sql = "SELECT * FROM fields WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $field = $stmt->fetch();

    if (!$field) {
        echo "Parcelle non trouvée.";
        exit;
    }
}

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $size = $_POST['size'];
    $location = $_POST['location'];

    // Préparer la requête SQL pour mettre à jour la parcelle
    $sql = "UPDATE fields SET name = :name, size = :size, location = :location, updated_at = NOW() WHERE id = :id";

    // Exécuter la requête
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':size', $size);
    $stmt->bindParam(':location', $location);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success mt-3'>Parcelle mise à jour avec succès!</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Erreur lors de la mise à jour de la parcelle.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la parcelle</title>
    <!-- Ajouter le lien vers Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Modifier les informations de la parcelle</h1>

    <!-- Formulaire pour modifier la parcelle -->
    <form method="POST" class="p-4 border rounded shadow-lg">
        <div class="mb-3">
            <label for="name" class="form-label">Nom de la parcelle</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo htmlspecialchars($field['name']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="size" class="form-label">Taille (en hectares)</label>
            <input type="number" name="size" id="size" class="form-control" value="<?php echo htmlspecialchars($field['size']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Localisation</label>
            <input type="text" name="location" id="location" class="form-control" value="<?php echo htmlspecialchars($field['location']); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Mettre à jour la parcelle</button>
    </form>
</div>

<!-- Ajouter les scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
