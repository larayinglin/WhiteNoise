<?php
// session_start();

// $cookie_name = "user";
// $cookie_value = "John Doe";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


// assign database
define('host', '127.0.0.1');   // localhost，sefault as 127.0.0.1
define('user', 'root');           // user, default as root
define('passwd', '');           // password of database, default as null
define('dbName', 'jukebox');  // your database
$handle = mysqli_connect(host, user, passwd, dbName);
if (!$handle) {
    die('fail to connect to the database' . mysqli_connect_error());
}

// define variables and set the initial values
$unErr = $emailErr = $pwErr = $pwIncon = "";
$username = $email = $password = $pwRepeat = "";
$msg = "Opps! Something Wrong.";



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
        echo "<script>window.location.href='http://people.virginia.edu/~all4ax/jukebox-home.html'</script>";
    }
    else{
        // echo "<script>alert('Check your username and password')</script>";
        echo "<script> alert('Check your username or password');</script>";
        echo "<script>window.location.href='login.html'</script>";
    }





        