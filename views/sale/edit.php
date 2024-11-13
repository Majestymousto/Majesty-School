<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification </title>salle
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    
    
    <?php
    $IdClasse = $_GET['IdClasse'];
    require_once('../../models/salereposotory.php');
    $etService = new salereposotory();
    $classe = $etService->getByIdClasse($IdClasse);
    ?>

    <!-- Student Modification Form -->
    <form action="../../controllers/salectrl.php" method="post" class="mx-auto p-4 bg-white shadow-sm rounded" style="max-width: 600px;">
        <h5 class="text-center mb-4">Formulaire de Modification Salle</h5>
        <div class="form-group">
            <label for="IdClasse">ID CLASSE</label>
            <input type="text" id="IdClasse" name="IdClasse" class="form-control" value="<?= $classe['IdClasse'] ?>" readonly required>
        </div>
        
        <div class="form-group">
            <label for="NomClasse">NomClasse</label>
            <input type="text" id="NomClasse" name="NomClasse" class="form-control" value="<?php echo $classe['NomClasse']; ?>" required>
        </div>
        
        <div class="form-group">
            <label for="Faculte">Faculte</label>
            <input type="text" id="Faculte" name="Faculte" class="form-control" value="<?= $classe['Faculte'] ?>" required>
        </div>

        <div class="form-group">
            <label for="Capacite">Capacite</label>
            <input type="text" id="Capacite" name="Capacite" class="form-control" value="<?= $classe['Capacite'] ?>" required>
        </div>
        
        
        <input type="hidden" name="action" value="modifier">
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg mt-3">MODIFIER</button>
        </div>
    </form>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
