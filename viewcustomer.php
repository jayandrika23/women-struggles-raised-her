<?php 

	session_start();
	include 'connection.php';

	if(isset($_GET['Name'])){
		$Name=$_GET['Name'];
	}

	$q="SELECT * From customers WHERE Name='$Name'";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['senderName']=$Name;
?>

<html>
<form method="post" action="connection.php">
ID : <input type="text" name="id"><br><br>

<input type="submit" value="Submit">
</form>
<h1 style="font-family:serif;text-align:center;color: wheat;">Account Details</h1>
		<table style="background-color:#CAE1FF;">
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>
		   
			<?php  
				$row=mysqli_fetch_array($result)
			?>
			
             
			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
           </tr>


</html>          