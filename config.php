<?php
/* Database credentials. (user 'sai' password '2935') */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'sai');
define('DB_PASSWORD', '2935');
define('DB_NAME', 'login');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>