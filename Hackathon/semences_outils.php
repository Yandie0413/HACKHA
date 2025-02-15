<?php include('header.php'); ?>

<div class="container mt-5">
    <h2>Gestion des Semences et Outils</h2>
    
    <!-- Formulaire pour ajouter une semence ou un outil -->
    <form action="create_semence_outil.php" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom de la semence / outil</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Semence / Outil</button>
    </form>
    
    <h3 class="mt-5">Liste des Semences et Outils</h3>
    <!-- Table des semences et outils -->
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ici aussi, boucle PHP pour afficher les semences et outils -->
            <?php
                // Exemple de récupération de données depuis la base de données
                $query = "SELECT * FROM semences_outils";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$row['nom']."</td>
                            <td>".$row['type']."</td>
                            <td><a href='delete_semence_outil.php?id=".$row['id']."' class='btn btn-danger'>Supprimer</a></td>
                        </tr>";
                }
            ?>
        </tbody>
    </table>
</div>

<?php include('footer.php'); ?>
