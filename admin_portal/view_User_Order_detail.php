<div class="modal fade" id="exampleModalUser_Order<?php echo $count1;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Customer  Name : <strong><?php echo $row->User_Name;?></strong></h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>

                        <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>SR#</th>
                          <th>Concert</th>
                          <th>Location</th>
                          <th>Items</th>
                          <th>Price</th>
                        </tr>
                      </thead>
          <?php   

           $Get_Order=get_order_detail($SID,$QR_code); 
                
             if($Get_Order->num_rows>0)
                {
                  $Total_Price_confirm='0';
                $count='0';
         
                 while($row=$Get_Order->fetch_object())
                    { $count++;

                    $Total_Secondseat_Price=$row->Secondseat_Price * $row->Total_Item;
                    $Total_Firstseat_Price=$row->Firstseat_Price * $row->Total_Item;
                    $Total_Price_confirm=$Total_Secondseat_Price+$Total_Firstseat_Price;
                   
                   
                ?>
             <tr>
                  <th><?php echo $count; ?></th>
                  <td><?php echo $row->Concert; ?></td>
                  <td><?php echo $row->Location; ?></td>
                  <td><?php echo $row->Total_Item; ?></td>
                  <td><?php echo $Total_Price_confirm; ?></td>
                  
                 
                </tr>

             <?php  }
                }?>
                      
                      <tbody>
                      </tbody>
                    </table>

                </div>  
                      </div>
                    </div>
                  </div>