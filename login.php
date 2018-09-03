<?php
$name = filter_input(INPUT_POST, 'name');
$aadhar = filter_input(INPUT_POST, 'aadhar');
$contact = filter_input(INPUT_POST, 'contact');
$email = filter_input(INPUT_POST, 'email');
$psw = filter_input(INPUT_POST, 'psw');
// $psw-repeat = filter_input(INPUT_POST, 'psw-repeat');
if (!empty($name)){
if (!empty($psw)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "Madyspit@2098";
$dbname = "real_estate";

// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO user (name,aadhar,contact,email,psw)
  values ('$name','$aadhar','$contact','$email','$psw')";
  if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
else{
  echo "Password should not be empty";
  die();
}
 }
 else{
  echo "Username should not be empty";
  die();
 }
 ?>