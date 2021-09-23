<?php
/* Creare una funzione che restituisce un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. 
Stampare i numeri in pagina.
*/

function get_random_number() {
    $random_numbers =[] ;
    while (count($random_numbers) < 15) {
        $number = rand(1,100);
        if(!in_array($number, $random_numbers)) {
            $random_numbers[]  = $number;
        }
    }
    return $random_numbers;
}

$numbers = get_random_number();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php foreach ($numbers as $number) echo "<li>$number</li>"?>
    </ul>
</body>

</html>
