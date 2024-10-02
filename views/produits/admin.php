<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Styles globaux pour le panel admin */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .text-center {
            text-align: center;
        }

        .m-5 {
            margin: 40px; /* Plus uniforme que 5em dans de nombreux cas */
        }

        .btn {
            padding: 8px 16px;
            text-align: center;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.5);
        }

        .btn-danger {
            background-color: #dc3545;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c82333;
            box-shadow: 0 0 5px rgba(200, 35, 51, 0.5);
        }

        .table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e8e8e8;
        }

        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <h1 class="text-center m-5">Admin Panel</h1>
    <div>
        <a class="btn btn-primary" href="<?= URI . 'auths/'; ?>">gestion de commande  </a>
    </div>
    <div>
        <a class="btn btn-primary" href="<?= URI . 'auths/gestion'; ?>">gestion users </a>
    </div>

    <div>
        <a class="btn btn-primary" href="<?= URI . 'produits/ajouter'; ?>">Ajouter</a>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Quantité</th>
                <th scope="col">Courte Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $cpt = 1;
            foreach ($produits as $produit) {
                ?>
                <tr>
                    <th scope="row"><?= $cpt++; ?></th>
                    <td><img src="<?= (isset($produit->chemin_image)) ? URI . $produit->chemin_image : URI . 'assets/tn9.png'; ?>" alt="..."></td>
                    <td><?= $produit->nom; ?></td>
                    <td><?= $produit->prix; ?></td>
                    <td><?= $produit->quantite; ?></td>
                    <td><?= $produit->courte_description; ?></td>
                    <td class="row">
                        <!-- Bouton supprimer -->
                        <div class="col">
                            <?php
                            // Bouton Supprimer
                            if (isset($produit->id_Phone) && !empty($produit->id_Phone)) {
                                echo '<a class="btn btn-danger" href="' . URI . 'produits/supprimer/' . $produit->id_Phone. '" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer ce produit ?\');"><i class="bi bi-trash-fill"></i> Supprimer</a>';
                            } else {
                                echo 'ID du produit non disponible.';
                            }
                            ?>
                        </div>

                        <!-- Bouton Modifier -->
                        <div class="col">
                            <?php
                            // Bouton Modifier
                            if (isset($produit->id_Phone) && !empty($produit->id_Phone)) {
                                echo '<a class="btn btn-primary" href="' . URI . 'produits/modifier/' . $produit->id_Phone. '"><i class="bi bi-pencil-fill"></i> Modifier</a>';
                            } else {
                                echo 'ID du produit non disponible.';
                            }
                            ?>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>
