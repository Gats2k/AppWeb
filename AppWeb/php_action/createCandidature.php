<?php 
    require('../php_action/db_connexion.php');

	if ($_POST) 
	{

		$ma_requete = $var_connection->prepare('INSERT INTO DEMANDEUR (NOM_DEMANDEUR, DATE_DE_NAISSANCE, EMAIL, TELEPHONE) 
            VALUES (:nom, :date_, :email, :telephone)');
    	$ma_requete->execute( array(
    		'nom'=>$_POST['NOM_DEMANDEUR'],
    		'date_'=>$_POST['DATE_DE_NAISSANCE'],
    		'email'=>$_POST['EMAIL'],
    		'telephone'=>$_POST['TELEPHONE']
    	));

        // die('vous avez réussit !!!');
        header('Location:../pages/gestion_de_candidature.php');
	}
	else{
		echo "Veuillez renseigner tous vos champs";
	}
?>