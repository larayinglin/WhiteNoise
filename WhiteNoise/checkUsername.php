<?php

include 'connect.php';

$unErr = $emailErr = $pwErr = $pwIncon = "";
$username = $email = $password = $pwRepeat = "";

    $username = $_GET['username'];
    $data['username'] = htmlspecialchars(stripcslashes(trim($username)));
    // echo $data['username'];

    $sql = "select username from users where username='%s'";
    $formatted = sprintf($sql, $data['username']);
    $result = mysqli_query($handle, $formatted);
    $res = mysqli_fetch_assoc($result);
    // echo $res['username'];

    if($res == null){
        // echo "User does not exist";
        echo "The username is valid to use!";
    }
    else{
        echo "The username is used. Please change one!";
    }  
?>