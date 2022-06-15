<?php 
function Serv_Type()
{
   $conn_STUDENT = $GLOBALS['db'];
   $sel="SELECT * from location";
  $data=$conn_STUDENT->query($sel);
  return $data;
}
function Get_item($food_type)
{
   $conn_STUDENT = $GLOBALS['db'];
	$sel="SELECT * from services_uploade where Location='".$food_type."'";
	$info=$conn_STUDENT->query($sel);
	return $info;
}


function Get_item_detail($type,$item)
{
   $conn_STUDENT = $GLOBALS['db'];
	$sel="SELECT * from services_uploade where Location='".$type."' and Concert='".$item."'";
	$info=$conn_STUDENT->query($sel);
	return $info;
}

?>