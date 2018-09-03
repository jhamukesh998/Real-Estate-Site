<!DOCTYPE html>
<html>
<title>Search Result</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}

tr{
	background : #A0E6FF;
	color: white ; 
}
td {
	background : #9E5B40;
	color:white;
}
</style>
<body class="w3-content w3-border-left w3-border-right">


  


<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Sell / Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-white" style="margin-left:260px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:80px"></div>

  <!-- Slideshow Header -->
  <div class="w3-container" id="apartment">
    <h2 class="w3-text-green">The Apartment</h2>
    <div class="w3-display-container mySlides">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyvULdyZ35THGLNIGivs_7nGMYPy5fqJeFHNA5XSHDU1FjAh_byQ" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Living Room</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="/w3images/diningroom.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Dining Room</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="/w3images/bedroom.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Bedroom</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="/w3images/livingroom2.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Living Room II</p>
      </div>
    </div>
  </div>
 
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="http://www.livingroomre.com/wp-content/uploads/sliders/front/home_10_img.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Living room">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="https://images2.roomstogo.com/is/image/roomstogo/dr_rm_hillcreek_black_6_chrs_~Hill-Creek-Black-5-Pc-Rectangle-Dining-Room.jpeg?$pdp_gallery_945$" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Dining room">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="https://images2.roomstogo.com/is/image/roomstogo/br_rm_belmar_black_pan~Belmar-Black-5-Pc-Queen-Bedroom.jpeg?$pdp_gallery_945$" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/index-rustic-kitchen-1517254441.jpg?crop=1.00xw:1.00xh;0,0&resize=768:*" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Second Living Room">
    </div>
  </div>

  <div class="w3-container">
    <h4><strong>The space</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Max people: 4</p>
        <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 2</p>
        <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 1</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-clock-o"></i> Check In: After 3PM</p>
        <p><i class="fa fa-fw fa-clock-o"></i> Check Out: 12PM</p>
      </div>
    </div>
    <hr>
    
    <h4><strong>Amenities</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-shower"></i> Shower</p>
        <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
        <p><i class="fa fa-fw fa-tv"></i> TV</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
        <p><i class="fa fa-fw fa-thermometer"></i> Heating</p>
        <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
      </div>
    </div>
    <hr>
    
   

<!-- End page content -->
</div>


<?php
$q = ($_POST['locality']);
//$q = 'Thane';
//$BHK = intval('2');
$BHK = ($_POST['Bhk']);
$Area = ($_POST['Area']);
//$Area = '5000 sqft';

$Type = ($_POST ['Type']);
//$Type='Residential';

query6();
if ( $q != '' && $BHK != '' && $Area !='' && $Type !='' )
{
	query4();
}
else if ( $q != '' && $BHK != '' && $Area !='')
{
	query3();
}
 else if( $q != '' && $BHK != '')
{
	query2();
}

else 
{

// query1 
// For Displaying acc to location



$con = mysqli_connect('localhost','root','Madyspit@2098','real_estate');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"real_estate");
$sql="SELECT * FROM property WHERE Location = '".$q."'";

$result = mysqli_query($con,$sql);


echo " <h3> According to locaity </h3> : $q </h3> ";
echo '<table border= "2" >
<tr>
<th>Property_id</th>
<th>type</th>
<th>Building_name</th>
<th>Area </th>
<th>BHK</th>
<th>Price</th>
<th>Location</th>
<th>Amenities</th>
<th>Builder_Name </th>
<th>Posted_on </th>
</tr>';

while($row = mysqli_fetch_array($result)) {

	
    echo "<tr>";
	 echo "<td>" . $row['Property_id'] . "</td>";
	 echo "<td>" . $row['type'] . "</td>";
	 echo "<td>" . $row['Building_name'] . "</td>";
	 
    echo "<td>" . $row['Area'] . "</td>";
	echo "<td>" . $row['BHK'] . "</td>";
	echo "<td>" .$row['Price'] ."</td>";
	
	echo "<td>" . $row['Location'] . "</td>";
	echo "<td>" . $row['Amenities'] . "</td>";
	echo "<td>" . $row['Builder_Name'] . "</td>";
	echo "<td>" . $row['Posted_on'] . "</td>";
	query5($row['Property_id']);
    echo "</tr>";
}
echo "</table>";






}


// 2nd query 
// location and bhk



function  query2 ()
{
	
	$p =  $GLOBALS['q'] ;
	$bhk= intval($GLOBALS['BHK']) ;
	$sql2="SELECT * FROM property WHERE Location = '".$p."' AND BHK = ' ".$bhk." ' ";



$con2 = mysqli_connect('localhost','root','Madyspit@2098','real_estate');
$result2 = mysqli_query($con2,$sql2);



echo "According to location and bhk";
echo '<table border = "2" >
<tr>
<th>Property_id</th>
<th>type</th>
<th>Building_name</th>
<th>Area </th>
<th>BHK</th>
<th>Price</th>
<th>Location</th>
<th>Amenities</th>
<th>Builder_Name </th>
<th>Posted_on </th>
</tr>';

while($row = mysqli_fetch_array($result2)) {
	
    echo "<tr>";
	 echo "<td>" . $row['Property_id'] . "</td>";
	 echo "<td>" . $row['type'] . "</td>";
	 echo "<td>" . $row['Building_name'] . "</td>";
	 
    echo "<td>" . $row['Area'] . "</td>";
	echo "<td>" . $row['BHK'] . "</td>";
	echo "<td>" .$row['Price'] ."</td>";
	
	echo "<td>" . $row['Location'] . "</td>";
	echo "<td>" . $row['Amenities'] . "</td>";
	echo "<td>" . $row['Builder_Name'] . "</td>";
	echo "<td>" . $row['Posted_on'] . "</td>";
    echo "</tr>";
}
echo "</table>";


}




