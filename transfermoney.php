<?php 
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alpha Bank Service</title>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/flexslider.css" rel="stylesheet" type="text/css">
	<link href="icons/css/ionicons.min.css" rel="stylesheet" type="text/css">
	<link href="icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
   
	<!--revolution slider setting css-->
	<link href="rs-plugin/css/settings.css" rel="stylesheet">
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<title>Customers</title>
	<link rel = "stylesheet" type = "text/css" href = "buttons.css">
<style>
	a{
		color:black;
	}
	
		table {
		font-family: sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: serif;
		font-size:40px;
		}
		
		td, th {
		border: 2px solid white;
		text-align: center;
		font-size:20px;
		color:black;
		padding: 8px;
		}
		
	</style>
</head>
<body style="background-image:url(1.jpg);background-repeat: no-repeat;background-size: cover;">
<nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <div clas="c">
                    <a class="navbar-brand alo" href="index.php" >Alpha Bank Service</a></div>
        </div>
<div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to"><br><br>
                    <li class="active"><a href="index.php">Home</a></li>
                       
                        <li><a href="customer.php">Customers</a></li>
                        <li><a href="Transfermoney.php">Transfer Money</a></li>
                        <li><a href="transactionhistory.php">Transaction History</a></li>
                            
                        
                        <li><a href="index.php#contact">Contact</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
    <h1 style="color:black;text-align: center;font-family: cursive;" >Transfer Money</h1><br><br>
    <h2 style="color:wheat;text-align: center;font-family: cursive;" >To transfer money from one user to another , click on the user </h2>
    <table class="flat-table flat-table-1" align=center style="font-family: serif;color:darkblue;font-weight: bold;">
	<thead>
		<th>CUSTOMER ID</th>
		<th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["C_ID"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["Email"]; ?></td>
		<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
	<br><br>
	
    
</body>
</html>