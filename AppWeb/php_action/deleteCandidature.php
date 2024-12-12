<?php
require('db_connexion.php');

$id=$_GET['ID_DEMANDEUR'];
$var_connection->query("DELETE FROM DEMANDEUR WHERE ID_DEMANDEUR=" .$id);
header('Location:../pages/gestion_de_candidature.php');

?>