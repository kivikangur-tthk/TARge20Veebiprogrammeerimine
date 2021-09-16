<?php
echo "Massiivi võtmed määrame ise:<br>";
$seened[0] = "Kuuseriisikas";
$seened[10] = "Tammeriisikas";
$seened[12] = "Kivi-puravik";
$seened[30] = "Kärbseseen";
$seened[14] = "Kukeseen";
$seened["viis"] = "Lamba tatikas";
// Võtmed määratakse automaatselt
$seened[] = "Valge kärbseseen";
$seened[] = "Kännuseen";
$seened[] = "Pilvik";
// Kasutame massiivi loomisel array funktsiooni
$seened = array("rohelised", "kollased", "punased", "pruunid");
echo "<pre>";
print_r($seened);
echo "</pre>";

#multidimensional array

echo "<table border=1>";
for ($i = 1; $i < 16; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 16; $j++) {

        $mas[$i][$j] = rand(1, 1000);

        if ($i == $j) {
            $color = "red";
        } else {
            $color = "black";
        }

        echo "<td><span style='color: $color'>$i,$j " . $mas[$i][$j] . "</span></td>";
    }
    echo "</tr>";
}
echo "</table>";

$jagged[] = array(1,2,3);
$jagged[] = array(1,2);
$jagged[] = array(1);
$jagged[][] = "seitse";
echo "<pre>";
print_r($jagged);
echo "</pre>";

// Käsitsi loodud nimelised indeksid
$digir[0]["jknr"] = 1;
$digir[0]["nimi"] = "Maarika Vaarik";
$digir[0]["tel"] = "372932850";
$digir[0]["haigus"] = "skleroos";
$digir[0]["rohi"] = "valged tabletid";
$digir[0]["kogus"] = "2 tk";

$digir[1]["jknr"] = 2;
$digir[1]["nimi"] = "Ants Gantoz";
$digir[1]["tel"] = "37223325";
$digir[1]["haigus"] = "pohmell";
$digir[1]["rohi"] = "etanool";
$digir[1]["kogus"] = "1 ml/1 l kohta";

echo "<pre>";
print_r($digir);
echo "</pre>";
