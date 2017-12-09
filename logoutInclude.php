<?php
//session_start();

if (isset($_POST['logoutClick'])){
//echo "fuckckckckkckck";
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();

}
?>
