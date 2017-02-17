<?php
session_start();
include_once("connect.php");
// Files that inculde this file at the very top would NOT require 
// connection to database or session_start(), be careful.
// Initialize some vars
$user_ok = false;
$log_id = "";
$log_fname = "";
$log_password = "";
// User Verify function
function evalLoggedUser($conx,$id,$f,$p1){
	$sql = "SELECT ip FROM users WHERE id='$id' AND fname='$f' AND password='$p1' AND activated='1' LIMIT 1";
    $query = mysqli_query($conx, $sql);
    $numrows = mysqli_num_rows($query);
	if($numrows > 0){
		return true;
	}
}
if(isset($_SESSION["userid"]) && isset($_SESSION["fname"]) && isset($_SESSION["password"])) {
	$log_id = preg_replace('#[^0-9]#', '', $_SESSION['userid']);
	$log_fname = preg_replace('#[^a-z0-9]#i', '', $_SESSION['fname']);
	$log_password = preg_replace('#[^a-z0-9]#i', '', $_SESSION['password']);
	// Verify the user
	$user_ok = evalLoggedUser($db_conx,$log_id,$log_fname,$log_password);
	if($user_ok == true){
		// Update their lastlogin datetime field
		$sql = "UPDATE users SET lastlogin=now() WHERE id='$log_id' LIMIT 1";
        $query = mysqli_query($db_conx, $sql);
	}
} 
?>