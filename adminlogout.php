<?php
    session_start();
    session_destroy();
    $_SESSION['Adminusername']=="";
    $_SESSION['url']=="";
    header("Location: index.php");

    

?>