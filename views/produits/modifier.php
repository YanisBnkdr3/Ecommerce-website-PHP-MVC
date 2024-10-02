<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Produit</title>
</head>
<body>
    <h1>Modifier Produit</h1>
    <?php // var_dump($produit_details) ?>
    <!-- Ajoutez ici le formulaire de modification des produits -->
    <form method="post" action="<?= URI . 'produits/modifier/' . $produit_details->id_Phone ?>">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?= $produit_details->nom ?>"><br><br>
        <label for="prix">Prix :</label>
        <input type="text" name="prix" id="prix" value="<?= $produit_details->prix ?>"><br><br>
        <label for="description">Description :</label><br>
        <textarea name="description" id="description"><?= $produit_details->description ?></textarea><br><br>
        <label for="courte_description">Courte Description :</label>
        <input type="text" name="courte_description" id="courte_description" value="<?= $produit_details->courte_description ?>"><br><br>
        <label for="quantite">Quantité :</label>
        <input type="text" name="quantite" id="quantite" value="<?= $produit_details->quantite ?>"><br><br>
        <input type="submit" name="modifier" value="Modifier" >
    </form>
</body>
</html>
