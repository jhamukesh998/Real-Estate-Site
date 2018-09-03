<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>


<?php
$q = ($_GET['locality']);
//$q = 'Thane';
//$BHK = intval('2');
$BHK = ($_GET['Bhk']);
$Area = ($_GET['Area']);
//$Area = '5000 sqft';

$Type = ($_GET['Type']);
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
	query5('A2132100');
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

</body>
</html>