<?php
session_start();
include_once("php_includes/check_login_status.php");
if(isset($_FILES["FileInput"]) && $_FILES["FileInput"]["error"]== UPLOAD_ERR_OK)
{
	//print_r($_POST); exit;
	############ Edit settings ##############
	$UploadDirectory	= 'uploads/'.$_POST['type'].'/'; //specify upload directory ends with / (slash)
	##########################################
	
	/*
	Note : You will run into errors or blank page if "memory_limit" or "upload_max_filesize" is set to low in "php.ini". 
	Open "php.ini" file, and search for "memory_limit" or "upload_max_filesize" limit 
	and set them adequately, also check "post_max_size".
	*/
	
	//check if this is an ajax request
	if (!isset($_SERVER['HTTP_X_REQUESTED_WITH'])){
		die();
	}
	
	
	//Is file size is less than allowed size.
	if ($_FILES["FileInput"]["size"] > 5242880) {
		die("File size is too big!");
	}
	
	//allowed file type Server side check
	/*switch(strtolower($_FILES['FileInput']['type']))
		{
			//allowed file types
			case 'image/png': 
			case 'image/gif': 
			case 'image/jpeg': 
			case 'image/pjpeg':
			case 'text/plain':
			case 'text/html': //html file
			case 'application/x-zip-compressed':
			case 'application/pdf':
			case 'application/msword':
			case 'application/vnd.ms-excel':
			case 'video/mp4':
				break;
			default:
				die('Unsupported File!'); //output error
	}*/
	
	
		include("php_includes/connect.php");
		$e = mysqli_real_escape_string($db_conx, $_POST['email']);

		$sql = "select Rexparxid, email from users where id='".$_SESSION['userid']."'"; 
		$query = mysqli_query($db_conx, $sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	
	
	$File_Name          = strtolower($_FILES['FileInput']['name']);
	$File_Ext           = substr($File_Name, strrpos($File_Name, '.')); //get file extention
	$Random_Number      = rand(0, 9999999999); //Random number to be added to name.
	$NewFileName 		= $row['Rexparxid']."-".$Random_Number."-".date('d-m-y:h:i:s').$File_Ext; //new file name
	
	if(move_uploaded_file($_FILES['FileInput']['tmp_name'], $UploadDirectory.$NewFileName ))
	   {
		
		
		
		
		
		$sql1 = "select filename from usersfiles  where eid='".$row['Rexparxid']."' AND title='".$_POST['type']."'"; 
		$query1 = mysqli_query($db_conx, $sql1);
		$numrows = mysqli_num_rows($query1);
		if($numrows > 0)
		{
		$sql = "update usersfiles set filename='".$NewFileName."' where eid='".$row['Rexparxid']."' AND title='".$_POST['type']."'"; 
		$query = mysqli_query($db_conx, $sql);
		}
		else
		{
		$sql = "insert into usersfiles set eid='".$row['Rexparxid']."',filename='".$NewFileName."',title='".$_POST['type']."',dateon='".strtotime('now')."'"; 
		$query = mysqli_query($db_conx, $sql);
		}
		
		
		
		
		if($_POST['type']=='Poster')
		{
		$eventId= 'PSR'.rand(10000,99999);
		$sql = "update users set posterID='".$eventId."' where id='".$_SESSION['userid']."'";
		$query = mysqli_query($db_conx, $sql);
		$sub="Poster ID Created Successfully";
		$tit='Please check your Poster Id:';
		}
		
		if($_POST['type']=='Robot')
		{
		$eventId= 'ADV'.rand(10000,99999);
		$sql = "update users set robotID='".$eventId."' where id='".$_SESSION['userid']."'";
		$query = mysqli_query($db_conx, $sql);
		$sub="Robot ID Created Successfully";
		$tit='Please check your Poster Id:';
		}
		
		
		if($_POST['type']=='Paper')
		{
		$eventId= 'PPR'.rand(10000,99999);
		$sql = "update users set paperID='".$eventId."' where id='".$_SESSION['userid']."'";
		$query = mysqli_query($db_conx, $sql);
		$sub="Paper ID Created Successfully";
		$tit='Please check your Paper Id:';
		}
		
		if($_POST['type']=='Project')
		{
		$eventId= 'PPR'.rand(10000,99999);
		$sql = "update users set projectID='".$eventId."' where id='".$_SESSION['userid']."'";
		$query = mysqli_query($db_conx, $sql);
		$sub="Project ID Created Successfully";
		$tit='Please check your Project Id:';
		}
		
		
                $to = $row['email'];
		$from = "info@esparx2k16.com";
		$subject = $sub;
		$message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>Esparx2K16 Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;">'.$sub.'</div><div style="padding:24px; font-size:17px;">Dear User,<br /><br/>'.$tit.'<b>'.$eventId.'</b><br/></div></body></html>';
		$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		mail($to, $subject, $message, $headers); 
		die('Success! Data saved successfully.');
		
		
		
		
	}else{
		die('error uploading File!');
	}
	
}
else
{
	die('Something wrong with upload! Is "upload_max_filesize" set correctly?');
}