<?php
$list_articles = array ( 'Bracelet', 'Montre','Collier');
$list_price = array ('200','400','300');
$list_photos = array ('photos/Bracelet1.jpg','photos/Montre.jpg','photos/collier.jpg');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_catalogue.css">
</head>
<body>

<div id="Boutique">BOUTIQUE</div>

<div class="container1">
    <img class="photos" src="<?php echo  $list_photos[0] ?>"/>
    <div class="articles">
        <?php echo  $list_articles[0] ?>
    </div>
    <div class="price">
        <p>
            <?php echo  $list_price[0] ?> euros
        </p>
    </div>
</div>

<div class="container2">
    <img class="photos" src="<?php echo  $list_photos[1] ?>"/>
    <div class="articles">
        <?php echo  $list_articles[1] ?>
    </div>
    <div class="price">
        <p>
            <?php echo  $list_price[1] ?> euros
        </p>
    </div>
</div>

<div class="container3">
    <img class="photos" src="<?php echo  $list_photos[2] ?>"/>
    <div class="articles">
        <?php echo  $list_articles[2] ?>
    </div>
    <div class="price">
        <p>
            <?php echo  $list_price[2] ?> euros
        </p>
    </div>
</div>

</body>
</html>