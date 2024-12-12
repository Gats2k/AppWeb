<?php
    require_once('../php_action/db_connexion.php');
    $nomOffre=isset($_GET['nomOffre'])?$_GET['nomOffre']:"";
	$reponse = $var_connection->query("SELECT * FROM OFFRE_EMPLOI where NOM_EMPLOI like '%$nomOffre%' ORDER BY ID_EMPLOI");
?>