<?php

session_start(); // Démarre la session



// Vérifie si l'utilisateur est connecté

if (!isset($_SESSION['user_id'])) {

    // Si l'utilisateur n'est pas connecté, le rediriger vers la page de login

    header("Location: authent.php");

    exit();

}



// Si l'utilisateur est connecté, continue normalement

?>



<!DOCTYPE html>

<html lang="fr">



<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>Tableau de Bord - Gestion Scolaire</title>

    <meta content="Admin Dashboard" name="description" />

    <meta content="Mannatthemes" name="author" />



    <link rel="shortcut icon" href="assets/images/logo.png">

    

    <!-- Bootstrap CSS -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">



    <!-- Material Design Icons -->

    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">



    <!-- Main Style -->

    <link href="assets/css/style.css" rel="stylesheet" type="text/css">



    <link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">





    <!-- Custom Styling -->

    <style>

        :root {

            --yellow: #fad434;

            --blue: #38b6ff;

            --red: #d61e25;

            --purple: #6a67ce;

            --light-gray: #f3f4f6;

            --dark-gray: #333;

            --white: #ffffff;

        }



        body {

            background-color: var(--light-gray);

            font-family: Arial, sans-serif;

            margin: 0;

            padding: 0;

        }



        /* Container pour le contenu principal */

        .main-content {

            padding: 30px;

            display: flex;

            flex-direction: column;

        }



        /* Section des 4 blocs fonctionnels */

        .blocks {

            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 20px;

            margin-top: 30px;

        }



        .block {

            display: flex;

            flex-direction: column;

            justify-content: center;

            align-items: center;

            padding: 30px;

            border-radius: 10px;

            color: var(--white);

            text-align: center;

            cursor: pointer;

            transition: transform 0.3s ease-in-out;

            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

        }



        .block i {

            font-size: 3rem;

            margin-bottom: 15px;

        }



        .block h3 {

            font-size: 1.5rem;

            margin-bottom: 10px;

            font-weight: bold;

        }



        .block p {

            font-size: 1rem;

        }



        /* Effet de survol */

        .block:hover {

            transform: translateY(-10px);

        }



        /* Responsivité */

        @media (max-width: 768px) {

            .blocks {

                grid-template-columns: 1fr;

            }

        }
        


    </style>

</head>



