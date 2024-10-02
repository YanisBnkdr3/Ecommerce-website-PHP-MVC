<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Produits</title>
    <style>
        /* Styles généraux pour le body et le container */
        body, html {
            height: 100%; /* Assure que le fond couvre toute la hauteur */
            margin: 0;
            padding: 0;
            background: url("<?php echo URI; ?>views/assets/test.jpg") no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            padding: 20px;
            color: white; /* Assure un contraste suffisant avec le fond */
            min-height: 100%; /* Assure que le container prend au moins toute la hauteur de la page */
        }

        /* Styles pour les cartes */
        .card {
            transition: transform 0.3s ease-in-out; /* Animation douce pour le survol */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Ombre pour donner de la profondeur */
            margin: 10px; /* Espacement autour des cartes */
        }

        .card:hover {
            transform: scale(1.05); /* Agrandissement léger au survol */
            box-shadow: 0 8px 16px rgba(0,0,0,0.3); /* Ombre plus prononcée au survol */
        }

        .card-img-top {
            height: 200px; /* Réduction de la hauteur des images */
            object-fit: cover; /* Assure que l'image couvre bien l'espace alloué */
        }

        /* Styles pour le bouton */
        .btn-primary {
            background-color: red; /* Fond rouge initial */
            color: white; /* Texte blanc */
            transition: background-color 0.2s ease; /* Transition pour le fond */
        }

        .btn-primary:hover {
            background-color: #ff6666; /* Rouge plus clair au survol */
        }

        .text-center {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">NOS PRODUITS</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <?php
            foreach ($produits as $produit) {
                ?>
                <div class="col">
                    <div class="card">
                        <img src="<?=
                        (isset($produit->chemin_image)) ?
                            URI . $produit->chemin_image :
                            URI . "assets/tn10.png";
                        ?>" class="card-img-top" alt="Image du produit">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produit->nom; ?></h5>
                            <p class="card-text"><?= $produit->courte_description; ?></p>
                        </div>
                        <div class="d-flex justify-content-around mb-5">
                            <h3><?= $produit->prix; ?>$</h3>
                        </div>
                        <div>
                        <a href="<?= URI . "paniers/ajouter/" . $produit->id_Phone; ?>" class="btn btn-primary btn-lg">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
