<?php 

include('../include/Connection.php');
include('../include/function.php');

if(isset($_POST['Type']) && isset($_POST['item']))
  {   
      $Get_item=Get_item_detail($_POST['Type'],$_POST['item']); 
             if($Get_item->num_rows>0)
                { $row=$Get_item->fetch_object();
                  ?>
                  <div class="col-md-6">
                      <div class="form-group">
                 <?php 
                  if($row->Firstseat_Price>0){?> 
                       <label>Firstseat </label>
                      <input type="radio" id="Firstseat" name="Firstseat"  value="<?php echo $row->Firstseat_Price;?>" />
                  <?php };?>

                   <?php 
                  if($row->Secondseat_Price>0){?> 
                       <label>Secondseat</label>
                      <input type="radio" id="Secondseat" name="Secondseat" value="<?php echo $row->Secondseat_Price;?>" />
                  <?php };?>


                      
                    </div>
                     </div>
                   
                <?php }
              };?>


<div class="col-md-6">
  <div class="form-group">
   <select class="form-control" id="Total_item" ><span id="Total_item1"></span>
      <option class="hidden"  selected >Total Item</option>
        <?php for($a=1; $a<100;$a++){                                       
        ?>
        <option value="<?php echo $a ?>"><?php echo $a;?></option>
          <?php };?>
    </select>
  </div>
</div>


<div class="col-md-6">
  <div class="form-group">
   <input type="submit" class="btnRegister"  value="order" onclick="submit();" />
  </div>
</div>






