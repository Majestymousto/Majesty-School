<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Ajout De salle</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
   
    <!-- Link to Professors List -->
    <div class="text-center mb-3">
        <a href="../../controllers/salectrl.php?action=liste" class="btn btn-primary">Retour à la Liste des salles</a>
    </div>

    <!-- Professor Addition Form -->
    <form action="../../controllers/salectrl.php" method="post" class="mx-auto p-4 bg-white shadow-sm rounded" style="max-width: 600px;">
    <h5 class="text-center mb-4">Formulaire d'Ajout des Salles</h5>

        <div class="form-group">
            <label for="IdClasse">ID Classe</label>
            <input type="number" id="IdClasse" name="IdClasse" class="form-control" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label for="NomClasse">NomClasse</label>
            <input type="text" id="NomClasse" name="NomClasse" class="form-control" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label for="Faculte	">Faculte</label>
            <input type="text" id="Faculte" name="Faculte" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="Capacite">Capacite</label>
            <input type="Capacite" id="Capacite" name="Capacite" class="form-control" required>
        </div>
        
        <input type="hidden" name="action" value="ajout">
        <div class="text-center">
            <button type="reset" class="btn btn-danger mr-2">VIDER</button>
            <button type="submit" class="btn btn-success">AJOUTER</button>
        </div>
    </form>
</div>

<!-- Optional JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
