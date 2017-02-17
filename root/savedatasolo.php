<?php
session_start();
include_once("php_includes/check_login_status.php");
$extractdata= explode('@@',$_POST['name']);


include("php_includes/connect.php");
	
        $col0=$extractdata[0];
	
	$col1=explode('=',$extractdata[1]);
	
	
	$col2=explode('=',$extractdata[2]);
	
	
	$col3=explode('=',$extractdata[3]);
	
	
	$col4=explode('=',$extractdata[4]);
	
       
	
               
		if($col4[1]=='Solo')
		{
		$tblname='tbl_solodance';
		$sql = "insert into $tblname set uid='".$_SESSION['userid']."', name='".$col0."',address='".$col1[1]."',phone='".$col2[1]."', price='".$col3[1]."'"; 
		$query = mysqli_query($db_conx, $sql);	
			
		}
		
		if($col4[1]=='Group')
		{
		$tblname='tbl_groupdance';
		$sql = "insert into $tblname set uid='".$_SESSION['userid']."', name='".$col0."',address='".$col1[1]."',phone='".$col2[1]."', price='".$col3[1]."'"; 
		$query = mysqli_query($db_conx, $sql);	
			
		}
		
		
		
		

		