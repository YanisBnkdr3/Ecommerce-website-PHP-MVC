<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation de Paiement</title>
    <link rel="stylesheet" href="<?= URI ?>views/assets/css/style.css"> <!-- Assurez-vous que le chemin est correct -->
</head>
<body>
    <div class="confirmation-container">
        <h1>Confirmation de Paiement</h1>
        <?php if (isset($detailsCommande)) : ?>
            <p>Merci pour votre achat, <?= $detailsCommande->nom_utilisateur ?>!</p>
            <p>Numéro de commande: <?= $detailsCommande->id_commande ?></p>
            <p>Date de la commande: <?= $detailsCommande->date_creation ?></p>
            <p>Total payé: <?= $detailsCommande->prix ?> €</p>
            <p>Statut de la commande: <?= $detailsCommande->statut ?></p>
            <a href="<?= URI ?>produits/home">Retour à la boutique</a>
        <?php else : ?>
            <p>Erreur lors de la récupération des détails de votre commande. Veuillez contacter le support.</p>
        <?php endif; ?>
    </div>
</body>
</html>
