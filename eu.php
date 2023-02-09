<?php

    $a = 10;
    $b = 5;
    
    echo "Os valores iniciais são...: ". $a ." e ". $b . "<br>";

    $t = $a;
    $a = $b;
    $b = $t;

    echo "Valores trocados são...: " . $a ." e " . $b;


