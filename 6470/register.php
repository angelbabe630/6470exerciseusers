<?php include ('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body bgcolor="#FFFF00">
<br>
&nbsp;<center>
  <h2>6470exerciseusers</h2></center><br>

<hr>
<h3 align="center"> <a href="http://localhost/6470/homepage.php">Home</a>| <a href="http://localhost/6470/register.php">Register</a> | <a href="http://localhost/6470/login.php">login</a></h3>
<hr>
<h4><marquee><img src="app.jpg" width="150"px height"140"px></marquee></h4>

<hr>
<body>
<center>
	<h2>REGISTER</h2>
	<form action="connect.php" method="post">
    <h4 class="h4">
    <?php 
	if (isset($_GET['msg']))
	{
		echo $_GET['msg']; 
	}
	?>
    </h4>
    <table cellspacing="10">
    <tr>
    <td>
    Username: 
	</td>
    <td>
    <input type="text" name="username" value="<?php echo $username; ?>"/>
    </td>
    </tr>
    <tr>
    <td>
    Password: 
    </td>
    <td>
    <input type="password" name="password"/>
    </td>
    </tr>
    <tr>
    <td>
    Phone:
    </td>
    <td>
    <input type="text" name="phone"/>
    </td>
    </tr>
    </table>
    <input type="submit" name="register" value="Register"/>
    <a href="index.php"><input type="button" value="Back"/></a>
    </form>
</center>
<hr>
&nbsp;&nbsp;
<div align="center">Copyright&copy 2019 AllRight Reserved
</div>
<hr>
</body>
</html>