<?php
    include 'functions.php';
    $db = include 'database/start.php';
    
    $db->update("posts", $_POST, $_GET["id"]);

    header("Location: /course-module1");