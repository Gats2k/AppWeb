<?php
//Connexion a la base de donnee

    try {
        $var_connection=new PDO('mysql: host=localhost; dbname=Emploi','root','');
        //die('reussite');
     } catch (Exception $e) {
        die('Connexion impossible:'.$e->getMessage());
     }
     
?>