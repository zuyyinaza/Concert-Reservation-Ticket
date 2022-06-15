<?php
 $title='Dashboard';
 
include('_secure.php');
   include('header.php');
   include('include/db.php');
    include('include/function.php');
if(isset($_POST['Add_ser']))
     {
        extract($_POST);
    $insert = "insert into services_uploade(Concert,Location,Firstseat_Price,Secondseat_Price,Date,Time) 
     VALUES('".$Ser_Name."','".$Ser_Type."','".$Firstseat_Price."','".$Secondseat_Price."','".$Date."','".$Time."')";

     $query = $db->query($insert);
   if($query){
   include('SMS/Change_password.php');
   }
  
};
if(isset($_GET["SRVaction"]))
{


$sel="DELETE FROM services_uploade WHERE Id ='".$_GET["ID"]."' ";
$objExecute=$db->query($sel);
  // if($info){
   if($objExecute)
   {

     include('SMS/Successful_Delete.php');

   }
    header("location:Services_record.php");
   
}

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
        <li class="breadcrumb-item active">All Concert Record</li>
      </ol>
      <!-- Icon Cards-->
     
      <!-- Area Chart Example-->
    
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-user"></i>  Add New Concert Uploade</div>
        <div class="card-body">
          <form action="" method="POST" >
          <div class="row">
            <div class="form-group col-lg-3">
            <label for="">Location </label>
            <select name="Ser_Type" class="form-control" required="" >
              <option hidden="" >Select Location</option>
               <?php $Show1=Serv_Type();
                $count='0';
                 while ($row=$Show1->fetch_object()) {
                   $count++;
                ?>
              <option value="<?php echo $row->Location ?>"><?php echo $row->Location ?></option>
                  <?php };?>
            </select>
            
          </div>
         
          <div class="form-group col-lg-3">
            <label for="">Concert </label>
            <input type="text"  class="form-control" name="Ser_Name" required=""  placeholder="Enter Concert">
          </div>
          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Firstseat Price </label>
            <input type="number"  class="form-control" name="Firstseat_Price" maxlength="12" minlength="12" placeholder="Firstseat Price" required="">
          </div>

          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Secondseat Price </label>
            <input type="number"  class="form-control" name="Secondseat_Price" maxlength="12" minlength="12" placeholder="Secondseat Price" required="">
          </div>
          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Date</label>
            <input type="date" class="form-control" name="Date" maxlength="12" minlength="12" placeholder="" required="">
          </div>
          <div class="form-group col-lg-3">
            <label for="exampleInputEmail1">Time</label>
            <input type="time" class="form-control" name="Time" maxlength="12" minlength="12" placeholder="" required="">
          </div>


           <div class="form-group col-lg-12">
            <input type="submit"  class="form-control btn btn-primary" name="Add_ser">
          </div>
        </div>
       </form> 
        </div>

      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> All Concert Record</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>SR#</th>
                  <th>Concert</th>
                  <th>Location</th>
                  <th>Firstseat Price</th>
                  <th>Secondseat Price</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Delete</th>
                </tr>
              </thead>
              
              
              <tbody>
                <?php $Show=Serv_record();
                $count='0';
                 while ($row=$Show->fetch_object()) {
                   $count++;
                ?>
                <tr>
                  <th><?php echo $count; ?></th>
                  <th><?php echo $row->Concert; ?></th>
                  <td><?php echo $row->Location; ?></td>
                  <td><?php echo $row->Firstseat_Price; ?></td>
                  <td><?php echo $row->Secondseat_Price; ?></td>
                  <td><?php echo $row->Date; ?></td>
                  <td><?php echo $row->Time; ?></td>
                 
                  <td><a 
                   onclick="return confirm('Are you sure you want to delete this entry?')"
                    href="Services_record.php?SRVaction&ID=<?php echo $row->ID; ?>" class=" btn btn-primary">Delete</a></td>
                </tr>
                <?php  # code...
                 };?>
                
               
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted"></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php include('footer.php');?>
  </div>
</body>

</html>
