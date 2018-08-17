<?php
session_start();
if(isset($_SESSION['var']))
{
    $dept=$_SESSION['var'];  
    $dept1=$_SESSION['var1']; 
}
else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Session Expired!');
    window.location='../admin/index.php';
    </script>");
}
include('connection.php');
$type=$_POST['type'];
$tag=$_POST['tag'];
$date=$_POST['date'];
$content=$_POST['content'];
$unsafe_variable = $_POST["content"];
$safe_variable = mysqli_real_escape_string($conn,$unsafe_variable);
$unsafe_variable2 = $_POST["tag"];
$safe_variable2 = mysqli_real_escape_string($conn,$unsafe_variable2);
$query="INSERT INTO `notice`(`type`, `tag`, `date`, `content`, `dept`, `dept1`) VALUES ('$type','$safe_variable2','$date','$safe_variable','$dept','$dept1')";
$res=mysqli_query($conn,$query);
 echo ("<script LANGUAGE='JavaScript'>
    window.alert('Notice Submitted!');
    window.location='../admin/show_notification.php';
    </script>");
?>