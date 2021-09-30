<?php
/*
================================
Ülesanne 0401

Tee massiiv kuhu pane järgmised andmed:
Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. aare.edu.ee)
Pilt salvesta ülesande kataloogi.
Tee HTML lehekülg kuhu kuva nmassiivist välja eelpool kirjeldatud andmed.
Nimi välja kuvamiseks kasuta <b> tagi.
Aadress välja kuvamiseks kasuta <i> tagi.
Pilt välja kuvamiseks kasuta <img src=> tagi.
Kodulehe lingi välja kuvamiseks kasuta <a href=> tagi.

================================
*/
$data['name'] = "Kristjan Kivikangur";
$data['address'] = "Sõpruse pst. 182";
$data['pictureUrl'] = "https://kristjankivikangur20.thkit.ee/pildid/portree.jpg";
$data['homepageUrl'] = "https://kristjankivikangur20.thkit.ee/";
?>
Nimi: <b><?= $data['name'] ?></b><br>
Aadress: <i><?= $data['address'] ?></i><br>
Pilt: <img src="<?= $data['pictureUrl'] ?>" alt="Portree"><br>
Koduleht: <a href="<?= $data['homepageUrl'] ?>">kristjankivikangur20.thkit.ee</a><br>