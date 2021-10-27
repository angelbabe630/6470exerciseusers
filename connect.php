<?php
session_start();
$db=mysqli_connect('localhost', 'root', '', '6470');

if($db===false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username="";
$password="";
$phone="";

if(isset($_POST['register']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	
	$user_check = "SELECT * FROM 6470exerciseusers WHERE username='$username' LIMIT 1";
  	$result = mysqli_query($db, $user_check);
  	$user = mysqli_fetch_assoc($result);
  
	if($username=='')
	{
		$msg="*Username Required";
		header("location: register.php?msg=".$msg);
	}
	
	elseif($password=='')
	{
		$msg="*Password Required";
		header("location: register.php?msg=".$msg);
	}
	
	elseif($phone=='')
	{
		$msg="*Phone Required";
		header("location: register.php?msg=".$msg);
	}
	
	elseif($user)
	{
		if ($user['username'] === $username) 
		{
      	$msg="*User already Exist";
		header("location: register.php?msg=".$msg);
		}
    }
	
	else
	{
	mysqli_query($db, "INSERT INTO 6470exerciseusers (username, password, phone)
	VALUES ('$username', '$password', '$phone')");
	$msg="User: " . $username . " , Phone: " . $phone . " Registerd Successfully!";
	header("location: index.php?msg=".$msg);
	}
}

if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query = "SELECT * FROM 6470exerciseusers WHERE username='$username' AND password='$password' LIMIT 1";
  	$results = mysqli_query($db, $query);
	if($username=='')
	{
		$msg="*Username Required";
		header("location: login.php?msg=".$msg);
	}
	
	elseif($password=='')
	{
		$msg="*Password Required";
		header("location: login.php?msg=".$msg);
	}
	elseif (mysqli_num_rows($results) == 1)
	{
		session_start();
		$_SESSION["logged"] = true;
        $_SESSION["username"] = $username; 
		header("location:index.php");		
	}
	else
	{
		$msg="*Invalid Username or Password";
		header("location: login.php?msg=".$msg);
	}	
}

if(isset($_POST['logout']))
{
	session_destroy();
	header("location:index.php");
}
?>