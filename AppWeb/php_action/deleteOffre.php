<?php
require('db_connexion.php');

$id=$_GET['ID_EMPLOI'];
$var_connection->query("DELETE FROM OFFRE_EMPLOI WHERE ID_EMPLOI=" .$id);
header('Location:../pages/publication.php');

?>