<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$name=$fname." ".$lname;
$to="sagnikroy009@gmail.com";
$subject=$_POST['subject'];
$message=$_POST['message'];
$mail=$_POST['email'];
$header="From:$name<$mail>";
mail($to,$subject,$message,$header);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Mail Sent!');
    window.location='index.php';
    </script>");
?>