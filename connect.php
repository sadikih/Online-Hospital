<?php
session_start();
$con = mysqli_connect('localhost','root','','sad') or die('can not connect to server');
if($con)
{
	mysqli_select_db($con, 'sad') or die('can not select database');
}





function loggedin() {
	
	if (isset($_SESSION['Username_ict']) || isset($_COOKIE['Username_ict']) ) {
		
		
		
		$loggedin = TRUE;
		return $loggedin;
	
	}
} 

@$UserName_S= $_SESSION['Username_ict'];
@$UserName_C= $_COOKIE['Username_ict'];
$query = "SELECT * FROM `sad` WHERE `Email` = '$UserName_S' OR `Email` = '$UserName_C' ";
if ($sql_query = mysqli_query ($con, $query)) {
	while ($rows = mysqli_fetch_assoc ($sql_query)) {
		$UserID = $rows['UserID'];
		$Name = $rows['username'];
		$Email = $rows['Email'];
		$Password = $rows['Password'];
		$AD=$rows['Address'];
	}
}
date_default_timezone_set("Africa/nairobi");
?>

