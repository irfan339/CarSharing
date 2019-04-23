<?php
session_start();
if(isset($_SESSION['user_id']) && $_GET['logout'] == 1){
    session_destroy();
    setcookie("rememberme", "", time()-3600);
    echo "hi ".$_GET['logout'];
    header('Location: index.php'); 
}
//echo "hi ".$_GET['logout'];
//echo $_SESSION['user_id'];
?>