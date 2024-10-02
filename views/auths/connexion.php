<html>
    <head>
    <link rel="stylesheet" href="<?php echo URI; ?>views/assets/css/loginregister.css">
    </head>
    <header>
      <div class="logo">
      <img src="<?php echo URI; ?>views/assets/nikelogorouge.png" alt="Netflix Logo" />
      </div>
    </header>

    <video autoplay muted loop id="background-video">
    <source src="<?php echo URI; ?>views/assets/nike.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
<body>
    <br><br><br><br><br><br><br><br>
<div class="login-container">
    <h1>BIENVENUE CHEZ NIKE</h1>
    <form method="post" >
    <div class="nom">  E-mail</div> <input type="text" name="email" required><br>
    <div class="mdp">  Mot de passe:</div> <input type="password" name="mot_de_passe" required><br>
        <input type="submit" name="connexion" value="connexion"  >
    </form>
    <p>Déjà inscrit ? <a href="<?= URI . "auths/inscription"; ?>">inscris-vous</a>.</p>
</div>
</body>
</html>

