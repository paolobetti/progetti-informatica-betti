<?php

// Funzione per controllare se un numero è primo
function isPrime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Caso 1: numeri primi fino a un numero
if (isset($_POST["submit_single"])) {
    $value = $_POST["value"];

    echo "Numeri primi fino a $value:<br>";

    for ($i = 2; $i <= $value; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

// Caso 2: numeri primi in un range
if (isset($_POST["submit_range"])) {
    $start = $_POST["start"];
    $end = $_POST["end"];

    echo "Numeri primi da $start a $end:<br>";

    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            echo $i . " ";
        }
    }
}

// Bottone per tornare indietro alla pagina HTML
echo "<br><br>";
echo "<form action='primi.html' method='get'>";
echo "<button type='submit'>Torna indietro</button>";
echo "</form>";

?>
