<?php include('header.php'); ?>

<div class="container mt-5">
    <h2>Gestion des Paysans</h2>
    <!-- Formulaire pour ajouter un paysan -->
    <form action="create_paysan.php" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom du paysan</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="localisation" class="form-label">Localisation</label>
            <input type="text" class="form-control" id="localisation" name="localisation" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Paysan</button>
    </form>
    
    <h3 class="mt-5">Liste des paysans</h3>
    <!-- Table des paysans -->
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Localisation</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ici, tu ajouteras une boucle PHP pour afficher les paysans -->
            <?php
                // Exemple de récupération de données depuis la base de données
                // Assure-toi d'avoir une connexion à la base de données
                $query = "SELECT * FROM paysans";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$row['nom']."</td>
                            <td>".$row['localisation']."</td>
                            <td><a href='delete_paysan.php?id=".$row['id']."' class='btn btn-danger'>Supprimer</a></td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>
