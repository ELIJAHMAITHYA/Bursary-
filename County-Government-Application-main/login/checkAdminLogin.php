<?php      
//admin login
    
$host = "localhost: 3306";  
$user = "root";  
$password = '';  
$db_name = "bursaryapp";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}   
    $uname = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $uname = stripcslashes($uname);  
        $password = stripcslashes($password);  
        $uname = mysqli_real_escape_string($con, $uname);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from admin where Username = '$uname' and Password = '$password'"; 

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        $count = mysqli_num_rows($result);  
          //if there is one common idno and pass
        if($count == 1){ 
            echo '<script> alert("Success");</script>';
			header('Location:adminLoggedin.php'); 
        }  
        else{ 
            include('adminLogin.php');
    echo '<script>
            document.getElementById("errmsg").innerHTML = "Login failed, Try Again";
        </script>'; 
            
        }     

?> 
