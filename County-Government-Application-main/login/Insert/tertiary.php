<?php      
 include('./connect.php'); 
if(isset($_POST['submit']))
{
    $idno = $_POST['idno'];
    $sub_county = $_POST['scounty'];  
    $ward = $_POST['ward'];
    $location = $_POST['location'];
    $sub_location = $_POST['slocation'];
    $village = $_POST['village'];
    $school = $_POST['school'];
    $los = $_POST['levelStudy'];
    $course = $_POST['course'];
    $regno = $_POST['regNo'];
    $Yos = $_POST['yos'];
    $sem = $_POST['sem'];
    $courseDuration = $_POST['courseDuration'];
    $id_cert = $_POST['id-cert'];
    $email = $_POST['email'];
    $family = $_POST['family'];
    $fincome = $_POST['fincome'];
    $mincome = $_POST['mincome'];

$sql1="INSERT INTO tertiary(FirstName,LastName,IdNo,Password) VALUES('$fname','$lname','$idno','$pwd')";
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