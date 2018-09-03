<?php

/*
session_start();
//if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','Madyspit@2098','real_estate') or die(mysql_error());
 mysql_select_db('real_estate') or die(mysql_error());*/
 $name=$_POST['aadhar'];
 $pwd=$_POST['psw'];
 
 //$name = 'aa';
// $pwd ='aabcc';
 
$host = "localhost";
$dbusername = "root";
$dbpassword = "Madyspit@2098";
$dbname = "real_estate";
 $con=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

mysqli_select_db($con,real_estate); 
//To select the database

session_start(); //To start the session

//$query=mysqli_query($con,your query); 

$sql = "select * from user where aadhar='".$name."' and psw='".$pwd."'";
 if($name!=''&&$pwd!='')
 {
   //$query=mysql_query("select * from user where aadhar='".$name."' and psw='".$pwd."'") or die(mysql_error());
   
  // $query=mysqli_query($con,"select * from user where aadhar='".$name."' and psw='".$pwd."'") or die(mysql_error());
   //$res=mysql_fetch_row($query);
   $result=mysqli_query($con,$sql);
   
   if(mysqli_num_rows($result ) > 0)
   {
	   
    $_SESSION['name']=$name;
	//console.log('hiii');
	echo 'HIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII';
    header('location:testt.php');
   }
   else
   {
    echo'<h1>Invalid login credentials</h1>';
	//console.log('noooo');
	//header('location:buy.html');
   }
 }
 else
 {
  echo'Enter both username and password';
 }

?>

