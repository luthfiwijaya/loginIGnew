<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>SAVE</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>



<?php

$host="localhost";
$user="root";
$password="";
$email=$_POST['email'];
$fullname=$_POST['fullname'];
$username=$_POST['username'];
$passwd=$_POST['passwd'];

?>

<div id="container">
	<div class="save">
		<div class="email">
			Mobile Number or Email :  <?php echo "$email"; ?><br>
		</div>

		<div class="fullname">
			Full Name :  <?php echo "$fullname"; ?><br>
		</div>

		<div class="username">
			Username :  <?php echo "$username"; ?><br>
		</div>

		<div class="passwd">
			Password :  <?php echo "$passwd"; ?><br>
		</div>
	</div>
</div>

<?php
$conn=mysqli_connect($host,$user,$password);
mysqli_select_db($conn,'dbIG');
$sql="insert into tuser values ('$email','$fullname','$username','$passwd')";
$hasil=mysqli_query($conn,$sql);
?>



</body>
</html>