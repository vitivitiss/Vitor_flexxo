<?php
    
    $a = 5; 
    $b = 5;
    $c= 10;

    if($a == $b){

    echo "elas são iguais";

    } else{

    echo "elas não são iguais " ;   

        }
     echo "<br>";
     echo "<br>";


     if($a == $b && $b<$c ){
        echo "é verdade";

     }else{
        echo"é mentira";

     }

    echo "<br>";
     echo "<br>";


     if($a > $b || $c > $a){

        echo "é verdade pelo menos uma vez";

     }else{

        echo "é mentira pelo menos uma vez";
     }

    echo "<br>";
     echo "<br>";

    if ($a >= $c ){
    echo "é verdade na primeira vez";

    } elseif( $b <= $c){
    echo "é verdade na segunda vez";
    
    }else{
    echo "é mentira";
    }




?>