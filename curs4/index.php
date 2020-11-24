<?php
 // $a=false;
//if(!$a==($b=!false)) echo "Salut";
?>

<?php
$x = false;
$a = ((2+3)==5 && (true == -25) || $x == true);
        echo $a;
?>

<?php
$i = 25;
if($i==1) echo "hello";
else if($i=2) echo "Hello World";
else if($i==25) echo "Hello World and Goodbye";
else "Error";
?>

<?php
$x = 10;
if($x==25); echo "x este 25";
?>

<?php for($i=0;$i<10;$i++) {
    if($i>5) continue;
    echo $i;
}
?>

<?php for($i=0;$i<10;$i++) {
   // if($i>5) continue; else $i--;
}
?>

<?php
$a = 1;
++$a; // 1+1=2
$a *=$a; // $a = $a * $a // 4
echo $a--;
?>

<?php $x = 7;
while ($x < 30) {
    $x .=2; // $x = $x.2 ='72'; 
}
echo $x;
?>




