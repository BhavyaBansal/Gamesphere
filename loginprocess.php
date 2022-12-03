<?php
ob_start();
session_start();
if (isset($_POST['login']))
 {
 	$email=$_POST['email'];
 	$password=$_POST['password'];
 	if (!empty($email) && !empty($password)) 
 	{
 		$con=new mysqli('localhost','root','','gamesphere');
 		$q="select * from users where email='{$email}' and password='{$password}'";
 		$result=$con->query($q);
 		if ($result->num_rows>0)
 		{
 			$row=$result->fetch_assoc();
 			$_SESSION['email']=$row['email'];
 			header('Location:action.php');
 		}
 		else
 		{
		// echo "<h2 style='color: red'>Invalid Password or Email!!!</h2>";
		include('messages/invalidup.html');
 		}
 	}
 	else
 	{
 		// echo "<h2 style='color: red'>Email and Password are required!!!</h2>";
		include('messages/allfieldloginerror.html');
 	}
 } 
?>