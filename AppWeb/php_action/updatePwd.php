<?php
    require_once('identifier.php');
    require_once('db_connexion.php');

if ($_SESSION['user']['ROLE'] == 'demandeur'){
    $idD=$_SESSION['user']['ID_DEMANDEUR'];
}else{
   $idE=$_SESSION['user']['ID_EMPLOYEUR'];
}

$oldpwd=isset($_POST['oldpwd'])?$_POST['oldpwd']:"";
$newpwd=isset($_POST['newpwd'])?$_POST['newpwd']:"";

if ($_SESSION['user']['ROLE'] == 'demandeur'){
    $requete="select * from demandeur where ID_DEMANDEUR=$idD and pwd='$oldpwd' ";
}else{
    $requete="select * from employeur where ID_EMPLOYEUR=$idE and pwd='$oldpwd' ";
}

$resultat=$var_connection->prepare($requete);

$resultat->execute();

$msg="";
$interval=3;
$url="../pages/login.php";

if($resultat->fetch()) {
    if ($_SESSION['user']['ROLE'] == 'demandeur'){
     $requete = "update demandeur set pwd=(?) where ID_DEMANDEUR=?";
     $params = array($newpwd, $idD);
    }else{
    $requete = "update employeur set pwd=(?) where ID_EMPLOYEUR=?";
    $params = array($newpwd, $idE);
}
    $resultat = $var_connection->prepare($requete);
    $resultat->execute($params);

    $msg="<div class='alert alert-success' >
                <strong>Félicitation!</strong> Votre mot de passe est modifié avec succés
           </div>";

}else{
    $msg="<div class='alert alert-danger' >
            <strong>Erreur!</strong> L'ancien mot de passe est incorrect !!!!
           </div>";
    $url=$_SERVER['HTTP_REFERER'];
}

?>
<!DOCTYPE HTML>
<html>
    <head>
		<meta charset="utf-8">
		<title>Mise à jour du mot de passe</title>
		<meta name="description" content="Base form control examples">
		
	
		<link href="../assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css">
		<link href="../assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css">

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="../assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css">
		<link href="../assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css">
		<link href="../assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css">
		<link href="../assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css">

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="../assets/media/logos/favicon.ico">
	    
    </head>
    <body>
        <div class="alert alert-secondary" role="alert">
			<div class="alert-icon"></div>
			<div class="alert-text">
				<?php
                    echo  $msg;
                    header("refresh:$interval;url=$url");
                ?>
			</div>
		</div>
    </body>
</html>
