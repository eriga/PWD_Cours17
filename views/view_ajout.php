<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un film</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Ajouter un film</h1>

    
    <?php if(isset($_GET["erreur"])) { ?>
        <!-- Affiché seulement si le paramètre GET "erreur" existe -->
        <p class="erreur">L'ajout n'a pas fonctionné.</p>
    <?php } ?>

    <form action="ajoutSubmit.php" method="post">
        <label for="titre">
            Titre:
            <input type="text" name="titre">
        </label>
        <label for="date">
            Date:
            <input type="date" name="date">
        </label>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>