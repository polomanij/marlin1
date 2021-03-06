<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
              </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <a href="#" class="btn btn-success">Add post</a>
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach($posts as $post): ?>
                          <tr>
                            <th scope="row"><?= $post["id"] ?></th>
                            <td><a href="show.php?id=<?= $post["id"] ?>"><?= $post["title"] ?></a></td>  
                            <td>
                                <a href="edit.php?id=<?= $post["id"] ?>" class="btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?= $post["id"] ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                            </td>
                          </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>