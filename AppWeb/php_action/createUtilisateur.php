<?php 
    require('../php_action/db_connexion.php');
    require_once('FONCTION.php');

	if ($_POST) 
	{
        
        if ($_POST['role']=='employeur'){
            if (rechercher_par_login1($_POST['login']) == 0 
                    & rechercher_par_email1($_POST['email']) == 0)
                {
                $ma_requete = $var_connection->prepare('INSERT INTO employeur (NOM_ENTREPRISE, TELEPHONE, EMAIL, ROLE, pwd, login) 
                    VALUES (:nom_entreprise, :telephone, :email, :role, :pwd, :login)');
                $ma_requete->execute( array(
                    'nom_entreprise'=>$_POST['nom'],
                    'telephone'=>$_POST['telephone'],
                    'email'=>$_POST['email'],
                    'role'=>$_POST['role'],
                    'pwd'=>$_POST['pwd2'],
                    'login'=>$_POST['login']
                ));
                } else{
                    if (rechercher_par_login1($_POST['login']) > 0)
                    {
                        echo 'Désolé le login existe déjà';               
                    }
                    if (rechercher_par_email1($_POST['email']) > 0)
                    {
                        echo 'Désolé cet email existe déjà';
                
                    }
                }
        }else{
            if (rechercher_par_login2($_POST['login']) == 0 
                    & rechercher_par_email2($_POST['email']) == 0)
                {
            $ma_requete = $var_connection->prepare('INSERT INTO demandeur(NOM_DEMANDEUR, TELEPHONE, EMAIL, ROLE, pwd, login) 
                VALUES (:nom_demandeur, :telephone, :email, :role, :pwd, :login)');
            $ma_requete->execute( array(
                'nom_demandeur'=>$_POST['nom'],
                'telephone'=>$_POST['telephone'],
                'email'=>$_POST['email'],
                'role'=>$_POST['role'],
                'pwd'=>$_POST['pwd2'],
                'login'=>$_POST['login']
                ));

            } else
                {
                    if (rechercher_par_login2($_POST['login']) > 0)
                    {
                    echo 'Désolé le login existe déjà';
                
                    }
                
                    }
                    if (rechercher_par_email2($_POST['email']) > 0)
                    {
                        echo 'Désolé cet email existe déjà';
                    
                }
        }
        
            //die('vous avez réussit !!!');
            header('Location:../pages/login.php');
    }else{
		echo "Veuillez renseigner tous vos champs";
	}
?>
