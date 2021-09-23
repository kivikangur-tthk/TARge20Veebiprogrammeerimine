<?php
/*
Ülesanne 0305

Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb: ,

1. Mis on selle stringi esimene täht ja viimane täht. Funkts. "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.
 */

function string_info($string)
{
    if ($string === "") {
        echo "Tühja sõne kohta ei ole midagi öelda.<br>";
        return;
    }
    echo "INFO sõne kohta: $string<br>";
    echo "Sõne algab tähega \"" . $string[0] . "\".<br>";
    echo "Sõne lõppeb tähega \"" . $string[-1] . "\".<br>";
    echo "Sõnes on " . strlen($string) . " tähte.<br>";
    echo "Sõne väikeste tähtedega: " . strtolower($string) . "<br>";
    echo "Sõne suurte tähtedega: " . strtoupper($string) . "<br>";

    $aasidKokku = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (strtolower($string[$i]) == "a") {
            $aasidKokku++;
        }
    }
    echo "Sõnes esineb $aasidKokku \"a\" tähte.<br>";
}

string_info("");
string_info("Tere tulemast PHP tundi.");
string_info("Aasta aabits on \"Karu AABITS\"");




