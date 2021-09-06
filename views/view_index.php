<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titre ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Les variables $titre et $films proviennent du controleur -->
    <h1><?= $titre ?></h1>
    <?php while($film = mysqli_fetch_assoc($films)) { ?>
        <p>
            <?= $film["titre"] ?>
        </p>

    <?php } ?>

</body>
</html>