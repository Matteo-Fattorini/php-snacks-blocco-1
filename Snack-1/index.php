<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->



<?php

$matches = [
    "Match-one" => [
        "Home" => "Napoli",
        "Outsider" => "Milan",
        "ScoreOne" => rand(0, 5),
        "ScoreTwo" => rand(0, 5)
    ],
    "Match-two" => [
        "Home" => "Roma",
        "Outsider" => "Lazio",
        "ScoreOne" => rand(0, 5),
        "ScoreTwo" => rand(0, 5)
    ],
    "Match-three" => [
        "Home" => "Fiorentina",
        "Outsider" => "Napoli",
        "ScoreOne" => rand(0, 5),
        "ScoreTwo" => rand(0, 5)
    ],
    "Match-four" => [
        "Home" => "Atalanta",
        "Outsider" => "Real",
        "ScoreOne" => rand(0, 5),
        "ScoreTwo" => rand(0, 5)
    ],
    "Match-five" => [
        "Home" => "Napoli",
        "Outsider" => "Lazio",
        "ScoreOne" => rand(0, 5),
        "ScoreTwo" => rand(0, 5)
    ],
];



for ($i = 0; $i < count($matches); $i++) {
    $keys = array_keys($matches);
    $current = $keys[$i];
    echo $current . " " . $matches[$current]["Home"] . " - " . $matches[$current]["Outsider"] . " | " . $matches[$current]["ScoreOne"] . "-" . $matches[$current]["ScoreTwo"] . "<br>";
}



?>