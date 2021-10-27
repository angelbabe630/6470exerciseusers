<?php 
	include ('connect.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>index</title>
<link rel="stylesheet" href="style.css">
</head>

<body bgcolor="#FFFF00">
<br>
&nbsp;<center>
  <h2>6470exerciseusers</h2></center><br>

<hr>

</div>
<div align="center"><img src="letchi.jpg" width="180"px height"160"px>
</div>

<hr>
<link rel="stylesheet" href="style.css">
<div align="center">
  </head>
  <body>
</div>

<h4 align="center" class="h4">

<?php
	if (isset($_GET['msg']))
	{
		echo $_GET['msg']; 
	}
	?><br>
</h4>

<div align="center">
  <?php 
  	if(!isset($_SESSION['username'])) { 
  	$_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
  ?>
  <a href="register.php">
  <input type="submit" value="Register"/>
  </a>
  <a href="login.php">
  <input type="submit" value="Login"/>
  </a>
  
  <?php } else {?>      
  <br />
</div>
<h4 align="center">Welcome<i> <?php echo $_SESSION['username']; ?></i></h4>   
	<div align="center"><br />
</div>
	<form action="connect.php" method="post">
	  <div align="center">
	    <input type="submit" value="Log Out" name="logout"/>
      </div>
    </form>
 <div align="center">
    <?php } ?>
</div>
<hr>
&nbsp;&nbsp;
<div align="center">Copyright&copy 2019 AllRight Reserved
</div>
<hr>


</body>
</html>