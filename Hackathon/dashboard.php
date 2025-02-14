<?php
// Inclure la connexion à la base de données
include('db.php');

// Récupérer toutes les parcelles depuis la base de données
$sql = "SELECT * FROM fields";
$stmt = $pdo->query($sql);
$fields = $stmt->fetchAll();
?>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Taille</th>
            <th>Localisation</th>
            <th>Date de création</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($fields as $field): ?>
            <tr>
                <td><?php echo htmlspecialchars($field['name']); ?></td>
                <td><?php echo htmlspecialchars($field['size']); ?> hectares</td>
                <td><?php echo htmlspecialchars($field['location']); ?></td>
                <td><?php echo htmlspecialchars($field['created_at']); ?></td>
                <td>
                    <a href="update.php?id=<?php echo $field['id']; ?>">Modifier</a> |
                    <a href="delete.php?id=<?php echo $field['id']; ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette parcelle ?')">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