<body class="fixed-left">



    <!-- Loader

    <div id="preloader">

        <div id="status">

            <div class="spinner"></div>

        </div>

    </div> -->



    <!-- Begin page -->

    <div id="wrapper">



        <!-- Left Sidebar -->

        <div class="left side-menu">

            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">

                <i class="ion-close"></i>

            </button>



            <!-- LOGO -->

            <div class="topbar-left">

            <?php

            session_start();  // Démarre la session



            // Vérifie si l'utilisateur est connecté

            if (isset($_SESSION['user_name'])) {

                $user_name = $_SESSION['user_name'];  // Récupère le nom de l'utilisateur

            } else {

                $user_name = 'Invité';  // Si non connecté, afficher 'Invité'

            }

            ?>



            <div class="text-center">

                <a href="index.php" class="logo"><i class="mdi mdi-assistant"></i> Scolarité</a>

                <p>Bienvenue, <?php echo htmlspecialchars($user_name); ?> !</p>  <!-- Affiche le nom de l'utilisateur -->

            </div>



            </div>



            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">

                    <ul>

                        <li class="menu-title">Accueil</li>



                        



                        <li>

                            <a href="views/Etudiant/liste.php" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Etudiants </span></a>

                        </li>

                        

                        <li>

                            <a href="views/professeur/liste.php" class="waves-effect"><i class="mdi mdi-school"></i><span> Enseignants </span></a>

                        </li>

                       



                        <li>

                            <a href="views/sale/liste.php" class="waves-effect"><i class="mdi mdi-door"></i><span> Salles </span></a>

                        </li>

                        <li>

                            <a href="views/cours/liste.php" class="waves-effect"><i class="mdi mdi-book-open"></i><span> Cours </span></a>

                        </li>

                        <li class="menu-title">Identification</li>

                        <li>

                            <a href="logout.php" class="waves-effect"><i class="mdi mdi-logout"></i><span> Déconnexion </span></a>

                        </li>

                        

                        

                       



                       

                    </ul>

                </div>

            </div>

        </div>



        <!-- Content -->

        <div class="content-page">

            <div class="content">

            

               



                <!-- Page Content Wrapper -->

                <div class="page-content-wrapper">

                    <div class="container-fluid">



                        <div class="row">

                            <div class="col-sm-12">

                                <div class="page-title-box">

                                    <div class="btn-group float-right">

                                        <ol class="breadcrumb hide-phone p-0 m-0">

                                            <li class="breadcrumb-item"><a href="#">School</a></li>

                                            <li class="breadcrumb-item active">Accueil</li>

                                        </ol>

                                    </div>

                                    <h4 class="page-title">Tableau de Bord</h4>

                                </div>

                            </div>

                        </div>



                        <!-- Blocs Fonctionnels -->

                        <main class="main-content">

                            <section class="blocks">

                            <?php

                            // Se connecter à la base de données

                            $pdo = new PDO('mysql:host=localhost;dbname=hsbeyyyy_scolarite', 'hsbeyyyy_usr', 'Amarachin@17');



                            // Faire une requête pour obtenir le nombre d'étudiants

                            $stmt = $pdo->query("SELECT COUNT(*) AS total_etudiant FROM etudiant");

                            $result = $stmt->fetch();



                            // Récupérer le nombre d'étudiants

                            $total_etudiant = $result['total_etudiant'];

                            ?>



                            <a href="views/Etudiant/liste.php" style="text-decoration: none;">

                                <div class="block" style="background-color: var(--yellow);">

                                    <i class="mdi mdi-account-multiple"></i>

                                    <h3>Nombre d'étudiants : <?php echo $total_etudiant; ?></h3>

                                    

                                </div>

                            </a>







                                <!-- Bloc Enseignants -->

                                <?php

                                // Connexion à la base de données

                                $pdo = new PDO('mysql:host=localhost;dbname=hsbeyyyy_scolarite', 'hsbeyyyy_usr', 'Amarachin@17');



                                // Requête pour obtenir le nombre total d'enseignants

                                $query = "SELECT COUNT(*) AS total_enseignants FROM professeur";  // Changer 'professeurs' en le nom exact de ta table

                                $stmt = $pdo->query($query);

                                $row = $stmt->fetch();

                                $total_enseignants = $row['total_enseignants'];

                                ?>



                                <a href="views/professeur/liste.php" style="text-decoration: none;">

                                    <div class="block" style="background-color: var(--blue);">

                                        <i class="mdi mdi-school"></i>

                                        <h3>Nombre d'enseignants : <?php echo $total_enseignants; ?> </h3>

                                        

                                    </div>

                                </a>







                                <!-- Bloc Salles -->

                                <?php

                                // Connexion à la base de données

                                $pdo = new PDO('mysql:host=localhost;dbname=hsbeyyyy_scolarite', 'hsbeyyyy_usr', 'Amarachin@17');



                                // Requête pour obtenir le nombre total de salles

                                $query = "SELECT COUNT(*) AS total_salles FROM classe";  // Changer 'salles' en le nom exact de ta table

                                $stmt = $pdo->query($query);

                                $row = $stmt->fetch();

                                $total_salles = $row['total_salles'];

                                ?>



                                <a href="views/sale/liste.php" style="text-decoration: none;">

                                    <div class="block" style="background-color: var(--red);">

                                        <i class="mdi mdi-door"></i>

                                        <h3>Nombre de salles : <?php echo $total_salles; ?></h3>

                                    </div>

                                </a>







                                <!-- Bloc Cours -->

                                <?php

                                // Connexion à la base de données

                                $pdo = new PDO('mysql:host=localhost;dbname=hsbeyyyy_scolarite', 'hsbeyyyy_usr', 'Amarachin@17');



                                // Requête pour obtenir le nombre total de cours

                                $query = "SELECT COUNT(*) AS total_cours FROM cours";  // Changer 'cours' en le nom exact de ta table

                                $stmt = $pdo->query($query);

                                $row = $stmt->fetch();

                                $total_cours = $row['total_cours'];

                                ?>



                                <a href="views/cours/liste.php" style="text-decoration: none;">

                                    <div class="block" style="background-color: var(--purple);">

                                        <i class="mdi mdi-book-open"></i>

                                        <h3>Nombre de cours : <?php echo $total_cours; ?></h3>

                                    </div>

                                </a>





                            </section>

                        </main>



                    </div>

                </div>

            </div>



            <!-- Footer -->

            <footer class="footer">
            Copyright © 2024 School développé avec ❤️ par <br>
    <a href="https://wa.me/+22796132977" target="_blank" style="color: black; text-decoration: none; font-weight: bold;">
        Majesty
    </a> 
    & Karima.
</footer>





        </div>

    </div>



    <!-- jQuery Scripts -->

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/app.js"></script>
    <script>
    
</script>


</body>



</html>

