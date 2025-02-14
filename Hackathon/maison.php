<?php
// Inclure la connexion à la base de données
include('db.php');

try {
    // Vérifier si la connexion est bien établie
    if (!$pdo) {
        throw new Exception("Erreur de connexion à la base de données.");
    }

    // Récupérer toutes les parcelles depuis la base de données
    $sql = "SELECT * FROM fields";
    $stmt = $pdo->query($sql);
    $fields = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Erreur : " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Parcelles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background-color: #0069d9;
            color: white;
            padding: 15px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
        }

        .container {
            margin-top: 80px;
        }

        .table-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
            max-height: 500px; /* Limiter la hauteur du tableau */
            overflow-y: auto; /* Permettre le scroll si trop de lignes */
        }

        .table th {
            background-color: #0069d9;
            color: white;
            text-align: center;
        }

        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
            transition: background-color 0.3s ease;
        }

        .btn-custom {
            transition: transform 0.3s ease-in-out;
        }

        .btn-custom:hover {
            transform: scale(1.1);
        }

        .btn-warning, .btn-danger {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .no-records {
            text-align: center;
            color: #6c757d;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .header {
                font-size: 18px;
            }

            .table-container {
                padding: 20px;
            }
        }

        /* Ajout de troncation pour éviter les débordements dans les colonnes */
        .text-truncate {
            max-width: 150px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

<div class="header">
    <h3>Gestion des Parcelles Agricoles</h3>
</div>

<div class="container">
    <h2 class="text-center mb-4">Liste des Parcelles</h2>
    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 25%;">Nom</th>
                        <th style="width: 15%;">Taille</th>
                        <th style="width: 30%;">Localisation</th>
                        <th style="width: 20%;">Date de création</th>
                        <th style="width: 10%;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($fields)): ?>
                        <?php foreach ($fields as $field): ?>
                            <tr>
                                <td class="text-truncate"><?php echo htmlspecialchars($field['name']); ?></td>
                                <td><?php echo htmlspecialchars($field['size']); ?> hectares</td>
                                <td class="text-truncate"><?php echo htmlspecialchars($field['location']); ?></td>
                                <td><?php echo htmlspecialchars($field['created_at']); ?></td>
                                <td>
                                    <a href="update.php?id=<?php echo $field['id']; ?>" class="btn btn-warning btn-sm btn-custom">
                                        <i class="bi bi-pencil-square"></i> Modifier
                                    </a>
                                    <a href="delete.php?id=<?php echo $field['id']; ?>" class="btn btn-danger btn-sm btn-custom" 
                                       onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette parcelle ?')">
                                        <i class="bi bi-trash3-fill"></i> Supprimer
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="no-records">Aucune parcelle enregistrée.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
