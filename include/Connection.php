<?php 

$db=new MYSQLi("localhost","root","","dbzia1");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>