<?php
    include 'functions.php';
    $db = include 'database/start.php';

    $id = $_GET["id"];
    $post = $db->getOne("posts", $id);
?>

<h1><?= $post["title"] ?></h1>
