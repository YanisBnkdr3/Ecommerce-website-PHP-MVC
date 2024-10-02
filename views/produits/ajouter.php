<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout de film</title>
    <style>
        /* Styles de base pour le container */
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 25px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1), 0 6px 20px rgba(0,0,0,0.2);
            transition: all 0.3s;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 16px rgba(0,0,0,0.2), 0 17px 50px rgba(0,0,0,0.4);
        }

        /* Styles pour les labels */
        .form-label {
            font-size: 18px;
            color: #333;
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        /* Amélioration des champs de saisie */
        .form-control {
            width: 100%;
            padding: 12px 20px;
            margin-bottom: 20px;
            border: none;
            border-radius: 4px;
            background-color: #eee;
            transition: background-color 0.2s;
        }

        .form-control:focus {
            background-color: #fff;
            box-shadow: 0 0 8px rgba(70, 140, 250, 0.8);
            outline: none;
        }

        /* Personnalisation des zones de texte */
        textarea.form-control {
            height: 150px;
            resize: none;
        }

        /* Styles pour les inputs de type file */
        input[type="file"] {
            background-color: #fafafa;
            border: 2px dashed #ddd;
            padding: 10px;
            text-align: center;
            margin-bottom: 20px;
            cursor: pointer;
            transition: border .3s ease-in-out;
        }

        input[type="file"]:hover {
            border: 2px dashed #aaa;
        }

        /* Styles pour le bouton */
        .btn-success {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    background-image: linear-gradient(45deg, #FF6347, #FF4500); /* Dégradé rouge */
    color: white;
    font-size: 16px;
    cursor: pointer;
    border: none;
    transition: transform 0.2s, box-shadow 0.2s;
}

.btn-success:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

        ::placeholder {
            color: #aaa;
            opacity: 1;
            transition: transform 0.2s;
        }

        ::-webkit-input-placeholder:hover {
            transform: translateX(10px);
        }

        ::-moz-placeholder:hover {
            transform: translateX(10px);
        }

        :-ms-input-placeholder:hover {
            transform: translateX(10px);
        }
    </style>
</head>
<body>
    <form method="post" class="container" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom">
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="text" class="form-control" name="prix" id="prix">
        </div>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantite</label>
            <input type="number" class="form-control" name="quantite" id="quantite">
        </div>
        <div class="mb-3">
            <input type="file" name="image">
        </div>
        <div class="form-floating">
            <textarea style="height: 100px" class="form-control" name="courte_description"
                      placeholder="Entrer votre courte description"
                      id="courte_description"></textarea>
            <label for="courte_description">Courte description</label>
        </div>
        <br>
        <div class="form-floating">
            <textarea style="height: 100px" class="form-control" name="description" placeholder="Entrer votre description"
                      id="description"></textarea>
            <label for="description">Description</label>
        </div>
        <input type="submit" class="btn btn-success" name="ajouter" value="Ajouter un produit">
    </form>
</body>
</html>
