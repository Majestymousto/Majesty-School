<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Liste des salles</title>

    <?php include "../../inc/head.php"; ?>
    
<body class="bg-light">



<div class="container mt-5">

    <h1 class="text-center mb-4">Liste des salles</h1>



    <!-- Menu principal button -->

    <div class="text-center mb-3">

        <a href="../../controllers/salectrl.php?action=form" class="btn btn-primary btn-lg">Ajouter Salle</a>

    </div>



    <!-- Success message -->

    <?php 

    if (isset($_GET['message'])) {

    ?>

        <div class="alert alert-success text-center" role="alert">

            <?php echo $_GET['message']; ?>

        </div>

    <?php 

    }

    ?>



    <?php

    require_once('../../models/salereposotory.php');

    $etService = new salereposotory();

    $etudiants = $etService->getAll();

    ?>    



    <!-- Student table -->

    <div class="table-responsive">

        <table class="table table-bordered table-striped text-center">

            <thead class="thead-dark">

                <tr>

                    <th>IdClasse</th>

                    <th>NomClasse</th>

                    <th>Faculte</th>

                    <th>Capacite</th>

                    <th>Action</th>

                    

                </tr>

            </thead>

            <tbody>

            <?php foreach ($etudiants as $et) { ?>   

                <tr>

                    <td><?php echo $et['IdClasse']; ?></td>

                    <td><?php echo $et['NomClasse']; ?></td>

                    <td><?php echo $et['Faculte']; ?></td>

                    <td><?php echo $et['Capacite']; ?></td>

                    <td>

                    <a href="edit.php?action=editForm&IdClasse=<?php echo $et['IdClasse']; ?>" class="btn btn-warning btn-sm">Modifier</a>

                    <a href="../../controllers/salectrl.php?action=delete&IdClasse=<?php echo $et['IdClasse']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>

                    </td>

                </tr>

            <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<!-- Retour à l'index -->

<div class="text-center mb-4">

    <a href="../../index.php" class="btn btn-secondary btn-lg">

        Tableau de bord

    </a>

</div>



<!-- Optional JavaScript -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>

