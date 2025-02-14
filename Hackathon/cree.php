<?php
include 'db.php';

$type = $_GET['type'] ?? ''; // Type de données (field ou crop)
// Vérification de l'existence de 'size'
$size = isset($field['size']) ? $field['size'] : 'Non défini';
echo $size;  // Cela évite l'erreur si 'size' n'est pas défini

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($type === 'field') {
        $name = $_POST['name'];
        $stmt = $pdo->prepare("INSERT INTO fields (name) VALUES (:name)");
        $stmt->execute([':name' => $name]);
    } elseif ($type === 'crop') {
        $name = $_POST['name'];
        $field_id = $_POST['field_id'];
        $start_date = $_POST['start_date'];
        $harvest_date = $_POST['harvest_date'];
        $status = $_POST['status'];

        $stmt = $pdo->prepare("INSERT INTO crops (name, field_id, start_date, harvest_date, status) 
                               VALUES (:name, :field_id, :start_date, :harvest_date, :status)");
        $stmt->execute([
            ':name' => $name,
            ':field_id' => $field_id,
            ':start_date' => $start_date,
            ':harvest_date' => $harvest_date,
            ':status' => $status
        ]);
    }

    header('Location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter <?= $type === 'field' ? 'une parcelle' : 'une culture' ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            color: #343a40;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 50px;
            border: 2px solid #dee2e6;
            box-shadow: none;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(38, 143, 255, 0.5);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-label {
            font-weight: bold;
            color: #495057;
        }
        .mb-3 {
            margin-bottom: 1.5rem;
        }
        .alert {
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1>Ajouter <?= $type === 'field' ? 'une parcelle' : 'une culture' ?></h1>
    <form action="create.php?type=<?= $type ?>" method="POST">
        <?php if ($type === 'field') { ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la parcelle</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        <?php } elseif ($type === 'crop') { ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nom de la culture</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="field_id" class="form-label">Parcelle</label>
                <select class="form-control" id="field_id" name="field_id" required>
                    <?php
                    $stmt = $pdo->query("SELECT * FROM fields");
                    while ($row = $stmt->fetch()) {
                        echo "<option value='{$row['id']}'>{$row['name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Date de début</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <div class="mb-3">
                <label for="harvest_date" class="form-label">Date de récolte</label>
                <input type="date" class="form-control" id="harvest_date" name="harvest_date" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Statut</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary w-100">Ajouter</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
