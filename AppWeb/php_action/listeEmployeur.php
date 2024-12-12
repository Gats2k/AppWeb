<?php
    require_once('../php_action/db_connexion.php');
    $reponse = $var_connection -> query("SELECT * FROM employeur");
    // $reponse = $var_connection->query("SELECT * FROM employeur  WHERE ROLE='admin' ORDER BY ID_EMPLOYEUR");
?>
