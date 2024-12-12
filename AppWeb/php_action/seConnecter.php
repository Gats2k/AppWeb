<?php
    session_start();
    require_once('db_connexion.php');
    
    $login=isset($_POST['login'])?$_POST['login']:"";
    
    $pwd=isset($_POST['pwd'])?$_POST['pwd']:"";

    $requeteE="select *
                from employeur where login='$login' 
                and pwd='$pwd'";
    $requete="select *
                from demandeur where login='$login' 
                and pwd='$pwd'";
    $resultatE=$var_connection->query($requeteE);
    $resultat=$var_connection->query($requete);

    if($user=$resultat->fetch()){
            $_SESSION['user']=$user;
            header('location:../pages/Dashboard.php');

    }elseif($user=$resultatE->fetch()){
            $_SESSION['user']=$user;
            header('location:../pages/Dashboard.php');

    }else{
        $_SESSION['erreurLogin']="<strong>Erreur!!</strong> Login ou mot de passe incorrecte!!!";
        header('location:../pages/login.php');
    }

?>