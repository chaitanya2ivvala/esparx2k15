<?php
session_start();
include_once("php_includes/check_login_status.php");
$extractdata= explode('@@',$_POST['fname']);
//print_r($extractdata);

include("php_includes/connect.php");
	
        $col0=explode(',',$extractdata[0]);
	
	$l=explode('=',$extractdata[1]);
	$col1=explode(',',$l[1]);
	
	$c=explode('=',$extractdata[2]);
	$col2=explode(',',$c[1]);
	
	$g=explode('=',$extractdata[3]);
	$col3=explode(',',$g[1]);

	$y=explode('=',$extractdata[4]);
	$col4=explode(',',$y[1]);
	
	$p=explode('=',$extractdata[5]);
	$col5=explode(',',$p[1]);
	
	$e=explode('=',$extractdata[6]);
	$col6=explode(',',$e[1]);
	
	$t=explode('=',$extractdata[7]);	
	$col7=$t[1];
               
	        $sql = "select Rexparxid from users where id='".$_SESSION['userid']."'"; 
		$query = mysqli_query($db_conx, $sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);	
	     
		if($col7=='Poster')
		{
		$tblname='tbl_poster';
		
		$sql2 = "select * from $tblname where eid='".$row['Rexparxid']."'";
		$query2 = mysqli_query($db_conx, $sql2);
		$numrows2 = mysqli_num_rows($query2);
		if($numrows2 > 0)
		{
			$sql3 = "delete from $tblname where eid='".$row['Rexparxid']."'";
			mysqli_query($db_conx, $sql3);
			for($i=0;$i< 2;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		else
		{
			for($i=0;$i< 2;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		}
		
		
		
		
		
		if($col7=='Robot')
		{
		$tblname='tbl_robot';
		
		$sql2 = "select * from $tblname where eid='".$row['Rexparxid']."'";
		$query2 = mysqli_query($db_conx, $sql2);
		$numrows2 = mysqli_num_rows($query2);
		if($numrows2 > 0)
		{
			$sql3 = "delete from $tblname where eid='".$row['Rexparxid']."'";
			mysqli_query($db_conx, $sql3);
			for($i=0;$i< 4;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		else
		{
			for($i=0;$i< 4;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		}
		
		
		
		
		
		if($col7=='Paper')
		{
		$tblname='tbl_paper';
		
		$sql2 = "select * from $tblname where eid='".$row['Rexparxid']."'";
		$query2 = mysqli_query($db_conx, $sql2);
		$numrows2 = mysqli_num_rows($query2);
		if($numrows2 > 0)
		{
			$sql3 = "delete from $tblname where eid='".$row['Rexparxid']."'";
			mysqli_query($db_conx, $sql3);
			for($i=0;$i< 2;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		else
		{
			for($i=0;$i< 2;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		}
		
		
		
		
		
		if($col7=='Project')
		{
		$tblname='tbl_project';
		
		$sql2 = "select * from $tblname where eid='".$row['Rexparxid']."'";
		$query2 = mysqli_query($db_conx, $sql2);
		$numrows2 = mysqli_num_rows($query2);
		if($numrows2 > 0)
		{
			$sql3 = "delete from $tblname where eid='".$row['Rexparxid']."'";
			mysqli_query($db_conx, $sql3);
			for($i=0;$i< 4;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		else
		{
			for($i=0;$i< 4;$i++)
			{
			$sql = "insert into $tblname set eid='".$row['Rexparxid']."',fname='".$col0[$i]."',lname='".$col1[$i]."',college='".$col2[$i]."', gender='".$col3[$i]."', year='".$col4[$i]."', phone='".$col5[$i]."', email='".$col6[$i]."',dateon='".strtotime('now')."'"; 
			$query = mysqli_query($db_conx, $sql);	
			}
		}
		}
		
		
		
		

		