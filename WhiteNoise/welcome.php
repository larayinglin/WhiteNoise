<?php
session_start();
?>

<?php 
    if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]==TRUE){
        echo $_SESSION["username"];
    } else{
        echo "Guest";
    }

?>