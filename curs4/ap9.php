<?php
declare(strict_types = 1);

function suma(int $x, int $y){
    echo $x+$y;
}
suma(5,8); //13
suma('aaa',10); //Fatal error