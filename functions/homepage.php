<?php
    $posts = $db->getAll('posts');
    
    include __DIR__ . '/../index.view.php';