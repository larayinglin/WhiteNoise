<?php
session_start();
?>

<?php
include 'connect.php';

// define variables and set the initial values
$unErr = $emailErr = $pwErr = $pwIncon = "";
$username = $email = $password = $pwRepeat = "";
$msg = "Opps! Something Wrong.";

$action = $_GET['action'];  // get login or register
if (!$action){
    echo "<script>window.location.href='login.html'</script>";
}
if ($action == 'signup') {

    $username = $_POST["username"];
    // check if username only contains letters, numbers and underline
    if (!preg_match("/^\w+$/", $username)){
      $unErr = "Only letters, numbers, and underlines allowed";
      //  alert($unErr);
    }

    // see whether $username has already been registered.
    // if is, return "Sorry, the username already exists."


    $email = $_POST['email'];
    // check if email address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format."; 
        // alert($emailErr);
    }

    // see whether $email has already been registered.
    // if is, return "Sorry, the email has been registered."

    $password = $_POST['password'];
    // check if password is 8-16 characters
    if (!preg_match("/^[a-zA-Z\d_]{8,}$/", $password)){
        $pwErr = "Your password should be 8 to 16 charactors";
        // alert($pwErr);
    }

    $pwRepeat = $_POST['pw-repeat'];
    // check if repeated password is consistent
    if ($pwRepeat != $password){
        $pwIncon = "password repeated is not consistent";
        // alert($pwIncon);
    }

    // echo $unErr .'<br>' . $emailErr .'<br>' . $pwErr;
    $Err = "Check your" . $unErr . ' ' . $emailErr . ' ' . $pwErr . ' ' . $pwIncon;
    echo "<script> alert('.$Err.');</script>";
    echo "<script>window.location.href='signup.html'</script>";
    
    $data['username'] = htmlspecialchars(stripcslashes(trim($username)));
    $data['email'] = htmlspecialchars(stripcslashes(trim($email)));
    $data['password'] = md5($password);

    if(empty($unErr) && empty($emailErr) && empty($pwErr) && empty($pwIncon)){
        $sql = "insert into users (username, email, password) values('%s', '%s', '%s')";
        $formatted = sprintf($sql, $data['username'], $data['email'], $data['password']);
        $result = mysqli_query($handle, $formatted);

        $msg = "You have successfully signed up!";
        echo "<script>window.location.href='jukebox-home.html'</script>";
        $_SESSION["loggedin"] = TRUE;
        $_SESSION["username"] = $username;
    }
} 
else if ($action == 'login') {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $data['username'] = htmlspecialchars(stripcslashes(trim($username)));
    $data['password'] = md5($password);
    // echo $data['username'];

    $sql = "select username, password from users where username='%s'";
    $formatted = sprintf($sql, $data['username']);
    $result = mysqli_query($handle, $formatted);
    $res = mysqli_fetch_assoc($result);
    // echo $res['username'];
    

    if($res == null){
        // echo "User does not exist";
        echo "<script> alert('User does not exist');</script>";
        echo "<script>window.location.href='login.html'</script>";
    }
    // compare the processed passwords
    else if ($data['password'] == $res['password']) {
        // check the username and password, return to the homepage is nothing wrong.
        // echo "You have successfully loged in!";
        echo "<script> alert('You have successfully loged in!');</script>";
        echo "<script>window.location.href='jukebox-home.html'</script>";
        $_SESSION["loggedin"] = TRUE;
        $_SESSION["username"] = $username;
    }
    else{
        // echo "<script>alert('Check your username and password')</script>";
        echo "<script> alert('Check your username or password');</script>";
        echo "<script>window.location.href='login.html'</script>";
        $_SESSION["loggedin"] = FALSE;
    }    
}

// alert($msg);

function alert($msg) {
    echo "<script> alert('$msg');</script>";
}








        