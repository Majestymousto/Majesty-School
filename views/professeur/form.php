<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Ajout De Professeur</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
   
    <!-- Link to Professors List -->
    <div class="text-center mb-3">
        <a href="../../controllers/ProfCtrl.php?action=liste" class="btn btn-primary">Retour à la Liste des Professeurs</a>
    </div>

    <!-- Professor Addition Form -->
    <form action="../../controllers/ProfCtrl.php" method="post" class="mx-auto p-4 bg-white shadow-sm rounded" style="max-width: 600px;">
    <h5 class="text-center mb-4">Formulaire Ajout Professeur</h5>

        <div class="form-group">
            <label for="id_prof">ID Prof</label>
            <input type="text" id="id_prof" name="id_prof" class="form-control" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" class="form-control" autocomplete="off" required>
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="phone">Téléphone</label>
            <input type="number" id="phone" name="phone" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="faculte">Faculté</label>
            <!--input type="text" id="faculte" name="faculte" class="form-control" required-->
            <select id="faculte" name="faculte" class="form-control" required>
                <option value="">Veuillez choisir le Faculté du professeur</option>
                <option value="informatique">Informatique</option>
                <option value="design">Design</option>
                <option value="Langue">Langue</option>
                <option value="Musique">Musique</option>
                <option value="Cinema">Cinema</option>
            </select>
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
