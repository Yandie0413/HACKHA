<?php
include 'db.php';

$type = $_GET['type'] ?? ''; // Type de données (field ou crop)
$size = isset($field['size']) ? $field['size'] : 'Non défini';
echo $size;

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #FFDEE9, #B5FFFC);
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 100px;
        }

        h1 {
            font-size: 2.8rem;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        form {
            background: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        form:hover {
            transform: scale(1.02);
        }

        .form-label {
            font-weight: 600;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }

        .form-control:focus {
            border-color: #FF4081;
            box-shadow: 0 0 0 0.2rem rgba(255, 64, 129, 0.25);
            background-color: #fff;
        }

        button[type="submit"] {
            background-color: #FF4081;
            color: white;
            padding: 15px 35px;
            font-size: 1.2rem;
            border: none;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(255, 64, 129, 0.2);
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #D50057;
            transform: scale(1.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group select, .form-group input {
            background-color: #f7f7f7;
        }

        .form-group select:focus, .form-group input:focus {
            background-color: #fff;
        }

        /* Responsive Design */
        @media (max-width: 767px) {
            .container {
                margin-top: 50px;
            }
            h1 {
                font-size: 2rem;
            }
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Ajouter <?= $type === 'field' ? 'une parcelle' : 'une culture' ?></h1>
    <form action="create.php?type=<?= $type ?>" method="POST">
        <?php if ($type === 'field') { ?>
            <div class="form-group">
                <label for="name" class="form-label">Nom de la parcelle</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        <?php } elseif ($type === 'crop') { ?>
            <div class="form-group">
                <label for="name" class="form-label">Nom de la culture</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
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
            <div class="form-group">
                <label for="start_date" class="form-label">Date de début</label>
                <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="harvest_date" class="form-label">Date de récolte</label>
                <input type="date" class="form-control" id="harvest_date" name="harvest_date" required>
            </div>
            <div class="form-group">
                <label for="status" class="form-label">Statut</label>
                <input type="text" class="form-control" id="status" name="status" required>
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary btn-lg">Ajouter</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
