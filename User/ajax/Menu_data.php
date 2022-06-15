 <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SR#</th>
                  <th>Name</th>
                  <th>Firstseat Price </th>
                  <th>Secondseat Price</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>View</th>
                </tr>
              </thead>
              
              <tbody>
 <?php 
include('../include/db.php');
include('../include/function.php');
if(isset($_POST['Menu_Type']))
  {   
      $Get_food_item=Get_item($_POST['Menu_Type']); 
             if($Get_food_item->num_rows>0)
                {
                  $count='0';
                 while($row=$Get_food_item->fetch_object())
                    { $count++;?>
                
             <tr>
                  <th><?php echo $count; ?></th>
                  <td><?php echo $row->Concert; ?></td>
                  <td><?php echo $row->Firstseat_Price; ?></td>
                  <td><?php echo $row->Secondseat_Price; ?></td>
                  <td><?php echo $row->Date; ?></td>
                  <td><?php echo $row->Time; ?></td>
                 
                  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal<?php echo $row->ID; ?>">Order</button>
                     <?php include('..\Order_model.php');?>
                   </td>
                </tr>

             <?php  }
                }
              };
 ?>

 </tbody>
            </table>
          </div>

             