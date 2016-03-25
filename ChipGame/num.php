<?php 
	include_once("sql-class.php");
	$rtime=time();
	$grade=$_POST['grades'];
	$sql2="select MAX(grade) as maxnum from score";
	$con=mysql_query($sql2);
	$num = mysql_fetch_array($con);
	$max = $num['maxnum'];
	if($grade>$max){
		$sql="insert into score(grade) values ('$grade')";
		mysql_query($sql);
		if(mysql_affected_rows()>0){
			echo '1';
		}
	}else{
		echo '0';
	}
	
  ?>