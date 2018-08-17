<?php
include('connection.php');
$email=$_POST['email'];
$pass=$_POST['pass'];
$query="SELECT * FROM `admin` WHERE email='$email' AND pass='$pass'";
$res=mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($res);
if ($rowcount==0)
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Error please give write email and password!');
    window.location='../admin/index.php';
    </script>");
}
else
{
	session_start();
	$row=mysqli_fetch_array($res);
	$dept=$row['dept'];
	$dept1=$row['dept1'];
	$_SESSION["var"]=$dept;
	$_SESSION["var1"]=$dept1;
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Success!');
    window.location='../admin/create_notification.php';
    </script>");
}

?>