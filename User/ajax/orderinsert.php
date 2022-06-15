<?php 
include('../_secure.php');
include('../include/db.php');
include('../include/function.php');
$_SESSION['User_id'];
    $sel="INSERT INTO
    order_temp (User_ID,Concert,Location,Secondseat_Price,Firstseat_Price,Total_Item,Pick_Delivery_Status,Order_Status,Order_code)
VALUES ('".$_SESSION['User_id']."','".$_GET['Servies_name']."','".$_GET['Servies_type']."','".$_GET['Secondseat_Price']."','". $_GET['Firstseat_Price']."','".$_GET['total_Order']."','1','','')";

  $info=$db->query($sel);
   if($info){
    include('../SMS/order_Send.php');
   }

  	?>