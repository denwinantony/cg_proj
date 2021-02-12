<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crewgenerator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "Select * from indiuser where email='$email' and password='$pass' "; 
    
    $result = mysqli_query($conn, $sql); 
    
    $num = mysqli_num_rows($result);  
    
    // This sql query is use to check if 
    // the username is already present  
    // or not in our Database 
    if($num == 0) 
    { 
        
        echo "<script>
alert('Incorrect username or password. Click ok to try again');
window.location.href='indilogin.html';
</script>";
        
    }
    
   if($num>0)  
   { 
      	echo "<script>
alert('Login Successful.');
window.location.href='indiinfo.html';
</script>";
   }  

	$conn->close();
?>