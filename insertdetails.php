<?php

include_once "dbcon.php";

$uname = $_POST["Name"];
$uemail = $_POST["Email"];
$umsg = $_POST["Message"];

$con = mysqli_connect($server,$uname,$pw,$dbname);
$sql = "INSERT INTO contact_details(Name,Email,Message) VALUES ('$uname','$uemail','$umsg')";

$query = mysqli_query($con,$sql);

if(mysqli_query($con,$sql))
{
    if($query)
    {
        echo'<script language ="javascript">';
        echo 'alert("Inserted")';
        echo '</script>';
        header("refresh:1;url=file:///C:/xampp/htdocs/sportsfit%20-%20Copy/index.html");
    }
}

else{
     mysqli_error($con);
}

mysqli_close($con);
?>
