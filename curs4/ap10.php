<?php

$a = 10;
$func = function () use ($a){
    echo $a;
};
$func(); // 10;
$a = 35;
$func(); //10