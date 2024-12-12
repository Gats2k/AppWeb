<?php
require('db_connexion.php');

$id=$_GET['ID_EMPLOYEUR'];
$var_connection->query("DELETE FROM employeur WHERE ID_EMPLOYEUR=" .$id);
header('Location:../pages/Employeur.php');

?>