//query 3
//location bhk & area 

function  query3 ()
{
	
	$p =  $GLOBALS['q'] ;
	$bhk= intval($GLOBALS['BHK']) ;
	$area = $GLOBALS['Area'];
	$sql3="SELECT * FROM property WHERE Location = '".$p."' AND BHK = ' ".$bhk." ' AND Area = '".$area."' ";



$con3 = mysqli_connect('localhost','root','Madyspit@2098','real_estate');
$result3 = mysqli_query($con3,$sql3);



echo "<h3> According to BHk, locaity and Area </h2> ";
echo "<table border = '2'>
<tr>
<th>Property_id</th>
<th>type</th>
<th>Building_name</th>
<th>Area </th>
<th>BHK</th>
<th>Price</th>
<th>Location</th>
<th>Amenities</th>
<th>Builder_Name </th>
<th>Posted_on </th>
</tr>";

while($row = mysqli_fetch_array($result3)) {
	
	
    echo "<tr>";
	 echo "<td>" . $row['Property_id'] . "</td>";
	 echo "<td>" . $row['type'] . "</td>";
	 echo "<td>" . $row['Building_name'] . "</td>";
	 
    echo "<td>" . $row['Area'] . "</td>";
	echo "<td>" . $row['BHK'] . "</td>";
	echo "<td>" .$row['Price'] ."</td>";
	
	echo "<td>" . $row['Location'] . "</td>";
	echo "<td>" . $row['Amenities'] . "</td>";
	echo "<td>" . $row['Builder_Name'] . "</td>";
	echo "<td>" . $row['Posted_on'] . "</td>";
    echo "</tr>";
}
echo "</table>";


}

//query4
// location bhk area and type
function  query4 ()
{
	
	$p =  $GLOBALS['q'] ;
	$bhk= intval($GLOBALS['BHK']) ;
	$area = $GLOBALS['Area'];
	$type = $GLOBALS ['Type'];
	$sql4="SELECT * FROM property WHERE Location = '".$p."' AND BHK = ' ".$bhk." ' AND Area = '".$area."' AND type = '".$type."'";



$con4 = mysqli_connect('localhost','root','Madyspit@2098','real_estate');
$result4 = mysqli_query($con4,$sql4);


echo "<h3> According to Bhk,locality , Area and type </h3>";
echo "<table border = '2'>
<tr>
<th>Property_id</th>
<th>type</th>
<th>Building_name</th>
<th>Area </th>
<th>BHK</th>
<th>Price</th>
<th>Location</th>
<th>Amenities</th>
<th>Builder_Name </th>
<th>Posted_on </th>
</tr>";

while($row = mysqli_fetch_array($result4)) {
	//console.log('hiiiii');
	
    echo "<tr>";
	 echo "<td>" . $row['Property_id'] . "</td>";
	 echo "<td>" . $row['type'] . "</td>";
	 echo "<td>" . $row['Building_name'] . "</td>";
	 
    echo "<td>" . $row['Area'] . "</td>";
	echo "<td>" . $row['BHK'] . "</td>";
	echo "<td>" .$row['Price'] ."</td>";
	
	echo "<td>" . $row['Location'] . "</td>";
	echo "<td>" . $row['Amenities'] . "</td>";
	echo "<td>" . $row['Builder_Name'] . "</td>";
	echo "<td>" . $row['Posted_on'] . "</td>";
    echo "</tr>";
}
echo "</table>";


}

//query5
//join on property  and seller table
function  query5 ($pid)
{
	
	$sql5="SELECT Name FROM property,seller WHERE property.Property_id = seller.Property_id";

//$result = mysqli_query($con,$sql);

$con5 = mysqli_connect('localhost','root','Madyspit@2098','real_estate');
$result5 = mysqli_query($con5,$sql5);


/*
echo "<table>
<tr>
<th>Name</th>
</tr>";
*/
while($row = mysqli_fetch_array($result5)) {
	
	 echo "<td>" . $row['Name'] . "</td>";
	
  
}



}


// query6
//aggregate function , group ,order by
function  query6 ()
{
	
	$p =  $GLOBALS['q'] ;
	$bhk= intval($GLOBALS['BHK']) ;
	$area = $GLOBALS['Area'];
	$type = $GLOBALS ['Type'];
	$sql6= " SELECT Location, COUNT(Property_id) as available FROM property Group By Location ORDER BY available DESC ";



$con6 = mysqli_connect('localhost','root','Madyspit@2098','real_estate');
$result6 = mysqli_query($con6,$sql6);



echo "<h3>Availablity of  Properties in different locations</h3>";
echo '<table border = "2" >
<tr>
<th>Location</th>
<th>Available</th>

</tr>';

while($row = mysqli_fetch_array($result6)) {
	
	
    echo "<tr>";
	 echo "<td>" . $row['Location'] . "</td>";
	 echo "<td>" . $row['available'] . "</td>";
	 
    echo "</tr>";
}
echo "</table>";


}



//mysqli_close($con);
?>





<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>
