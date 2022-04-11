<?php

require_once 'connexion.php';

 $id = $_GET['Id'];
$delete = $bdd->prepare("DELETE  FROM projects WHERE id = $id");
$delete->execute();
$supp = $delete->fetch();

header('location: ../index.php');
?>