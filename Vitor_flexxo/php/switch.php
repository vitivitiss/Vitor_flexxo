<?php
    $frutas = "melancia";
    switch ($frutas) {
        case "banana":
            echo "você comprou banana";
            break;
        case "melancia":
            echo "você comprou melancia";
            break;
        case "pera":
            echo "você comprou pera";
            break;
        case "abacaxi":
            echo "você comprou abacaxi";
            break;
        
        default:
            echo "por favor, compre algo";
            break;
    }

?>