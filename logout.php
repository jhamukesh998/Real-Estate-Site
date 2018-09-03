<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: inde.php"); // Redirecting To Home Page
}
?>
