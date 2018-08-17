<?php
session_start();
if(isset($_SESSION['var']))
{
    $dept=$_SESSION['var'];   
}
else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Session Expired!');
    window.location='../admin/index.php';
    </script>");
}
$id=$_GET['id'];
include('connection.php');
$query="DELETE FROM `notice` WHERE id='$id'";
$res=mysqli_query($conn,$query);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Notice Deleted!');
    window.location='../admin/show_notification.php';
    </script>");
?>