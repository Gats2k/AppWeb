<?php

	require('db_connexion.php');

    $id=$_GET['ID_EMPLOI'];

	if ($_POST) 
	{
        $nom = $_POST['NOM_EMPLOI'];
        $competences = $_POST['COMPETENCES'];
        $remuneration = $_POST['REMUNERATION'];
        $secteur = $_POST['SECTEUR_ACTIVITE'];

        $var_connection->query("UPDATE OFFRE_EMPLOI 
                                SET NOM_EMPLOI ='$nom', COMPETENCES='$competences',
                                    REMUNERATION='$remuneration',SECTEUR_ACTIVITE='$secteur'
                                WHERE ID_EMPLOI=" .$id);

        //die('vous avez réussit !!!');
        header('Location:../pages/publication.php');
	}
	else{
		echo " la modification n'a pas aboutie";
	}
?>