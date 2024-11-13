<?php

require_once("../../models/Provider.php");

$p=new Provider();

$db = $p->getconnection();

// Récupération des profs disponibles

try {

    $professeursStmt = $db->query("SELECT id_prof,nom FROM professeur");

    $professeurs = $professeursStmt->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {

    die("Erreur: " . $e->getMessage());

}

// Récupération des Salles disponibles

try {

    $classesStmt = $db->query("SELECT IdClasse,NomClasse FROM classe");

    $classes = $classesStmt->fetchAll(PDO::FETCH_OBJ);

} catch (PDOException $e) {

    die("Erreur: " . $e->getMessage());

}

?>

<!DOCTYPE html>

<html lang="fr">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulaire Ajout COURS</title>

    <!-- Bootstrap CSS -->

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>



<body class="bg-light">

    <div class="container mt-5">

        <!-- Header -->

        <div class="text-center mb-4">

            <h2>Formulaire d'Ajout COURS</h2>

        </div>

        

        <!-- Attractive Button to Go to Students List -->

        <div class="text-center mb-4">

            <a href="../../controllers/coursctrl.php?action=liste" class="btn btn-info btn-lg" role="button">

                <i class="fas fa-list"></i> Liste des cours

            </a>

        </div>

        

        <!-- Student Addition Form -->

        <form action="../../controllers/coursctrl.php" method="post" class="mx-auto p-4 bg-white shadow-sm rounded" style="max-width: 600px;">

            <div class="form-group">

                <label for="id_cours">id_cours</label>

                <input type="text" id="id_cours" name="id_cours" class="form-control" autocomplete="off" required>

            </div>

            

            <div class="form-group">

                <label for="nom_cours">nom_cours</label>

                <input type="text" id="nom_cours" name="nom_cours" class="form-control" autocomplete="off" required>

            </div>

            

            <div class="form-group">

                <label for="desc_cours">DESCRIPTION DU COURS</label>

                <input type="text" id="desc_cours" name="desc_cours" class="form-control" required>

            </div>

            

            

            

            <div class="form-group">

                <label for="id_prof">ID PROF</label>

                <select name="id_prof" class="form-control" required>

                    <option value="" disabled selected>Choisissez le prof</option>

                    <?php foreach ($professeurs as $prof): ?>

                        <option value="<?php echo htmlspecialchars($prof->id_prof); ?>">

                        <?php echo htmlspecialchars($prof->nom); ?>

                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            

            <div class="form-group">

                <label for="IdClasse">ID CLASSE</label>

                <select name="IdClasse" class="form-control" required>

                    <option value="" disabled selected>Choisissez la classe</option>

                    <?php foreach ($classes as $class): ?>

                        <option value="<?php echo htmlspecialchars($class->IdClasse); ?>">

                        <?php echo htmlspecialchars($class->NomClasse); ?>

                    </option>

                    <?php endforeach; ?>

                </select>

            </div>

            

            <input type="hidden" name="action" value="ajout">



            <div class="text-center">

                <button type="reset" class="btn btn-danger mr-2">Vider</button>

                <button type="submit" class="btn btn-success">Ajouter</button>

            </div>

        </form>

    </div>



    <!-- Optional JavaScript for Bootstrap -->

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>



</html>

