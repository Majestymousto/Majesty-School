<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet">

<link rel="shortcut icon" href="assets/images/logo.png">

<style>
        :root {
            --yellow: #fad434;
            --blue: #38b6ff;
            --red: #d61e25;
            --gray: #f3f4f6;
            --dark-gray: #333;
            --white: #ffffff;
        }

        body {
            background-color: var(--gray);
            font-family: Arial, sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background-color: var(--blue);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px 0;
        }

        .navbar ul {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin: 0 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: var(--white);
            font-size: 16px;
            font-weight: bold;
            transition: color 0.3s, transform 0.3s;
        }

        .navbar ul li a:hover {
            color: var(--yellow);
            transform: scale(1.1);
        }

        .container {
            background-color: var(--white);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        table {
            margin-bottom: 20px;
        }

        .btn-lg {
            padding: 10px 20px;
            font-size: 16px;
        }

        .alert {
            margin-top: 20px;
        }
        .navbar {
    background-color: #f0f0f0; /* Fond blanc */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Ombre légère */
    border-radius: 20px; /* Coins arrondis */
    padding: 10px 20px;
    max-width: 800px; /* Largeur limitée */
    margin: 20px auto; /* Centrage horizontal */
    display: flex;
    justify-content: center; /* Alignement centré */
}

.navbar ul {
    list-style: none; /* Supprime les puces */
    display: flex;
    gap: 20px; /* Espacement entre les items */
    margin: 0;
    padding: 0;
}

.navbar ul li {
    margin: 0;
}

.navbar ul li a {
    text-decoration: none; /* Supprime le soulignement */
    font-weight: bold;
    color: #333; /* Couleur texte */
    padding: 8px 16px;
    transition: all 0.3s ease; /* Animation douce */
    border-radius: 10px; /* Coins arrondis sur hover */
}

.navbar ul li a:hover {
    background-color: #38b6ff; /* Fond bleu clair au survol */
    color: white; /* Texte blanc au survol */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.15); /* Ajout d'ombre sur hover */
}
/* Global Navbar Container */
.navbar-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    /* Navbar Styles */
    .navbar {
        background-color: #ffffff; /* White background */
        padding: 10px 20px;
        border-radius: 25px; /* Rounded corners */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }

    /* Navbar List */
    .navbar ul {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        gap: 15px; /* Space between items */
    }

    /* Navbar List Items */
    .navbar ul li {
        display: inline-block;
    }

    /* Navbar Links */
    .navbar ul li a {
        text-decoration: none;
        color: #333333; /* Dark text color */
        font-size: 16px;
        font-weight: bold;
        padding: 8px 15px;
        border-radius: 15px; /* Rounded buttons */
        transition: all 0.3s ease; /* Smooth hover effect */
    }

    /* Hover Effect */
    .navbar ul li a:hover {
        background-color: var(--yellow);; /* Light blue on hover */
        color: #ffffff; /* White text on hover */
    }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <div class="navbar">
        <ul>
            <li><a href="../Etudiant/liste.php">Etudiants</a></li>
            <li><a href="../professeur/liste.php">Enseignants</a></li>
            <li><a href="../sale/liste.php">Salles</a></li>
            <li><a href="../cours/liste.php">Cours</a></li>
            <li><a href="../../index.php">Tableau de bord</a></li>
            <li><a href="../../logout.php">Déconnexion</a></li>
            

        </ul>
    </div>