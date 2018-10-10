<?php if ( !empty($_SESSION["image-errors"]) ): ?>
    <?php foreach ($_SESSION["image-errors"] as $error): ?>
        <p><?= $error ?></p>
    <?php endforeach; ?>
<?php endif; ?>
<form action="image.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit">
</form>