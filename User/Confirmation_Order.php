<?php
error_reporting(0);
 $title='Confirmation Order';
   include('header.php');
   
   include('_secure.php');
   include('include/db.php');
    include('include/function.php');

if(isset($_GET["action"]))
{

$sel="DELETE FROM order_temp WHERE ID ='".$_GET["ID"]."' ";
$objExecute=$db->query($sel);
  // if($info){
   if($objExecute)
   {
     header("Location:Confirmation_Order.php");
   }
   else{
     $sms= 'Error Save' ;
        }
};

 $info_User_Get=user_info();



if(isset($_POST['User_submit']))
{
 
   $Order_Code=rand(10,1000000);
   $USER_ID=$_SESSION['User_id'];
   $USER_Name=$_SESSION['User_NAME'];
   $Phone_No=$info_User_Get->Contact_No;
    
   $sql="SELECT * From order_detail Where Order_date='".$_POST['Pickdate']."' and Order_time='".$_POST['deliverydate']."' and Total_Item='".$_POST['Total_Item']."' and Total_Price='".$_POST['Total_Price']."'";
    $sql1=$db->query($sql);    
    if($sql1->num_rows<=0) {
  
        $sel1="UPDATE order_temp SET Order_status='active' , Order_code='".$Order_Code."' , Pick_Delivery_Status='2' where   User_ID='".$USER_ID."' and Pick_Delivery_Status='1'";
         $info1=$db->query($sel1);
            $sel="INSERT INTO order_detail 
           (User_ID,Order_Code,User_Name,Total_Item,Total_Price,Order_date,
           Order_time,Phone_No,Address,Pick_up_Status,Delivery_Status)
        VALUES ('".$USER_ID."','".$Order_Code."','".$USER_Name."','".$_POST['Total_Item']."','".$_POST['Total_Price']."','".$_POST['Pickdate']."','".$_POST['deliverydate']."','".$Phone_No."','".$_POST['Address']."','No','No')";

          $info=$db->query($sel);
           if($info){
            include('SMS/order_Send.php');
           }

         }else{


         }
   
};

    ?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php  include('nav.php');?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Confirm Your Order</li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
     
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-cutlery"></i> Confirm Your Order </div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
             <div class="form-group col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>

                        <tr>
                          <th>SR#</th>
                          <th>Concert</th>
                          <th>Location</th>
                          <th>Firstseat Price </th>
                          <th>Secondseat Price</th>
                          <th>Total Item</th>
                          <th>Total Price</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
          <?php   $Get_Order=get_order_detail($USER_ID=$_SESSION['User_id']); 
                $Total_Price='0';
                $count='0';
                $Total_Item_Overall='0';
               
             if($Get_Order->num_rows>0)
                {
                  
                 while($row=$Get_Order->fetch_object())
                    { $count++;
                    $Total_Item_Overall+=$row->Total_Item;
                    $Total_Secondseat_Price=$row->Secondseat_Price * $row->Total_Item;
                    $Total_Firstseat_Price=$row->Firstseat_Price * $row->Total_Item;
                    $Total_Price+=$Total_Secondseat_Price+$Total_Firstseat_Price;
                    
                ?>
             <tr>
                  <th><?php echo $count; ?></th>
                  <td><?php echo $row->Concert; ?></td>
                  <td><?php echo $row->Location; ?></td>
                  <td><?php echo $row->Firstseat_Price; ?></td>
                  <td><?php echo $row->Secondseat_Price; ?></td>
                  <td><?php echo $row->Total_Item; ?></td>
                  <td><?php echo $Total_Secondseat_Price+$Total_Firstseat_Price; ?></td>
                  
                  <td><a onclick="return confirm('Are you sure you want to delete this entry?')"  href="Confirmation_Order.php?action&ID=<?php echo $row->ID; ?>" class=" btn btn-primary">Delete</a></td>
                </tr>

             <?php  }
                }?>
                      
                      <tbody>
                      </tbody>
                    </table>

                </div>  
              </div>
        </div>
       </form> 
        </div>
        
     
    </div>
<div class="row col-lg-12">

    <div class="card col-lg-6" style="padding: 0px">
        <div class="card-header">
          <i class="fa fa-"></i> Bill Detail</div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
             <div class="col-lg-12">
              <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>SR#</th>
                          <th>Total Item</th>
                          <th>Total Price</th>
                        </tr>
                      </thead>
                      <tr>
                        <td>1</td>
                        <td><?php echo $Total_Item_Overall;?></td>
                        <td><?php echo $Total_Price; ?></td>
                      </tr>
          
                      
                      <tbody>
                      </tbody>
                    </table>
                <!-- <strong>Total Iteam :</strong>    <?php echo $Total_Item_Overall;?><br>
                <strong>Total Order Bill :</strong>    <?php echo $Total_Price; ?><br> -->
                </div>    
                </div>  
          </div>
       </form> 
      </div>  
    </div>  
   
    <div class="card col-lg-6" style="padding: 0px;float: right;">
        <div class="card-header">
          <i class="fa fa-"></i> Fill Form</div>
        <div class="card-body">
        <form action="" method="POST" >
          <div class="row">
               <div class="form-group col-lg-6">
                  <input type="text" name="Total_Price" hidden="" required="" class="form-control" value="<?php echo $Total_Price?>" >

                  <input type="text" name="Total_Item" hidden="" required="" class="form-control" value="<?php echo $Total_Item_Overall?>" >
                 
                  <label><label>Order Date:</label>
                  <input type="date" name="Pickdate" required="" class="form-control" placeholder="Customer Name">
              </div> 

              <div class="form-group col-lg-6">
                <label>Order Time</label>
                <input type="time" name="deliverydate" required="" class="form-control" placeholder="">
              </div> 
              <div class="form-group col-lg-12">
                <textarea class="form-control" name="Address" required="" placeholder="Pleser confirm address"><?php echo $info_User_Get->Address;?></textarea>
              </div>   
                          
              <?php if($Get_Order->num_rows>0)
                {
                   ?>  
              <div class="form-group col-lg-12">
                 <input type="submit" name="User_submit" class="form-control btn btn-primary" value="Submit" >  
              </div> 
            <?php }?>
                  
          </div>
       </form> 
        </div>
        
    </div>  
    </div>

</div>    
<br>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
      <?php include('footer.php');?>
    
  </div>
</body>

</html>
