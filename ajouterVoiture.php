<?php
include 'voiture.php';

$v1 = new Voiture();

$v1->matricule = $_POST['matricule'];
$v1->couleur = $_POST['couleur'];

$v1->afficherMesInfo();


?>