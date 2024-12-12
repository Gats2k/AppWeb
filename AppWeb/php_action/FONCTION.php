<?php

function rechercher_par_login1($login){
    global $var_connection;
    $requeteE=$var_connection->prepare("select * from employeur where login =?");
    $requeteE->execute(array($login));
    return $requeteE->rowCount();
}

function rechercher_par_login2($login){
    global $var_connection;
    $requeteD=$var_connection->prepare("select * from demandeur where login =?");
    $requeteD->execute(array($login));
    return $requeteD->rowCount();
}

function rechercher_par_email1($email){
    global $var_connection;
    $requeteD=$var_connection->prepare("select * from demandeur where email =?");
    $requeteD->execute(array($email));
    return $requeteD->rowCount();
}
function rechercher_par_email2($email){
    global $var_connection;
    $requeteE=$var_connection->prepare("select * from employeur where email =?");
    $requeteE->execute(array($email));
    return $requeteE->rowCount();
}

function rechercher_user_par_email1($email){
    global $var_connection;

    $requeteE=$var_connection->prepare("select * from employeur where email =?");

    $requeteE->execute(array($email));

    $userE=$requeteE->fetch();

    if($userE)
        return $userE;
    else
        return null;
}
function rechercher_user_par_email2($email){
    global $var_connection;

    $requeteD=$var_connection->prepare("select * from demandeur where email =?");

    $requeteD->execute(array($email));

    $userD=$requeteD->fetch();

    if($userD)
        return $userD;
    else
        return null;
}
