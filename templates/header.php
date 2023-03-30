<?php include_once("./helpers/url.php") ?>
<?php include_once("./data/datas.php") ?>
<?php
     include_once("./data/categories.php");
      $uri = $_SERVER['REQUEST_URI']; 
      $uri = substr($uri, 11);
      
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?= $BASE_URL?>/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
    <title>Blog</title>
</head>
<body>
    <header class="header">
        <div class="icon">
            <a href="<?= $BASE_URL ?>">
                <img src="<?=$BASE_URL?>/img/logo.png" alt="icon" />
            </a>
        </div>
        <nav class="nav">
            <ul class="nav_list">
                <li class="item" id="home"><a href="<?= $BASE_URL ?>">Home</a></li>
                <li class="item" id="about"><a href="<?= $BASE_URL ?>about.php">About</a></li>
            </ul>
        </nav>
</header>
