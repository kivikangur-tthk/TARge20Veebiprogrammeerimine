<?php
/*
Ülesanne 0301

Luua massiivi nimega "loomad" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt. Karu massiivi elemendi number olgu 0, Jänesel 1 jne.

Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks olgu massiiv mida soovime välja kuvada. Funktsiooni sees lugeda funktsiooniga "sizeof" elemendid kokku ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag "<p>".

Näide:
0. Karu
1. Jänes
2. Hunt
jne.

Lisainfona mainiks, et peale 0301-0303 ülesannet peaks tulema umbes selline programm:

funktsioon kuva_massiiv
funktsioon vaheta_elemendid
funktsioon kustuta_element

tee massiiv
kuva_massiiv
vaheta_elemendid
kuva_massiiv
kustuta_element
kuva_massiiv

Ülesanne 0302

Jätkata eelmist ülesannet.

Teha funktsioon nimega "vaheta_elemendid". Funktsiooni sisendargumendiks olgu kaks massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. Kasutada tuleb funktsioonisisest lisamuutujat. Vahetada elementide "3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide:
Rebane jääb nr. 7-ks
Ahv jääb nr. 3-ks

function vaheta_elemendid($e1, $e2, $mas)  {

	$ajutine = $mas[$e1];
	$mas[$e1] = $mas[$e2];
	$mas[$e2] = $ajutine;

	return $mas;

}

$loomad = vaheta_elemendid(3, 7, $loomad);

Ülesanne 0303

Jätkata eelmist ülesannet.

Teha funktsioon nimega "kustuta_element". Funktsiooni sisendargumendiks olgu massiivi elemendi nr. mille väärtust soovime kustutada ja massiiv ise. Kustutatud elemendist järgmised liikugu ühe koha võrra ettepoole. Kustuta massiivi viimane tühi element funktsiooniga unset($mas[key]). Tagasta massiiv põhiprogrammile. Kustuta funktsiooniga element nr. 1 "Jänes". Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide:
Oli 0. Karu, 1. Jänes, 2. Hunt jne.
Peale kustutamist olgu 0. Karu, 1. Hunt jne.

*/
function kuva_massiiv($massiiv)
{
    $suurus = sizeof($massiiv);
    for ($i = 0; $i < $suurus; $i++) {
        echo "$i. " . $massiiv[$i] . "<br>";
    }
    echo "<p></p>";
}

function vaheta_elemendid($e1, $e2, $mas)
{
    $ajutine = $mas[$e1];
    $mas[$e1] = $mas[$e2];
    $mas[$e2] = $ajutine;
    return $mas;
}

function kustuta_element($index, $massiiv)
{
    $kustutatud = Array_splice($massiiv, $index, 1);
    echo "Kustutasin:";
    kuva_massiiv($kustutatud);
    return $massiiv;
}

$loomad = array("Karu", "Jänes", "Hunt", "Rebane", "Hirv", "Hiir", "Põder", "Ahv", "Mäger", "Mutt");
kuva_massiiv($loomad);

$loomad = vaheta_elemendid(3, 7, $loomad);
kuva_massiiv($loomad);

$loomad = kustuta_element(1, $loomad);
kuva_massiiv($loomad);







