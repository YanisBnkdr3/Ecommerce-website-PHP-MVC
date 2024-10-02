<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix</title>
    <link rel="stylesheet" href="<?php echo URI; ?>views/assets/css/main.css" />
    

  </head>
  <body>
    <style>
 body {
  font-family: Arial, sans-serif;
  background-image: url("<?php echo URI; ?>views/assets/test.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
  .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  header {
    background-color: transparent;
    color: #fff;
    padding: 20px 0;
  }
  
  nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  
  .logo {
    width: 150px;
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 999;
  }
  
  .nav-links {
    list-style: none;
    display: flex;
  }
  
  .nav-links li {
    margin-right: 20px;
  }
  
  .nav-links a {
    text-decoration: none;
    color: #fff;
  }
  
  .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .btn-sign-in {
    background-color: #e50914;
    color: #fff;
    position: absolute;
    top: 40px;
    left: 1281px;
    z-index: 999;
  }
  
  .hero {
    text-align: center;
    padding: 100px 0;
  
  }
  
  .hero h1 {
    font-size: 66px;
    margin-bottom: 20px;
    color: #fff;
  }
  .hero p {
    font-size: 26px;
    color: #fff;
  }
  
  .cta-buttons {
    margin-top: 20px;
  }
  
  .btn-primary {
    background-color: #e50914;
    color: #fff;
  }
  
  .btn-secondary {
    background-color: #333;
    color: #fff;
    margin-left: 10px;
  }
  
  footer {
    background-color: transparent;
    color: #fff;
    padding: 50px 0;
    text-align: center;
  }
  
  .footer-links {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
  }
  
  .footer-links li {
    margin-right: 10px;
  }
  
  .footer-links a {
    text-decoration: none;
    color: #fff;
  }
  
  .language-selector {
    margin-top: 20px;
    padding: 10px;
    position: absolute;
    top: 20px;
    left: 1150px;
    z-index: 999;
  }
  
  .categories {
    background-color: #000;
    color: #fff;
    padding: 20px 0;
    text-align: center;
  }
  
  .category-list {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 20px;
    overflow-x: auto; /* Permettre le défilement horizontal si nécessaire */
  }
  
  .category {
    margin: 0 10px;
    text-align: center;
  }
  
  .category img {
    max-width: 150px; /* Ajuster la largeur maximale des images */
    max-height: 150px;
    border-radius: 5px;
  }
  
  .category h3 {
    margin-top: 10px;
  }
  .container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

header {
  background-color: transparent;
  color: #000000;
  padding: 20px 0;
}

nav {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.logo {
  width: 150px;
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 999;
}

.nav-links {
  list-style: none;
  display: flex;
}

  
    </style>
    <header>
      <nav>
        <div class="container">
        <img src="<?php echo URI; ?>views/assets/nikelogorouge.png" alt="Logo">

        
        </div>
      </nav>
      <div class="hero">
        <h1> Mon mieux <br> vaut mieux que ton <br> meilleur.</h1>
        <p>Strong est la nouvelle belle.</p>
        <div class="cta-buttons">
        <a href="<?= URI . "auths/connexion"; ?>" class="btn btn-primary">se connecter</a>
          <a href="<?= URI . "auths/inscription"; ?>" class="btn btn-secondary">Je n'ai pas de compte</a>
        </div>
      </div>
    </header>

    <section class="categories">
      <h2>Découvrez par catégorie</h2>
      <div class="category-list">
        <div class="category">
        <img src="<?php echo URI; ?>views/assets/tn1.png" alt="Category 1" />
          <h3>JUNIOR</h3>
        </div>
        <div class="category">
        <img src="<?php echo URI; ?>views/assets/tn2.png" alt="Category 1" />
          <h3>SENIOR</h3>
        </div>
        <div class="category">
        <img src="<?php echo URI; ?>views/assets/tn3.png" alt="Category 1" />
          <h3>FEMMES</h3>
        </div>
        <!-- Ajoutez plus de catégories selon vos besoins -->
      </div>
    </section>



  </body>
</html>
