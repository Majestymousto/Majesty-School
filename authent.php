<?php

session_start(); // Démarre la session pour pouvoir stocker des variables de session



// Vérifier si le formulaire a été soumis

if (isset($_POST['login'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];



    // Connecte-toi à la base de données (remplace les informations avec les tiennes)

    $pdo = new PDO('mysql:host=localhost;dbname=hsbeyyyy_scolarite', 'hsbeyyyy_usr', 'Amarachin@17');

    $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");

    $stmt->execute(['email' => $email]);

    $user = $stmt->fetch();



    // Vérifie si l'utilisateur existe et si le mot de passe est correct

    if ($user && password_verify($password, $user['password'])) {

        // L'authentification est réussie, crée une session

        $_SESSION['user_id'] = $user['id'];

        $_SESSION['user_name'] = $user['nom'];



        // Redirige vers index.php

        header("Location: index.php");

        exit();

    } else {

        // Si l'authentification échoue, afficher un message d'erreur

        $error_message = "Email ou mot de passe incorrect.";

    }

}

?>



<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Connexion</title>

    <link rel="stylesheet" href="style.css">

    <style>

        /* Global Reset */

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }



        body {

            font-family: 'Arial', sans-serif;

            background: linear-gradient(45deg, #6b74ff, #9c68fd);

            display: flex;

            justify-content: center;

            align-items: center;

            height: 100vh;

            color: #fff;

        }



        .login-container {

            background-color: #fff;

            padding: 40px;

            border-radius: 10px;

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

            width: 100%;

            max-width: 400px;

            text-align: center;

            transition: transform 0.3s ease, opacity 0.3s ease;

        }



        .login-container:hover {

            transform: scale(1.05);

            opacity: 0.9;

        }



        h2 {

            color: #333;

            font-size: 28px;

            margin-bottom: 20px;

            font-weight: bold;

        }



        .form-group {

            margin-bottom: 20px;

            text-align: left;

        }



        label {

            font-size: 14px;

            color: #333;

        }



        input[type="email"],

        input[type="password"] {

            width: 100%;

            padding: 12px 15px;

            margin-top: 8px;

            border: 1px solid #ddd;

            border-radius: 6px;

            font-size: 14px;

            transition: border-color 0.3s ease;

        }



        input[type="email"]:focus,

        input[type="password"]:focus {

            border-color: #9c68fd;

            outline: none;

        }



        button {

            background-color: #9c68fd;

            color: white;

            border: none;

            padding: 15px;

            font-size: 16px;

            width: 100%;

            border-radius: 6px;

            cursor: pointer;

            transition: background-color 0.3s ease;

        }



        button:hover {

            background-color: #6b74ff;

        }



        .error-message {

            color: red;

            font-size: 14px;

            margin-top: 15px;

        }



        .footer {

            margin-top: 20px;

            font-size: 14px;

            color: #777;

        }



        .footer a {

            color: #9c68fd;

            text-decoration: none;

        }



        .footer a:hover {

            text-decoration: underline;

        }

    </style>

</head>

<body>



    <div class="login-container">

        <h2>Connexion</h2>



        <!-- Formulaire de connexion -->

        <form action="authent.php" method="POST">

            <div class="form-group">

                <label for="email">Email :</label>

                <input type="email" id="email" name="email" required placeholder="Entrez votre email">

            </div>

            

            <div class="form-group">

                <label for="password">Mot de passe :</label>

                <input type="password" id="password" name="password" required placeholder="Entrez votre mot de passe">

            </div>

            

            <button type="submit" name="login">Se connecter</button>



            <?php

            // Si une erreur d'authentification se produit

            if (isset($error_message)) {

                echo "<div class='error-message'>$error_message</div>";

            }

            ?>

        </form>



        <div class="footer">

            <p>Pas encore inscrit ? <a href="inscription.php">Créer un compte</a></p>

        </div>

    </div>



</body>

</html>

