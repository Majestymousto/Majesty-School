<?php
class Provider {
    private $host = 'localhost';  // Hôte fourni par votre hébergeur

    private $dbName = "hsbeyyyy_scolarite";   // Nom de la base de données

    private $user = "hsbeyyyy_usr";           // Nom d'utilisateur MySQL

    private $password = "Amarachin@17";       // Mot de passe MySQL



    public function getconnection() {

        try {

            // Connexion à la base de données avec PDO

            $con = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->user, $this->password);

            // Configure PDO pour lever des exceptions en cas d'erreur

            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // echo 'Connexion établie !!!!';  // Message de succès

            return $con;

        } catch (PDOException $e) {

            // Gestion des erreurs si la connexion échoue

            // echo "Erreur de connexion : " . $e->getMessage();

            return null;

        }

    }

}



// Création d'une instance de la classe Provider

$p = new Provider();



// Tentative de connexion à la base de données

$p->getconnection();



?>

