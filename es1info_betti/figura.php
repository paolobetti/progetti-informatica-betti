<?php

$value = $_POST["num"];
$figura = $_POST["drone"];

if ($figura == "triangolo") {
    for ($i = 1; $i <= $value; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

else if ($figura == "triangolo girato") {
    for ($i = $value; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

else if ($figura == "quadrato") {
    for ($i = 0; $i < $value; $i++) {
        for ($j = 0; $j < $value; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

else if ($figura == "cornice") {
    for ($i = 0; $i < $value; $i++) {
        for ($j = 0; $j < $value; $j++) {
            // Stampa asterisco solo ai bordi
            if ($i == 0 || $i == $value - 1 || $j == 0 || $j == $value - 1) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;"; // spazi interni
            }
        }
        echo "<br>";
    }
}

// Bottone per tornare alla pagina disegno.html
echo "<br><br>";
echo "<form action='disegno.html' method='get'>";
echo "<button type='submit'>Torna alla scelta figura</button>";
echo "</form>";

?>
