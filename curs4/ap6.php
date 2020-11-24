<?php

function modifica(&$a=3){
    $a = $a +15;
}

$a = 0;

modifica($a);
echo $a;