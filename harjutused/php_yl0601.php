<?php
/*
Ülesanne 0601

Teha lihtne kalkulaator, mis teeks põhilisi arikmeetilisi tehteid.

1. On 2 lahtrit kuhu saab sisestada arve
2. Kasutaja valib kas soovib neid arve liita, lahutada, korrutada või jagada
3. Vastavalt valikule näidatakse nt. 3 + 4 = 7
4. Näidatakse tulemust
 */
if (isset($_REQUEST['arv1'])) {
    $tulemus = $_REQUEST['arv1'] . $_REQUEST['tehe'] . $_REQUEST['arv2'] . "=";
    switch ($_REQUEST['tehe']) {
        case "+":
        {
            $tulemus .= $_REQUEST['arv1'] + $_REQUEST['arv2'];
            break;
        }
        case "-":
        {
            $tulemus .= $_REQUEST['arv1'] - $_REQUEST['arv2'];
            break;
        }
        case "*":
        {
            $tulemus .= $_REQUEST['arv1'] * $_REQUEST['arv2'];
            break;
        }
        case "/":
        {
            $tulemus .= $_REQUEST['arv1'] / $_REQUEST['arv2'];
            break;
        }
    }
}
?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihtne kalkulaator</title>
</head>
<body>

<form method="post">
    <label for="arv1">Esimene arv</label>
    <input id="arv1" name="arv1" value="<?= isset($_REQUEST['arv1']) ? $_REQUEST['arv1'] : 1 ?>"><br>
    <label for="tehe">Tehe</label>
    <select id="tehe" name="tehe">
        <option <?= isset($_REQUEST['tehe']) && $_REQUEST['tehe'] == "+" ? "selected" : "" ?>>+</option>
        <option <?= isset($_REQUEST['tehe']) && $_REQUEST['tehe'] == "-" ? "selected" : "" ?>>-</option>
        <option <?= isset($_REQUEST['tehe']) && $_REQUEST['tehe'] == "*" ? "selected" : "" ?>>*</option>
        <option <?= isset($_REQUEST['tehe']) && $_REQUEST['tehe'] == "/" ? "selected" : "" ?>>/</option>
    </select><br>
    <label for="arv2">Teine arv</label>
    <input id="arv2" name="arv2" value="<?= isset($_REQUEST['arv2']) ? $_REQUEST['arv2'] : 3 ?>"><br>
    <input type="submit" value="Arvuta">
</form>
<?php
if (isset($tulemus)) {
    echo $tulemus;
}
?>
</body>
</html>
