<?php
/*
Ülesanne 0602

Teha arvu arvamise mäng.

Sessioonid ja/või vormi peidetud väljad või URLi rea parameetrid.
1. Arvuti mõtleb juhuslikult ühe arvu 1-1000 vahel. Nimetame seda "õigeks".
2. Kasutaja saab lahtrisse sisestada arvu.
3. Arvuti ütleb, et kas õige on sisestatust suurem või väiksem.
4. Mäng kestab kuni kasutaja arvab õige ära.
5. Arvuti annab õige ara arvamisest teada.
6. Saab alustada uut mängu.
 */
session_start();
if (isset($_REQUEST["alusta"])) {
    session_unset();
}
if (!isset($_SESSION['õige'])) {
    $_SESSION['õige'] = rand(1, 1000);
}
if (isset($_REQUEST["arv"])) {
    $_SESSION['user_input'][] = $_REQUEST['arv'];
    $tulemus = implode(", ", $_SESSION['user_input']) . "<br>";
    if ($_REQUEST["arv"] == $_SESSION['õige']) {
        $lõpp = true;
        $tulemus .= "ÕIGE<br>Arvasid " . sizeof($_SESSION['user_input']) . " korda.";
    } else if ($_REQUEST["arv"] > $_SESSION['õige']) {
        $tulemus .= "väiksem";
    } else {
        $tulemus .= "suurem";
    }
}
?>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arvamismäng</title>
</head>
<body>
<form method="post">
    <input type="submit" name="alusta" value="Alusta uut mängu">
</form>
Arvut mõtles ühele numbrile vahemikus 1-1000. Arva ära, millisele:<br>
<form method="post">
    <label for="arv">Sisesta oma arvamus</label>
    <input id="arv" name="arv" type="number"><br>
    <input type="submit" value="Arvuta" <?= isset($lõpp) ? "disabled" : "" ?>>
</form>
<?php
if (isset($tulemus)) {
    echo $tulemus;
}
?>
</body>
</html>







