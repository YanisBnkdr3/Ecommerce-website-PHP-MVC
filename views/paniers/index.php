


<h1 class="text-center m-5">Mon panier</h1>

<form action="<?= URI . "commandes/passerCommande"; ?>" method="post">
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Nom</th>
        <th scope="col">Prix</th>
        <th scope="col">Quantite</th>
        <th scope="col">Courte Description</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $cpt = 1;
    foreach ($produits as $produit) {
        $quantite = $produit[0];
        $produit = $produit[1];
        ?>
            <tr>
                <th scope="row"><?= $cpt++; ?></th>
                <td><img height="100px" width="100px" src="<?=
                    (isset($produit->chemin_image)) ?
                        URI . $produit->chemin_image :
                        URI . "assets/image.jpeg";
                    ?>" alt="..."></td>
                <td><?= $produit->nom; ?></td>
                <td><?= $produit->prix; ?></td>
                <input type="hidden" name="prix_<?= $produit->prix ?>">
                <td><input type="number" name="quantite_<?= $produit->id_Phone ?>" min="0" max="<?= $produit->quantite; ?>"
                           value="<?= $quantite; ?>"></td>
                <td><?= $produit->courte_description; ?></td>
                <td class="row">
                <div class="col">
                        <a class="bi bi-pencil-square" href="<?= URI . "paniers/modifier/$produit->id_Phone"; ?>"><i
                                    class="bi bi-trash3-fill">modifier</i></a>
                    </div>
                    <div class="col">
                        <a class="btn btn-danger" href="<?= URI . "paniers/supprimer/$produit->id_Phone"; ?>"><i class="bi bi-trash3-fill"></i> Supprimer</a>
                    </div>
                </td>
            </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<input type="hidden" name="id_utilisateur" value="submit">
<button type="submit" class="btn btn-primary my-3">Passer la Commande</button>
        </form>

<!-- PayPal Button Container -->
<center>
    <div id="paypal-button-container"></div>
</center>

<!-- PayPal SDK Script -->
<script src="https://www.paypal.com/sdk/js?client-id=AT6eVLJl11X4Afmfg4hIzjZDmtnuy-ueqn46dzL0hUO38ph70dLYAVyc24CfNOTJS7Bxfg1XYAv7G9et&components=buttons"></script>

<!-- PayPal Button JavaScript Logic -->
<script>
paypal.Buttons({
    // Sets up the transaction when a payment button is clicked
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '0.01'  // Set this to the total amount
                }
            }]
        });
    },
    // Finalize the transaction after payer approval
    onApprove: async (data, actions) => {
        const order = await actions.order.capture();
        console.log(order);
        alert('Transaction completed by ' + order.payer.name.given_name);
        // Redirect after payment
        window.location.href = 'confirmation.php';  // Update this to your confirmation page
    }
}).render('#paypal-button-container');
</script>
