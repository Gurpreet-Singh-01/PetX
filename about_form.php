<?php
include_once("connection.php");
$Name = $_POST["name"];
$Contact_num = $_POST["contact_number"];
$Email = $_POST["email"];
$Pincode = $_POST["Pincode"];
$Address = $_POST["Address"];
$Franchise = $_POST["Franchise"];
$Petx = $_POST["Petx"];

echo $Name;
echo "<br>";
echo $Contact_num;
echo "<br>";
echo $Email;
echo "<br>";
echo $Pincode;
echo "<br>";
echo $Address;
echo "<br>";
echo $Franchise;
echo "<br>";
echo $Petx;
echo "<br>";

$query = "insert into franchise(Name, Contact_no, Email, Pincode, Address, Franchise, Heard_PetX) values('$Name',' $Contact_num','$Email','$Pincode','$Address','$Franchise','$Petx')";
mysqli_query($con, $query);
?>
