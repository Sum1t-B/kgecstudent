<?php
$id=$_GET['id'];
include('../php/connection.php');
$query="DELETE FROM `admin` WHERE id='$id'";
$res=mysqli_query($conn,$query);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Notice Deleted!');
    window.location='supersu.php';
    </script>");
?>