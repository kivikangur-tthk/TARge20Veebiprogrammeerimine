<?php
$rain = "ei saja";

if ($rain == "sajab")
{
    echo "Võta kaasa vihmavari<br>";
}
else if ($rain == "ei saja")
{
    echo "Jäta vihmavari koju<br>";
}
else
{
    echo "Parem ära välja mine<br>";
}

$a = 12;
$b = 12;

if ($a > $b)
{
    echo "A $a on suurem kui B $b<br>";
}
else if ($b > $a)
{
    echo "B $b on suurem kui A $a<br>";
}
else
{
    echo "A $a on võrdne B $b-ga<br>";
}
echo $a<=>$b; // võrdlus a<b siis -1, a==b siis 0, a>b siis 1
$a = 4;
$b = -1;
echo "<br>".($a XOR $b);

$nimi = $a>0 ? "Kristjan" : "Toomas"; // ternary
echo "<br>$a $nimi";

//$seitse = 11;
$vanus = $seitse ?? 7; // null coalescing
echo "<br>Vanus: $vanus";