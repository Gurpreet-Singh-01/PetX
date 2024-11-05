<?php


include_once("connection.php");
$Name = $_POST["username"];
$Contact = $_POST["contact_number"];
$Password = $_POST["password"];

// echo $Name;
// echo "<br>";
// echo $Contact;
// echo "<br>";
// echo $Password;
// echo "<br>";

$query = "insert into sign_up_table(Username, Contact, Password) values('$Name',' $Contact','$Password')";
mysqli_query($con, $query);

header("location:login.php");
?>