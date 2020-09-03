<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define("DB_SERVER", "127.0.0.1");
define("DB_USER", "root");
define("DB_PASSWORD", "jd@522000");
define("DB_DATABASE", "loginsystem");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>