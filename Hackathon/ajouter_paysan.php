<?php
include('header.php');
include('db_connection.php');

// Traitement du formulaire d'ajout
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $region = $_POST['region'];

    $query = "INSERT INTO paysans (nom, prenom, email, telephone, adresse, region) VALUES ('$nom', '$prenom', '$email', '$telephone', '$adresse', '$region')";
    if (mysqli_query($conn, $query)) {
        echo "<div class='alert alert-success'>Paysan ajouté avec succès !</div>";
    } else {
        echo "<div class='alert alert-danger'>Erreur lors de l'ajout du paysan.</div>";
    }
}
?>

<div class="container mt-5">
    <h2 class="text-center text-success mb-4">Ajouter un Paysan</h2>
    <form action="ajouter_paysan.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" class="form-control" id="telephone" name="telephone" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <textarea class="form-control" id="adresse" name="adresse" required></textarea>
        </div>
        <div class="form-group">
            <label for="region">Région</label>
            <input type="text" class="form-control" id="region" name="region" required>
        </div>
        <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
</div>

<?php
include('footer.php');
?>
