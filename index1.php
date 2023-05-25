<?php
require_once './controle/config.php';
$articles = getArticles();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réchercher une matiere</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>

    <div class="container">
        <h1>Récherchez un produit</h1>
        <input type="search" name="search" id="search">
        <?php foreach ($articles as $article): ?>
            <div class="products">
                <div class="product">
                    <img src="./assets/images/<?= $article['photo'] ?>" alt="">
                    <h4><?= substr($article['name'], 0, 10) ?>...</h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
    <script src="./assets/js/script.js"></script>
</body>
</html>