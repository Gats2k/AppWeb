<?php 
    require('../php_action/db_connexion.php');

	if ($_POST) 
	{

		$ma_requete = $var_connection->prepare('INSERT INTO OFFRE_EMPLOI (NOM_EMPLOI, COMPETENCES, SECTEUR_ACTIVITE, REMUNERATION) 
            VALUES (:nom, :competence, :secteur, :remuneration)');
    	$ma_requete->execute( array(
    		'nom'=>$_POST['NOM_EMPLOI'],
    		'competence'=>$_POST['COMPETENCES'],
    		'secteur'=>$_POST['SECTEUR_ACTIVITE'],
    		'remuneration'=>$_POST['REMUNERATION']
    	));

        // die('vous avez réussit !!!');
        header('Location:../pages/publication.php');
	}
	else{
		echo "Veuillez renseigner tous vos champs";
	}
?>