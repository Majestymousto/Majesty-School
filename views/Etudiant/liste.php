<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des étudiants</title>

    
    <?php include "../../inc/head.php"; ?>

    <!-- Main Content -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Liste des étudiants</h1>

        <!-- Menu principal button -->
        <div class="text-center mb-3">
            <a href="../../controllers/EtudiantCtrl.php?action=form" class="btn btn-primary btn-lg">Ajouter un étudiant</a>
        </div>

        <!-- Success message -->
        <?php if (isset($_GET['message'])) { ?>
            <div class="alert alert-success text-center" role="alert">
                <?php echo $_GET['message']; ?>
            </div>
        <?php } ?>

        <?php
        require_once('../../models/EtudiantReposotory.php');
        $etService = new EtudiantReposotory();
        $etudiants = $etService->getAll();
        ?>    

        <!-- Student table -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>MATRICULE</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>SEXE</th>
                        <th>TÉLÉPHONE</th>
                        <th>DATE DE NAISSANCE</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiants as $et) { ?>   
                        <tr>
                            <td><?php echo $et['matricule']; ?></td>
                            <td><?php echo $et['nom']; ?></td>
                            <td><?php echo $et['prenom']; ?></td>
                            <td><?php echo $et['sexe']; ?></td>
                            <td><?php echo $et['tel']; ?></td>
                            <td><?php echo $et['ddn']; ?></td>
                            <td>
                                <a href="../../controllers/EtudiantCtrl.php?action=editForm&matricule=<?php echo $et['matricule']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                                <a href="../../controllers/EtudiantCtrl.php?action=delete&matricule=<?php echo $et['matricule']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
