<?php
/*
 Ülesanne 0304

Kasutades arikmeetilist tehet moodul teha funktsioon nimega "nr_info", mille sisendargumendiks on täisarv ja mis:

1. Teatab kasutajale kas tegu on paaris või paaritu arvuga.
	Mooduli näide:
	12%2=0
	13%2=1
	14%2=0
2. Teatab kasutajale kas arv on suurem või väiksem kui 10.
3. Teatab kasutajale kas arv on suurem või väiksem kui 100.
4. Näitab kasutajale arvu ruudus.
5. Näitab kasutajale arvust ruutjuurt.

Käivita funktsioon 5 korda sisestades arvudeks: 1, 8, 9, 15, 200

 */

function compareWithLimit($arv, $piir)
{
    echo "$arv on " . ($arv > $piir ? "suurem kui" : ($arv < $piir ? "väiksem kui" : "võrdne arvuga")) . "  $piir.<br>";
}

function nr_info($arv)
{
    if ($arv % 2 == 0) {
        echo "$arv on paarisarv.<br>";
    } else {
        echo "$arv on paaritu arv.<br>";
    }
    compareWithLimit($arv, 10);
    compareWithLimit($arv, 100);
    echo "$arv ruudus on " . $arv * $arv . ".<br>";
    echo "$arv ruutjuur on " . sqrt($arv) . ".<br>";
    echo "<br>";
}

nr_info(1);
nr_info(8);
nr_info(9);
nr_info(15);
nr_info(200);
nr_info(10);
nr_info(100);