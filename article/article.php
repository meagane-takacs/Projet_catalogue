<?php
$nom = "Bracelet";
$prix = 200;
$photo = "https://cdn.shopify.com/s/files/1/1227/2198/products/d5_054979b7-13ee-4bc2-a4fa-9e411b9f342d_800x800.jpg?v=1559752264";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Page article</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_catalogue.css">
</head>
<body>

<div class="container">

    <div class="nom">
        <?php echo  $nom ?>
    </div>

    <div class="px">
        <img src="<?php echo  $photo ?>"/>
    </div>

    <div class="prix">
        <p>
         <?php echo  $prix ?> euros
        </p>
    </div>
</div>

</body>
</html>