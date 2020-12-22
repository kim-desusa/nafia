<?php
$con=mysqli_connect("localhost","root","","dbcontact");

$name=$_POST['first_name'];
$sub=$_POST['subject'];
$des=$_POST['description'];

$query="INSERT INTO tblcontact VALUES ('$name', '$sub', '$des')";

if(mysqli_query($con,$query))
	echo "Successfull";
else
	echo "Failed";

?>