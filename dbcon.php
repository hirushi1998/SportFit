<?php
$server = "localhost";
$uname = "root";
$pw = "";
$dbname = "contact";
$con = mysqli_connect($server,$uname,$pw,$dbname);
if(!$con)
{
    die("Connection error ".mysqli_connect_error());
}
?>



  
