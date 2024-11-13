<?php

// Si le formulaire est soumis, traiter l'inscription

if (isset($_POST['register'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $nom = $_POST['nom'];



    // Validation simple de l'email et du mot de passe

    if (empty($email) || empty($password) || empty($nom)) {

        $error_message = "Tous les champs sont obligatoires.";

    } else {

        try {

            // Connexion à la base de données

            $pdo = new PDO('mysql:host=localhost;dbname=hsbeyyyy_scolarite', 'hsbeyyyy_usr', 'Amarachin@17');

            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



            // Vérifier si l'email existe déjà

            $stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE email = :email");

            $stmt->execute(['email' => $email]);

            $user = $stmt->fetch();



            if ($user) {

                $error_message = "Cet email est déjà utilisé.";

            } else {

                // Hacher le mot de passe

                $hashed_password = password_hash($password, PASSWORD_DEFAULT);



                // Insérer l'utilisateur dans la base de données

                $stmt = $pdo->prepare("INSERT INTO utilisateurs (email, password, nom) VALUES (:email, :password, :nom)");

                $stmt->execute(['email' => $email, 'password' => $hashed_password, 'nom' => $nom]);



                // Rediriger vers la page de connexion après l'inscription

                header("Location: authent.php");

                exit();

            }

        } catch (PDOException $e) {

            $error_message = "Erreur de connexion à la base de données : " . $e->getMessage();

        }

    }

}

?>



<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscription</title>

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



        .register-container {

            background-color: #fff;

            padding: 40px;

            border-radius: 10px;

            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);

            width: 100%;

            max-width: 400px;

            text-align: center;

            transition: transform 0.3s ease, opacity 0.3s ease;

        }



        .register-container:hover {

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

        input[type="password"],

        input[type="text"] {

            width: 100%;

            padding: 12px 15px;

            margin-top: 8px;

            border: 1px solid #ddd;

            border-radius: 6px;

            font-size: 14px;

            transition: border-color 0.3s ease;

        }



        input[type="email"]:focus,

        input[type="password"]:focus,

        input[type="text"]:focus {

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



    <div class="register-container">

        <h2>Inscription</h2>



        <!-- Formulaire d'inscription -->

        <form action="inscription.php" method="POST">

            <div class="form-group">

                <label for="nom">Nom :</label>

                <input type="text" id="nom" name="nom" required placeholder="Entrez votre nom">

            </div>

            

            <div class="form-group">

                <label for="email">Email :</label>

                <input type="email" id="email" name="email" required placeholder="Entrez votre email">

            </div>



            <div class="form-group">

                <label for="password">Mot de passe :</label>

                <input type="password" id="password" name="password" required placeholder="Entrez votre mot de passe">

            </div>

            

            <button type="submit" name="register">S'inscrire</button>



            <?php

            // Afficher un message d'erreur si l'inscription échoue

            if (isset($error_message)) {

                echo "<div class='error-message'>$error_message</div>";

            }

            ?>

        </form>



        <div class="footer">

            <p>Déjà inscrit ? <a href="authent.php">Se connecter</a></p>

        </div>

    </div>



</body>

</html>

