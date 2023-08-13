<?php

include_once("helpers/url.php");
include_once("./data/categories.php");
include_once("./data/posts.php");

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <title>Welcome | Coding</title>
</head>

<body>
    <header>
        <nav>
            <ul id="navbar">
                <li><a href="../index.php" class="nav-link">Home</a></li>
                <li><a href="#" class="nav-link">Categorias</a></li>
                <li><a href="#" class="nav-link">Sobre</a></li>
                <li><a href="#" class="nav-link">Contato</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>