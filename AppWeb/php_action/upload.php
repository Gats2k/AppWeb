<?php
require_once('identifier.php');
    require_once('db_connexion.php');

    $id = $_SESSION['user']['ID_DEMANDEUR'];
// Vérifiez si un fichier a été téléchargé
if (isset($_FILES['cv_file'])) {
    $file_type = $_FILES['cv_file']['type'];
    $file_size = $_FILES['cv_file']['size'];
    $file_error = $_FILES['cv_file']['error'];

    // Vérifiez si le fichier est un PDF
    $allowed_extensions = array('pdf');
    $file_extension = strtolower(pathinfo($file_type, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_extensions)) {
        echo "Erreur : Veuillez télécharger un fichier PDF.";
    } elseif ($file_error !== 0) {
        echo "Erreur lors du téléchargement du fichier.";
    } else {
        // Déplacez le fichier téléchargé vers un emplacement sécurisé
        $upload_directory = 'CV/';
        $new_file_name = uniqid('cv_', true) . '.' . $file_extension;
        $destination = $upload_directory . $new_file_name;

        if (move_uploaded_file($file_tmp, $destination)) {
            
            $requete = "UPDATE demandeur SET nom_fichier = ? WHERE ID_DEMANDEUR = ?";
            $resultat = $var_connection->prepare($requete);
            $resultat->execute([$new_file_name, $id]);
            echo "Le CV a été téléchargé avec succès. Nom du fichier : **$new_file_name**";
        } else {
            echo "Erreur lors de la sauvegarde du fichier.";
        }
    }
} else {
    echo "Aucun fichier n'a été téléchargé.";
}
?>