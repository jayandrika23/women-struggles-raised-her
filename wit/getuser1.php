<?php 
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 

$user = $_GET['username'];
$email = $_GET['email'];
$pin = $_GET['pin'];
$confirmpin = $_GET['confirmpin'];
$phonenumber = $_GET['phonenumber'];
echo $user;
echo $email;
echo $pin;
echo $confirmpin;
echo $phonenumber;
// Create connection 
$conn = mysqli_connect( $servername, $username, $password, $dbname ); 

// Check connection 
if ( !$conn ) { 
	die("Connection failed: " . mysqli_connect_error()); 
} 

// SQL query to insert data into table 
//$sql = "INSERT INTO signup (pin, username) VALUES ('"+$pin+"','"+$user+"')"; 
$sql = "INSERT INTO signup(username,email,pin,confirmpin,phonenumber) VALUES ('$user','$email','$pin','$confirmpin','$phonenumber')";
if (mysqli_query($conn, $sql)) { 
	echo "New record created successfully"; 
} else { 
	echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
} 

// Close coneection 
mysqli_close($conn); 
?> 