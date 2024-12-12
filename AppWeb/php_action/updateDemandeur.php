<?php
    require_once('identifier.php');
    require_once('db_connexion.php');

    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    $login = isset($_POST['login']) ? $_POST['login'] : "";
    $email = isset($_POST['email']) ? ($_POST['email']) : "";

    $requete = "UPDATE demandeur SET login = ?, email = ? WHERE ID_DEMANDEUR = ?";

    $resultat = $var_connection->prepare($requete);
    $resultat->execute([$login, $email, $id]);

    echo "Les informations de l'utilisateur ont été mises à jour avec succès.";

    header('location:../pages/login.php');
?>