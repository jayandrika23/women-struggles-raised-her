<?php 
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 

$name = $_GET['name'];
$email = $_GET['email'];
$phno = $_GET['phno'];
$message = $_GET['message'];
echo $name;
echo $email;
echo $phno;
echo $message;
// Create connection 
$conn = mysqli_connect( $servername, $username, $password, $dbname ); 

// Check connection 
if ( !$conn ) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 

// SQL query to insert data into table 
//$sql = "INSERT INTO complaint (pin, username) VALUES ('"+$pin+"','"+$user+"')"; 
$sql = "INSERT INTO complaint(name,email,phno,message) VALUES ('$name','$email','$phno','$message')";
if (mysqli_query($conn, $sql)) { 
	echo "New record created successfully"; 
} else { 
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
} 

// Close coneection 
mysqli_close($conn); 
?> 