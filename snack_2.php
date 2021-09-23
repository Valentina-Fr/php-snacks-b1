<?php
/* Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici 
(senza, materia, solo numeri). Creare una funzione che calcoli la media voto di un alunno.
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class = [
    [
        "name" => "Emily",
        "surname" => "Willow",
        "votes" => [10, 6, 8]
    ],
    [
        "name" => "Jane",
        "surname" => "Doe",
        "votes" => [6, 6, 5]
    ],
    [
        "name" => "Rose",
        "surname" => "Smith",
        "votes" => [8, 7, 7]
    ],
    [
        "name" => "Elizabeth",
        "surname" => "White",
        "votes" => [9, 10, 8]
    ],
];

function average($arg) {
    $average_vote = array_sum($arg) / count($arg);
    return round($average_vote);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <h3>Lista studenti</h3>
    <?php foreach($class as $student) : ?>
        <ul>
            <li>Nome: <?= $student["name"] ?></li>
            <li>Cognome: <?= $student["surname"] ?></li>
            <li>Media voti: <?= average($student["votes"]) ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>