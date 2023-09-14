<?php
    /* Mostar el valor de un un parámetro llamado nombre recibido por querystring
    eliminando los caracteres '/' del principio y el final si los hubiera (función
    trim). Si no se pasa un parámetro nombre se utilizará tu nombre de pila.*/

        $nombre = "/Guada/Gutierrez/Torruella/";
        echo "El parametro original es: " . $nombre . "\n";
        $resultado = trim($nombre,"/");
        echo "El parametro original sin barras inciales: " . $resultado . "\n";
        $formateo = str_replace('/',' ',$resultado);
        echo "El parametro original sin barras inciales y cambiando las \ por espacios en blancos es: " .  $formateo. "\n";
    //Muestra la longitud del parámetro nombre (función strlen)//
        echo "La longitud del párametro inicial es: "  . strlen($formateo). "\n";
    //Muestra el nombre en mayúsculas (función strtoupper)
        echo "El parámetro original en mayúsculas es: "  . strtoupper($formateo) . "\n";
    //Muestra el nombre en minúsculas (función strtolower)
        echo "El parámetro original en minúsculas es: "  . strtolower($formateo). "\n";
    /*Muestra el número de veces que aparece la letra a (mayúscula o minúscula)
    en el parámetro nombre (funciones substr_count + (strtoupper o strtolower)).*/
        echo "El número de a's en el parámetro original es: " .  (substr_count($formateo, 'a') + substr_count($formateo, 'A')) . "\n";
    /*Muestra la posición de la primera a existente en el nombre (sea mayúscula
    o minúscula). Si no hay ninguna mostrará un texto indicándolo (función stripos). */
        $auxpos = (stripos($formateo, 'a'));
        if ($auxpos !== false) 
        {
            echo "La posición de la primera a en el parámetro original es:  " . ($auxpos + 1) . "\n";
        }
        else 
        {
            echo "El parámetro no contiene a's ";
        }
    /*Muestra el nombre sustituyendo las letras ‘o’ por el número cero (sea
    mayúscula o minúscula) (función str_ireplace).*/
    $auxrepl = str_replace('o','0',$formateo);
    $auxrepl1 =str_replace('O','0',$auxrepl);
    echo "El parametro original cambiando las o (mayúsculas y minúsculas) por 0 es: " .  $auxrepl1. "\n";
        
?>