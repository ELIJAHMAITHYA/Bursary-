<?php      
 include('./connect.php'); 
if(isset($_POST['submit']))
{
    $fname = $_POST['fname'];  
    $lname = $_POST['lname'];
    $idno = $_POST['idno'];
    $pwd = $_POST['pwd'];

$sql1="INSERT INTO signup(FirstName,LastName,IdNo,Password) VALUES('$fname','$lname','$idno','$pwd')";
//$sql2="INSERT INTO feedback(name,comments) VALUES('$name','$comments')";
$result1=mysqli_query($con,$sql1);

if(($result1)){
	echo '<script> alert("Success!!! ");</script>';
	include("loggedin.php");
}
else{

    echo '<script> alert("ERROR:Please insert correct values in all fields!!! ");</script>';

}
}
mysqli_close($con);
 ?>