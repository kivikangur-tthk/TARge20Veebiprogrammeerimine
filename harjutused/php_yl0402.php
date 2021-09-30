<?php
/*
================================
Ülesanne 0402

Tee tsükliga 20 checkboxi. Pane neile kõigile oma nimi stiilis box[1], box[2], jne.
Tee tsükliga 20 teksti lahtrit. Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.
Tee tsükliga 20 radio buttonit. Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.


================================
 */
?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veebivorm php-ga</title>
</head>
<body>
<form method="post">
    <?php for ($i = 1; $i <= 20; $i++) { ?>
        <label for="chk<?= $i ?>">Valiku ruut <?= $i ?></label>
        <input id="chk<?= $i ?>" type="checkbox" name="box[<?= $i ?>]" value="<?= $i * $i ?>">
        <label for="txt<?= $i ?>">Teksti kast <?= $i ?></label>
        <input id="txt<?= $i ?>" type="text" name="cell[<?= $i ?>]">
        <label for="radio<?= $i ?>">Raadio nupp <?= $i ?></label>
        <input id="radio<?= $i ?>" type="radio" name="radio" value="<?= 20 - $i ?>">
        <br>
    <?php } ?>
    <input type="submit" value="Saada">
</form>
<?php print_r($_POST); ?>
</body>
</html>










