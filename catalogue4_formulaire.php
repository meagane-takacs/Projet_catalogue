<?php
$articles = [
    ['photos/Bracelet1.jpg', 'Bracelet', 200],
    ['photos/Montre.jpg','Montre',300],
    ['photos/collier.jpg','Collier',300],
];

include ("functions.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Catalogue</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style_catalogue4.css">
</head>
<body>

<div id="Boutique">BOUTIQUE</div>
<?php
foreach($articles as $key => $article)

{
   // afficheArticle($article);
    afficheArticlebis($article[1], $article[2],$article[0]);
}
?>

</body>

