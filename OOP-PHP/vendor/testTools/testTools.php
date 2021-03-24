<?php
function assertEquals($expected , $current,$description='',$linea='')
{
    if ($expected === $current)
    {
        echo "Pass | $description \n";
        echo "Atteso: $expected (".gettype($expected).") \n";
        echo "Ottenuto: $current (".gettype($current).") \n";
        echo $linea ? "linea $linea \n" : "\n";
    }
    else
    {
        echo "Fail | $description \n";
        echo "Atteso: $expected (".gettype($expected).") \n";
        echo "Ottenuto: $current (".gettype($current).") \n";
        echo $linea ? "linea $linea \n" : "\n";
    }
}


?>