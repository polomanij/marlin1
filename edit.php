<?php
    include 'functions.php';
    $db = include 'database/start.php';

    $id = $_GET["id"];
    $post = $db->getOne("posts", $id);
?>

<html>
    <head>
        <title>Create post</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="update.php?id=<?= $post["id"] ?>" method="post">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $post["title"] ?>">
                        </div>
                        <div>
                            <button class="btn btn-warning">Edit post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>