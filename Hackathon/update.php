<?php
// Connexion à la base de données et récupération des informations
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
    // Récupère les données existantes du paysan
    $query = "SELECT * FROM farmers WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $farmer = mysqli_fetch_assoc($result);
}
?>

<div class="container mt-5">
    <h1>Mettre à Jour un Paysan</h1>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $farmer['id']; ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Nom</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $farmer['name']; ?>" required>
        </div>
        <!-- Autres champs pour mettre à jour -->
        <button type="submit" class="btn btn-primary">Mettre à Jour</button>
    </form>
</div>
