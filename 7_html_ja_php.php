<!doctype html>
<html lang="et">
<head>
    <title>

    </title>
</head>
<body>
Kell on täpselt: <?php echo date("H:i:s"); ?>
<?php

$animals = array("rebane", "hunt", "koer", "kass", 'hiir',
    'põder', 'rott', 'hirv', 'jänes', 'siil', 'kährik', 'karu', 'nahkhiir');

echo "<form method=post action=" . $_SERVER['SCRIPT_NAME'] . ">\n";

for ($i = 1; $i < sizeof($animals); $i++) {
    echo "$i) <input type=text name='cell[$i]' value=\"" . $_POST['cell'][$i] . "\">";
    if (in_array(strtolower(trim($_POST['cell'][$i])), $animals) == true) {
        echo "Siin kastis on ju loom";
    }
    echo "<br>\n";
}

echo "<input type=submit name=nupp value=Sisesta>";

echo "</form>";

print_r($_POST);

?>
</body>
</html>