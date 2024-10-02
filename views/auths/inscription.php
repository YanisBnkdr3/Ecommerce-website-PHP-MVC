<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo URI; ?>views/assets/css/loginregister.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="<?php echo URI; ?>views/assets/nikelogorouge.png" alt="Netflix Logo" />
        </div>
    </header>

    <video autoplay muted loop id="background-video">
        <source src="<?php echo URI; ?>views/assets/nike.mp4" type="video/mp4" />
        Your browser does not support the video tag.
    </video>
    <br><br><br><br><br><br><br><br>

    <div class="login-container">
        <h1>BIENVENUE CHEZ NIKE</h1>
        <form method="post" >
            <div>Nom d'utilisateur:</div> <input type="text" name="nom_utilisateur" required><br>
            <div>Prenom d'utilisateur:</div> <input type="text" name="prenom_utilisateur" required><br>
            <div>E-mail:</div> <input type="email" name="email" required><br>
            <div>N-telephone:</div> <input type="text" name="telephone" required><br>
            <div>Mot de passe:</div> <input type="password" name="mot_de_passe" required><br>
            <div>Confirmation du mot de passe:</div> <input type="password" name="confirmation_mot_de_passe" required><br>
            <input type="submit" name="register" value="register">
        </form>
        <p>Déjà inscrit ? <a href="<?= URI . "auths/connexion"; ?>">Connectez-vous ici</a>.</p>
    </div>
</body>
</html>
