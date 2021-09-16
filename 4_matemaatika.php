<?php

$a = 1;
$b = 0;
$c = $a^$b;
echo "Välistav või: $a XOR $b = $c<br>";

$arv = 1;
//for($i=0;$i<20;$i++){
//    $shifted=$arv<<1;
//    echo "$arv << 1 = ".$shifted."<br>";
//    $arv = $shifted;
//}
//for($i=0;$i<20;$i++){
//    $shifted=$arv>>1;
//    echo "$arv >> 1 = ".$shifted."<br>";
//    $arv = $shifted;
//}
$a = 2;
$b = 4;

if ($a = $b) {
    Echo "Ei ole võrdsed aga IF sees toimub omistamine<br>";
}