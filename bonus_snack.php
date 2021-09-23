<?php
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione)
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola
- che age sia un numero.
-Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus Snack</title>
</head>
<body>
    <?php
    if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) :
        echo "<h1>Inserire i dati</h1>";
    else :
        if(strlen($_GET["name"]) > 3 && strpos($_GET["mail"], ".") && strpos($_GET["mail"], "@") && is_numeric($_GET["age"]))
        echo "<h1>Accesso riuscito</h1>";
        else echo "<h1>Accesso negato</h1>";
    endif;   
    ?>   
</body>
</html>