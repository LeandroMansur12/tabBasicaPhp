<?php

function subsequente(int $n){

    for($q=0;$q<=10;$q++){

        echo "$n x $q" . '='. $n * $q."<br>"; 
    }

    echo "----<br>";
}


subsequente(2);
subsequente(3);
subsequente(4);
subsequente(5);
subsequente(6);
subsequente(7);
subsequente(8);
subsequente(9);
subsequente(10);

echo "FIM";


