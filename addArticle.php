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

    <p class="ajoutezunarticle">
        Vous souhaitez ajouter un article?
    </p>

<div class="contenair_ajoutarticle">
    <form method="post" action="displayArticle.php" enctype="multipart/form-data">
        <div class="nomarticle">
            <p>
                <input type="text" name="nom" placeholder="Nom de mon article"/>
            </p>
        </div>

        <div class="prixarticle">
            <p>
                <input type="text" name="prix" placeholder="Prix de mon article"/>
            </p>
         </div>

         <div class="ajoutezuneimg">
            <p>
                Ajoutez une image :<br/>

                <input type="file" name="monfichier"/>
            </p>
            <input type="submit" value="Envoyer"/>

        </div>
    </form>
</div>


</body>
</html>