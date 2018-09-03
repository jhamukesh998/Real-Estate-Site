<?php
$Property_id = filter_input(INPUT_POST, 'Property_id');
$type = filter_input(INPUT_POST, 'type');
$Building_name = filter_input(INPUT_POST, 'Building_name');
$Area = filter_input(INPUT_POST, 'Area');
$BHK = filter_input(INPUT_POST, 'BHK');
$Price = filter_input(INPUT_POST, 'Price');
$Location = filter_input(INPUT_POST, 'Location');
$Amenities = filter_input(INPUT_POST, 'Amenities');
$Builder_Name = filter_input(INPUT_POST, 'Builder_Name');
$Posted_on = filter_input(INPUT_POST, 'Posted_on');

// $psw-repeat = filter_input(INPUT_POST, 'psw-repeat');
/*if (!empty($Property_id))*/{
/*if (!empty($type))*/{
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
  $sql = "INSERT INTO property (Property_id,type,Building_name,Area,BHK,Price,Location,Amenities,Builder_Name,Posted_on)
  values ('$Property_id','$type','$Building_name','$Area','$BHK','$Price','$Location','$Amenities','$Builder_Name','$Posted_on')";
  if ($conn->query($sql)){
    echo "New Property is added sucessfully";
  }
  else{
    echo "Error: ". $sql ."
". $conn->error;
  }
  $conn->close();
}
}
/*else{
  echo "Field should not be empty1";
  die();
}*/
 }
 /*else{
  echo "Field should not be empty2";
  die();
 }
 */
 ?>