<?php

//Je nomme 3 variables nom, prix et image
$name = "";
$price = "";
$img = "";

//Puis je creer trois variable erreur, vide.
$errname = "";
//Je fixe mes conditions. Isset sert à vérifier si une variable existe (elle n'est pas obligé d'être matérialisé pour exister).
// Si ma variable nom existe,
if (isset($_POST["nom"])) {
    //j'apelle ma variable $_POST['nom'] = $name.
    $name = $_POST["nom"];
    //Si name est vide
    if ($name == "") {
        //J'affiche mon erreur => le nom est obligatoire
        $errname .= "le nom est obligatoire";
        //Sinon, j'affiche "Le nom de ton article est "nom article"
    }
}

$errprice = "";
//Je fixe mes conditions. Isset sert à vérifier si une variable existe (elle n'est pas obligé d'être matérialisé pour exister).
// Si ma variable prix existe,
if (isset($_POST["prix"])) {
    //j'apelle ma variable $_POST['prix'] = prix.
    $price = $_POST["prix"];
    //Si prix est vide
    if ($price == "") {
        //J'affiche mon erreur => le nom est obligatoire
        $errprice .= "le prix est obligatoire";
        //Sinon, j'affiche "Le prix de ton article est "prix article"
    }
}

$errimg = "";
//Je fixe mes conditions. Isset sert à vérifier si une variable existe (elle n'est pas obligé d'être matérialisé pour exister).
// Si ma variable img existe,
//var_dump($_FILES);  ====> SERT A AFFICHER LES INFOS DES FILES
if (isset ($_FILES["monfichier"])) {
//j'apelle ma variable $_FILES['monfichier'] = $img
    $img = $_FILES["monfichier"];
//Si imge est différent de 0 = en regardant les informations de la variable (var_dump) on voit que si l'erreur est différentes de 0, elle existe (il y a bien une erreur)
    if ($img ['error'] != 0) {
        //J'affiche mon erreur => l'image est obligatoire
        $errimg .= "l'image est obligatoire";
    } else {
//Sinon, j'affiche mon image, dans le dossier temporaire, puis,
        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'photos/' . basename($_FILES['monfichier']['name']));

    }
}
?>

<!--        //je l'affiche sur ma page-->


<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_cat.css">
</head>
<body>

<?php if (!empty($errname) OR !empty($errprice) OR !empty($errimg) OR empty($_POST)) {
    ?>

    <p class="ajoutezunarticle">
        Vous souhaitez ajouter un article?
    </p>

    <div class="contenair_ajoutarticle">
        <!--Je crée un formulaire -->
        <!--        Je boucle avec le addArticle2, il boucle sur lui même comme demander dans la consigne et plus avec DisplayArticle-->
        <form method="post" action="addArticle2.php" enctype="multipart/form-data">
            <div class="nomarticle">
                <p>
                    <!--J'affiche mon erreur si elle à lieu pour qu'elle soit à côté de ma case-->
                    <input type="text" name="nom" placeholder="Nom de mon article"/><?= $errname ?>
                </p>
            </div>

            <div class="prixarticle">
                <p>
                    <!--J'affiche mon erreur si elle à lieu pour qu'elle soit à côté de ma case-->
                    <input type="text" name="prix" placeholder="Prix de mon article"/><?= $errprice ?>
                </p>
            </div>

            <div class="ajoutezuneimg">
                <p>
                    Ajoutez une image :<br/>

                    <input type="file" name="monfichier"/><?= $errimg ?>
                </p>
                <input type="submit" value="Envoyer"/>

            </div>
        </form>
    </div>
    <?php
} else {
    ?> Le nom de ton article est <?= $_POST['nom'] ?> </br>

    Le prix de ton article est <?= $_POST['prix'] ?> euros

    <p> Voici ton image : <img src="<?php echo 'photos/' . basename($_FILES['monfichier']['name']) ?>"</p>
    <?php


}


?>

</body>
</html>