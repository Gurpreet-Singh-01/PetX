<?php
include_once("connection.php");
$Name=$_POST["Feedname"];
$Number=$_POST["Feednum"];
$Message=$_POST["Feedback"];

echo $Name;
echo "<br>";
echo $Number;
echo "<br>";
echo $Message;
echo "<br>";

$query = "insert into feedback(Name, Contact, Message) values('$Name',' $Number','$Message')";
mysqli_query($con, $query);
?>