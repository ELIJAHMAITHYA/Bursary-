 <script>
    alert("success");
 </script>
<?php

// Connect to the database
$host = "localhost: 3306";  
$user = "root";  
$password = '';  
$db_name = "bursaryapp";  

$conn = mysqli_connect($host, $user, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all bursaries that have not yet been allocated
$sql = "SELECT * FROM tertiary WHERE allocation_status = 'pending'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data for each bursary
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["IdNo"]. " - Institution: " . $row["Institution"]. " - Email: " . $row["Email"]. " - Allocation Status: " . $row["allocation_status"]. "<br>";
        
        // Display form to update allocation status
        echo '<form action="update_allocation.php" method="post">';
        echo '<input type="hidden" name="id" value="'.$row["id"].'">';
        echo '<label for="allocation_status">Allocation Status:</label>';
        echo '<select name="allocation_status">';
        echo '<option value="approved">Approved</option>';
        echo '<option value="denied">Denied</option>';
        echo '</select>';
        echo '<input type="submit" value="Submit">';
        echo '</form>';
    }
} else {
    echo "No bursaries to allocate.";
}

mysqli_close($conn);

?>
