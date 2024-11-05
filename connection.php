<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "poshaak";


$con = mysqli_connect($server, $username, $password, $dbname);
if ($con) {
    // echo "Success<br>";
} 
else {
    mysqli_connect_error($con);
}
?>