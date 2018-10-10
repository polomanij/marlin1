<?php
    include '../components/image.php';

    Image::upload($_FILES["image"]);

    header("Location: /course-module1/image.view");