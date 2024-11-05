<?php
include_once("connection.php");
$Name = $_POST["Name"];
$Pet = $_POST["pet_type"];
$Date = $_POST["date"];
$Contact = $_POST["Number"];
$Pet_Gender = $_POST["pet_gender"];
$Slot= $_POST["slots"];

echo "<br>";
echo $Name;

echo "<br>";
echo $Pet;

echo "<br>";
echo $Date;

echo "<br>";
echo $Contact;

echo "<br>";
echo $Pet_Gender;

echo "<br>";
echo $Slot;

$query = "insert into appointment(Name, Pet, Date, Contact, Gender, Slot) values('$Name',' $Pet','$Date','$Contact','$Pet_Gender','$Slot')";
mysqli_query($con, $query);
?>