<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre titre</title>
    <!-- Liens vers Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Couleur rouge pour le navbar */
        .navbar {
            background-color: #ff0000; /* Rouge */
        }

        /* Style pour les liens pour améliorer le contraste */
        .navbar-brand, .nav-link {
            color: #ffffff; /* Texte en blanc pour un meilleur contraste */
        }

        .navbar-brand:hover, .nav-link:hover {
            color: #dddddd; /* Légèrement plus clair au survol */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Nike</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URI . "auths/main"; ?>">Main</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= URI . "produits/home"; ?>">home</a>

                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <a class="nav-link" href="<?= URI . 'paniers/index'; ?>">Mon Panier</a>
                        <li><a class="dropdown-item" href="#">Autre Vêtements</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">À propos</a></li>
                        <?php
                        if (!isset($_SESSION['Utilisateur'])) {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URI . 'auths/connexion'; ?>">Connexion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URI . 'auths/inscription'; ?>">Inscription</a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profils</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URI . 'auths/deconnexion'; ?>">Déconnexion</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
