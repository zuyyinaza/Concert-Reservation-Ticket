<?php 
$db=new MYSQLi("Localhost","root","","dbzia1");
    if($db->connect_error>0){
		die('Connection error');
	}else
	{
		echo'';
	} ;
?>