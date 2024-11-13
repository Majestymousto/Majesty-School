<?php
require_once('../models/salereposotory.php');

$etService = new salereposotory();

$action = '';
if (isset($_GET['action'])) $action = $_GET['action'];
if (isset($_POST['action'])) $action = $_POST['action'];

if (!empty($action)) {
    if ($action == 'form') {
        header('Location: ../views/sale/form.php');
        exit;
    }

    if ($action == 'liste') {
        header('Location: ../views/sale/liste.php');
        exit;
    }

    if ($action == 'delete') {
        $IdClasse = $_GET['IdClasse'];
        $etService->delete($IdClasse);
        header('Location: ../views/sale/liste.php?message=sale supprimé');
        exit;
    }

    if ($action == 'ajout') {
        $IdClasse = $_POST['IdClasse'];
        $NomClasse = $_POST['NomClasse'];
        $Faculte = $_POST['Faculte'];
        $Capacite = $_POST['Capacite'];
        $etService->add($IdClasse, $NomClasse, $Faculte, $Capacite);
        header('Location: ../views/sale/liste.php?message=sale ajouté');
        exit;
    }

    if ($action == 'editForm') {
        $IdClasse = $_GET['IdClasse'];
        header('Location: ../views/sale/edit.php?IdClasse=' . $IdClasse);
        exit;
    }

    if ($action == 'modifier') {
        $IdClasse = $_POST['IdClasse'];
        $NomClasse = $_POST['NomClasse'];
        $Faculte = $_POST['Faculte'];
        $Capacite = $_POST['Capacite'];  // Correction ici
        
        $etService->edit($IdClasse, $NomClasse, $Faculte, $Capacite);
        header('Location: ../views/sale/liste.php?message=sale modifié');
        exit;
    }
}
?>