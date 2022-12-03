<?php
session_start();
if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	if (!empty($name) && !empty($password) && !empty($email) && !empty($contact))
	{
	    $con=new mysqli('localhost','root','','gamesphere');
	    $q="insert into users(name,contactno,email,password) values('{$name}','{$contact}','{$email}','{$password}')";
	    $result=$con->query($q);
	    if($result)
	    {
		    // echo "User Registered Successfully!!";
		    include('messages/registersuccess.html');
	    }
	    else
	    {
		    // echo "Problem in User Registration!!!";
		    include('messages/registerproblem.html');
	    }
	}
	else
	{
		// echo "<h2 style='color: red'>All fields are required!!!</h2>";
		include('messages/allfieldregistererror.html');
	}
	// echo "<p><a href='index.php'>Login</a></p>";
}	
	
	
?>