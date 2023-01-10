<head>
</head>
<?php      
//user login
$host = "localhost: 3306";  
$user = "root";  
$password = '';  
$db_name = "bursaryapp";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
    $idno = $_POST['idno'];  
    $password = $_POST['pwd'];  
      
        //to prevent from mysqli injection  
        $idno = stripcslashes($idno);  
        $password = stripcslashes($password);  
        $idno = mysqli_real_escape_string($con, $idno);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from signup where IdNo = '$idno' and Password = '$password'"; 

        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

        $count = mysqli_num_rows($result);  
          //if there is one common idno and pass
        if($count == 1){ 
            echo '<script> alert("Login successful");</script>';
			header('Location:loggedin.php');
			 
        }  
        else{  
            include('login.php');
            echo '<script>
            document.getElementById("errmsg").innerHTML = "Login failed, Try Again";
        </script>';   
        }     
?>  



