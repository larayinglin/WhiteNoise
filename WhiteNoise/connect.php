<?php
// assign database
define('host', '127.0.0.1');   // localhost，sefault as 127.0.0.1
define('user', 'root');           // user, default as root
define('passwd', '');           // password of database, default as null
define('dbName', 'jukebox');  // your database
$handle = mysqli_connect(host, user, passwd, dbName);
if (!$handle) {
    die('fail to connect to the database' . mysqli_connect_error());
}
?>