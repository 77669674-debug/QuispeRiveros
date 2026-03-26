<?php

// factorial

if(isset($_GET['factorial'])){

    $num = $_GET['factorial'];
    $factorial = 1;

    for($i = 1; $i <= $num; $i++){
        $factorial = $factorial * $i;
    }

    echo "Factorial: " . $factorial;
}


// suma de cuadrados

if(isset($_GET['cuadrados'])){

    $n = $_GET['cuadrados'];

    $suma = 0;

    for($i=1; $i<=$n; $i++){
        $suma = $suma + ($i*$i);
    }

    echo "Suma de cuadrados: " . $suma;

}

if(isset($_GET['fibonacci'])){

    $n = $_GET['fibonacci'];

    $a = 0;
    $b = 1;

    echo "Serie Fibonacci: ";

    for($i=0; $i<$n; $i++){

        echo $a . " ";

        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }

}

?>

