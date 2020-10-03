<?php
$host = "localhost";
$user = "root";
$password = "1234";
$db = "easr68";

mysql_connect($host, $user, $password);
mysql_select_db($db);

if(isset($_POST['id_admin'])){
	$idnum=$_POST['id_admin'];
	$pass=$_POST['pass_admin'];

	$sql="select * from admin where id_admin='".$idnum."' and password='".$pass."'";

	$result=mysql_query($sql);
	if(mysql_num_rows($result)==1){
		echo "successfully login";
		exit();
	}
	else{
		echo "unsuccessfully login";
		exit();
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>EASR68</title>
	<link rel="stylesheet" href="style.css">
</head>
	<div class="Main">
		<div class="form">
			<div class="logo">
				<center><img src="Logo(Landscape).png" height="auto" width="180px" alt=""></center>
			</div>
			<div class="btnbox">
				<div id="btn"></div>
				<button type="button" class="btns" onClick="employee()"><b>ADMIN</b></button>
				<button type="button" class="btns" onClick="admin()"><b>EMPLOYEE</b></button>
			</div>
			<form id="admin" class="inputgrp" method="post" action="#">
				<input type="number" name="id_admin" class="infield" placeholder="Admin Number" required>
				<input type="Password" name="pass_admin" class="infield" placeholder="Password" required>
				<button type="submit" class="btnsubmit"><b>LOGIN</b></button>
			</form>
			<form id="employee" class="inputgrp" method="post" action="#">
				<input type="number" name="id_employee" class="infield" placeholder="Employee Number" required>
				<input type="Password" name="pass_employee" class="infield" placeholder="Password" required>
				<button type="submit" class="btnsubmit"><b>LOGIN</b></button>
			</form>
		</div>
		<script>
			var x = document.getElementById("admin");
			var y = document.getElementById("employee");
			var z = document.getElementById("btn");
			
			function admin(){
				x.style.left = "-400px";
				y.style.left = "50px";
				z.style.left = "110px";
			}
			function employee(){
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0";
			}
		</script>
	</div>
<body>
</body>
</html>
