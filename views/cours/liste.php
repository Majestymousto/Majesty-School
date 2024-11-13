<!DOCTYPE html>

<html lang="fr">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Liste des cours</title>

    <?php include "../../inc/head.php"; ?>


<body class="bg-light">



<div class="container mt-5">

    <!-- Header -->

    <div class="text-center mb-4">

        <h2>Liste des cours</h2>

    </div>

    

    <!-- Attractive Button for Main Menu -->

    <div class="text-center mb-4">

        <a href="../../controllers/coursctrl.php?action=form" class="btn btn-primary btn-lg">

            <i class="fa fa-plus"></i>Ajouter un cours

        </a>

    </div>



    <!-- Success Message -->

    <?php if (isset($_GET['message'])): ?>

        <div class="alert alert-success text-center">

            <?php echo htmlspecialchars($_GET['message']); ?>

        </div>

    <?php endif; ?>



    <!-- Student Table -->

    <table class="table table-bordered table-striped table-hover">

        <thead class="thead-dark">

            <tr>

                <th>ID COURS</th>

                <th>nom_cours DU COURS</th>

                <th>DESCRIPTION DU COURS</th>

                <th>ID PROF</th>

                <th>ID CLASSE</th>

                <th>Action</th>

              

            </tr>

        </thead>

        <tbody>

            <?php

            require_once('../../models/coursereposotory.php');

            $etService = new coursereposotory();

            $etudiants = $etService->getAll();



            foreach ($etudiants as $et): ?>

                <tr>

                    <td><?php echo htmlspecialchars($et['id_cours']); ?></td>

                    <td><?php echo htmlspecialchars($et['nom_cours']); ?></td>

                    <td><?php echo htmlspecialchars($et['desc_cours']); ?></td>

                    <td><?php echo htmlspecialchars($et['id_prof']); ?></td>

                    <td><?php echo htmlspecialchars($et['IdClasse']); ?></td>

            

                    <td>

                        <a href="edit.php?action=editForm&id_cours=<?php echo htmlspecialchars($et['id_cours']); ?>" class="btn btn-warning btn-sm">

                            Modifier

                        </a>

                        <a href="../../controllers/coursctrl.php?action=delete&id_cours=<?php echo htmlspecialchars($et['id_cours']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');">

                            Supprimer

                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</div>





<!-- Optional JavaScript for Bootstrap -->

<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</body>

</html>

