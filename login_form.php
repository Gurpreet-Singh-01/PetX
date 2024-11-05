<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petx-database";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con){
    die("Could not connect.." . mysqli_connect_error());
}
$select_query = "SELECT * FROM sign_up_table";
$query = mysqli_query($con, $select_query);
$access = mysqli_num_rows($query);

$name = $_POST['login_user'];
$password = $_POST['password_mail'];

while($row = mysqli_fetch_array($query)){
    if($name == $row['Username'] and $password == $row['Password']){
        header("location:home.php");
    }
    else{
        header("location:signup.php");
    }
}

?>