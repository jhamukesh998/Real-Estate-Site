<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['aadhar']) || empty($_POST['psw'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$aadhar = $_POST['aadhar'];
$psw = $_POST['psw'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "Madyspit@2098", "real_estate");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT aadhar, psw from user where aadhar=? AND psw=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $aadhar, $psw);
$stmt->execute();
$stmt->bind_result($aadhar, $psw);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_user'] = $aadhar; // Initializing Session
		  
		  echo "<h1> loggedin</h1>";
          header("location: testt.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>