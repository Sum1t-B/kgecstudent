<?php
include('connection.php');
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$dept=$_POST['dept'];
switch ($dept) {
    case "cseb1":
        $dept1="Department of Computer Science and Engineering(1st Year Btech)";
        break;
    case "cseb2":
        $dept1="Department of Computer Science and Engineering(2nd Year Btech)";
        break;
    case "cseb3":
        $dept1="Department of Computer Science and Engineering(3rd Year Btech)";
        break;
    case "cseb4":
        $dept1="Department of Computer Science and Engineering(4th Year Btech)";
        break;
    case "csem1":
        $dept1="Department of Computer Science and Engineering(1st Year Mtech)";
        break;
    case "csem2":
        $dept1="Department of Computer Science and Engineering(2nd Year Mtech)";
        break;
    case "itb1":
        $dept1="Department of Information Technology(1st Year Btech)";
        break;
    case "itb2":
        $dept1="Department of Information Technology(2nd Year Btech)";
        break;
    case "itb3":
        $dept1="Department of Information Technology(3rd Year Btech)";
        break;
    case "itb4":
        $dept1="Department of Information Technology(4th Year Btech)";
        break;
    case "itm1":
        $dept1="Department of Information Technology(1st Year Mtech)";
        break;
    case "itm2":
        $dept1="Department of Information Technology(2nd Year Mtech)";
        break;
    case "eceb1":
        $dept1="Department of Electronics and Communication Engineering(1st Year Btech)";
        break;
    case "eceb2":
        $dept1="Department of Electronics and Communication Engineering(2nd Year Btech)";
        break;
    case "eceb3":
        $dept1="Department of Electronics and Communication Engineering(3rd Year Btech)";
        break;
    case "eceb4":
        $dept1="Department of Electronics and Communication Engineering(4th Year Btech)";
        break;
    case "ecem1":
        $dept1="Department of Electronics and Communication Engineering(1st Year Mtech)";
        break;
    case "ecem2":
        $dept1="Department of Electronics and Communication Engineering(2nd Year Mtech)";
        break;
    case "meb1":
        $dept1="Department of Mechanical Engineering(1st Year Btech)";
        break;
    case "meb2":
        $dept1="Department of Mechanical Engineering(2nd Year Btech)";
        break;
    case "meb3":
        $dept1="Department of Mechanical Engineering(3rd Year Btech)";
        break;
    case "meb4":
        $dept1="Department of Mechanical Engineering(4th Year Btech)";
        break;
    case "mem1":
        $dept1="Department of Production Engineering(1st Year Mtech)";
        break;
    case "mem2":
        $dept1="Department of Production Engineering(2nd Year Mtech)";
        break;
    case "eeb1":
        $dept1="Department of Electrical Engineering(1st Year Btech)";
        break;
    case "eeb2":
        $dept1="Department of Electrical Engineering(2nd Year Btech)";
        break;
    case "eeb3":
        $dept1="Department of Electrical Engineering(3rd Year Btech)";
        break;
    case "eeb4":
        $dept1="Department of Electrical Engineering(4th Year Btech)";
        break;
    case "eem1":
        $dept1="Department of Electrical Engineering(1st Year Mtech)";
        break;
    case "eem2":
        $dept1="Department of Electrical Engineering(2nd Year Mtech)";
        break;
    case "mca1":
        $dept1="Department of Computer Application(MCA 1st Year)";
        break;
    case "mca2":
        $dept1="Department of Computer Application(MCA 2nd Year)";
        break;
    case "mca3":
        $dept1="Department of Computer Application(MCA 3rd Year)";
        break;
    case "apc":
        $dept1="Acharya Prafulla Chandra Roy Hall";
        break;
    case "pc":
        $dept1="Pritilata Chhatrinibas";
        break;
    case "rbc":
        $dept1="Rishi Bankim Chandra Hall";
        break;
    case "rrr":
        $dept1="Raja Rammohan Roy Hall";
        break;
    case "vc":
        $dept1="Vidyasagar Chhatrabas";
        break;
    case "ecell":
        $dept1="KGEC E-CELL(Entrepreneurship Cell)";
        break;
    case "keygen":
        $dept1="KeyGEN Coders(Coding Club)";
        break;
    case "litmus":
        $dept1="Litmus(Literacy Society)";
        break;
    case "nova":
        $dept1="NOVA(Astronomy Club)";
        break;
    case "les":
        $dept1="Les Quizerables(Quiz Club)";
        break;
    case "riyaz":
        $dept1="Riyaz(Music Club of KGEC)";
        break;
    case "ely":
        $dept1="Elysium(Dance Club)";
        break;
    case "chit":
        $dept1="ElysiumChitrank(Art & Decoration Club)";
        break;
}
$pass=$_POST['pass'];
$repass=$_POST['repass'];
if($dept=="WHICH DEPARTMENT FOR?")
{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Please select a Department!');
    window.location='../admin/registration.php';
    </script>");
    die();
}
if($pass!=$repass)
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password Missmatched!');
    window.location='../admin/registration.php';
    </script>");
    die();
}
$query="SELECT * FROM `admin` WHERE email='$email'";
$res=mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($res);
if($rowcount>0)
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email Already Taken!');
    window.location='../admin/registration.php';
    </script>");
    die();
}
$query="SELECT * FROM `admin` WHERE dept='$dept'";
$res=mysqli_query($conn,$query);
$rowcount=mysqli_num_rows($res);
if($rowcount>0)
{
	echo ("<script LANGUAGE='JavaScript'>
    window.alert('This department already have an Admin!');
    window.location='../admin/registration.php';
    </script>");
    die();

}
else{
$query="INSERT INTO `admin`(`name`, `email`, `number`, `dept`, `dept1`, `pass`) VALUES ('$name','$email','$number','$dept','$dept1','$pass')";
$res=mysqli_query($conn,$query);
echo ("<script LANGUAGE='JavaScript'>
    window.alert('Register Succesfull');
    window.location='../admin/index.php';
    </script>");
}
?>
