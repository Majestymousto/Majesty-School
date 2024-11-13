<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Liste des Enseignants</title>

    <?php include "../../inc/head.php"; ?>

<body class="bg-light">



<div class="container mt-5">

    <h1 class="text-center mb-4">Liste des PROFESSEURS</h1>



    <!-- Menu principal button -->

    <div class="text-center mb-3">

        <a href="../../controllers/ProfCtrl.php?action=form" class="btn btn-primary btn-lg">Ajouter Prof</a>

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

    require_once('../../models/ProfReposotory.php');

    $etService = new ProfReposotory();

    $etudiants = $etService->getAll();

    ?>    



    <!-- Student table -->

    <div class="table-responsive">

        <table class="table table-bordered table-striped text-center">

            <thead class="thead-dark">

                <tr>

                    <th>ID_PROF</th>

                    <th>NOM</th>

                    <th>PRENOM</th>

                    <th>EMAIL</th>

                    <th>PHONE</th>

                    <th>FACULTE</th>

                    <th>ACTION</th>

                    

                </tr>

            </thead>

            <tbody>

            <?php foreach ($etudiants as $et) { ?>   

                <tr>

                    <td><?php echo $et['id_prof']; ?></td>

                    <td><?php echo $et['nom']; ?></td>

                    <td><?php echo $et['prenom']; ?></td>

                    <td><?php echo $et['email']; ?></td>

                    <td><?php echo $et['phone']; ?></td>

                    <td><?php echo $et['faculte']; ?></td>

                    <td>

                        <a href="../../controllers/ProfCtrl.php?action=editForm&id_prof=<?php echo $et['id_prof']; ?>" class="btn btn-warning btn-sm">Modifier</a>

                        <a href="../../controllers/ProfCtrl.php?action=delete&id_prof=<?php echo $et['id_prof']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>

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

