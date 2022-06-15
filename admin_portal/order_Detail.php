<?php
 $title='Delivery Boy';

include('_secure.php');
   include('header.php');
   include('include/db.php');
    include('include/function.php');?>

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
        <li class="breadcrumb-item active">Order info</li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
    
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-archive"></i>Order Detail</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SR#</th>
                  <th>Order Code </th>
                  <th>Name </th>
                  <th>Phone Number </th>
                  <th>Address</th>
                  <th>Order Date</th>
                  <th>Order Time</th>
                  <th>Total Price</th>
                  <th>View Order</th>
                  <th>Status Update</th>
                </tr>
              </thead>
              
              
              <tbody>
                <?php $Show=get_order_status_Count_complete();
                $count1='0';
                 while ($row=$Show->fetch_object()) {
                   $count1++;
                   // $Status=$row->status;
                   // // $Boy= $row->Dilvery_Boy_Name;
                    $SID=$row->User_ID;
                   // $USer_NAME=$row->User_Name;
                    $QR_code=$row->Order_Code;
                ?>
                <tr>
                  <th><?php echo $count1; ?></th>
                  <th>
                    <?php  
                     echo $QR_code;?>
                   </th>
                  <td><?php echo $row->User_Name; ?></td>
                  <td><?php echo $row->Phone_No; ?></td>
                  <td><?php echo $row->Address; ?></td>
                  <td><?php echo $row->Order_date; ?></td>
                  <td><?php echo $row->Order_time; ?></td>
                  <td><?php echo $row->Total_Price; ?></td>
                  <td><?php echo $row->Delivery_status; ?></td>

                  <th>  <a  data-toggle="modal" data-target="#exampleModalUser_Order<?php echo $count1;?>" class=" btn btn-primary">View</a>
                <?php
                     
                 include('view_User_Order_detail.php');?>
                  </th>
                         
                </tr>
                              <?php  # code...
                               }?>
                             
                            </tbody>
                          </table>
                        </div>
                      </div>
                     
                    </div>
    </div>
    </div>

      
    </div>

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include('footer.php');?>
  </div>
</body>

</html>
