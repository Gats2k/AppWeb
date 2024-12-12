 <?php
    session_start();
    
    if(!isset($_SESSION['user'])) {
        header('location:../jobfinderportal-master/index.html');
        exit();
    }
?>