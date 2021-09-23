<?php

function blueEcho()
{
    echo "<span style='color: blue'>Sinine vaal, sinises meres</span><br>";
}

function blueEcho2($message)
{
    $string = "<span style='color: blue'>$message</span><br>";
    echo $string;
    return $string;
}

function colorecho($string, $color = "red", $tag = "span")
{
    echo "<$tag style='color: $color'>$string</$tag><br>";
}

colorecho("Peaks olema punane");
colorecho("Roheline muru", "green");
colorecho("Pruun karu", "brown");
colorecho("Kollane päike", "yellow");
colorecho("Kuldne kuld", "gold");
colorecho("Imelik värv", "teal");
echo "<p>";

blueEcho();
blueEcho2("Karu murdi karikakra.");

#globaal muutujad ja funk. sisesed muutujad
$global_string = "globaalne sõne";

function custom_func_with_argument($text)
{
    // mitte teha niimoodi.
    global $global_string;
    $global_string = "funktsiooni sisene sõne";
    echo $text . $global_string;
}

custom_func_with_argument("Hello again!<br>");
echo "Põhiprogramm: " . $global_string;

function str_secure($string)
{
    $string = addslashes($string);
    $string = htmlspecialchars($string);
    $string = trim($string);

    return $string;
}

echo "<br>";
$string = "<a href=http://kartul.ee>Külasta meie saiti</a> test:'hack' test:\"hack\"";
echo $string . "<br>";
echo str_secure($string) . "<p>";