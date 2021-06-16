<?php 
header('Access-Control-Allow-Origin: *');
$servername = "127.0.0.1"; 
$username = "root"; 
$password = ""; 
$dbname = "test"; 

$user = $_GET['username'];
$pin = $_GET['pin'];
$msg=0; 
$arr = array(); 
// Create connection 
$conn = mysqli_connect( $servername, $username, $password, $dbname ); 

// Check connection 
if ( !$conn ) { 
die("Connection failed: " . mysqli_connect_error()); 
}
else{
	$sql = mysqli_query($conn, "SELECT * from signup WHERE email = '$user'");
if (mysqli_num_rows($sql) > 0) {
    $sql=mysqli_query($conn, "SELECT * from signup where email='$user' AND pin='$pin'");
    if(mysqli_num_rows($sql)>0){
        $msg=0;
        //echo "you r allowed to go";
	$sql = "INSERT INTO login (pin, username) VALUES ('$pin','$user')";
	if (mysqli_query($conn, $sql)) { 
		array_push($arr,array("Msg" =>"Successfully logged in!!!","MsgCode" =>$msg));
		echo  json_encode($arr); 
	} else { 
		echo "Error: " . $sql . "<br>" . mysqli_error($conn); 
		}
     }
    else{
        $msg=1;
      // echo "please enter the valid password!!";
        array_push($arr,array("Msg" =>"Please enter the valid password!!","MsgCode" =>$msg));
	echo  json_encode($arr); 
        }
}
else{
       // echo "first you have to register";
        $msg = 2;
	array_push($arr,array("Msg" =>"First you have to sign in!!","MsgCode" =>$msg));
		echo  json_encode($arr); 
       } 

// Close connection 
mysqli_close($conn); 
}
?> 
 
