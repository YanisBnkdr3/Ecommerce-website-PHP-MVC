<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Utilisateurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" integrity="sha512-MCCiGB7VXTshWGTuLrrCO3+eVxg2vUABcdjv+0AUnMsL1WV1HTcrlvN26lgNyL+Xv6bEbkW8Lp5bx0/TtF2T/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">Utilisateurs</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $cpt = 1;
                    foreach ($auths as $auth) {
                    ?>
                        <tr>
                            <th scope="row"><?= $cpt++; ?></th>
                            <td><?= $auth->id_utilisateur; ?></td>
                            <td><?= $auth->nom; ?></td>
                            <td><?= $auth->prenom; ?></td>
                            <td><?= $auth->email; ?></td>
                            <td><?= $auth->telephone; ?></td>
                            <td>
                                <!-- Bouton supprimer -->
                                <div class="col">
                                    <?php
                                    if (isset($auth->id_utilisateur) && !empty($auth->id_utilisateur)) {
                                        echo '<a class="btn btn-danger" href="' . URI . 'auths/deletuser/' . $auth->id_utilisateur . '" onclick="return confirm(\'Êtes-vous sûr de vouloir supprimer cet utilisateur ?\');"><i class="bi bi-trash-fill"></i> Supprimer</a>';
                                    } else {
                                        echo 'ID de l\'utilisateur non disponible.';
                                    }
                                    ?>
                                </div>
                                <!-- Formulaire de changement de rôle -->
                                <div>
                                    <form action="<?= URI . "auths/changerrole/{$auth->id_utilisateur}"; ?>" method="post">
                                        <div class="btn-group" role="group" aria-label="Changer le rôle">
                                            <button type="submit" class="btn btn-secondary" name="role" value="admin">Admin</button>
                                            <button type="submit" class="btn btn-secondary" name="role" value="client">Client</button>
                                        </div>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optionnel: Ajouter Bootstrap JS si nécessaire -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-2XzsfcozFTkgMAzRwscmBr7v/Yzqkgv9X4m7X61xxE29hCFIezRT2OvCOw8HaaPBNiQvtXeom4zI7wUERUyhUw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</body>
</html>
