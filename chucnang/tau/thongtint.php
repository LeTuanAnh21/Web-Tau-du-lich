<?php  
    $id_t=$_GET['id_t'];
    // $sql="SELECT tau.masot,tau.id_t,laitau.hoten,laitau.id_lt,lenh.id_lenh,lenh.masol,lenh.diadiem,lenh.ngaybd,lenh.ngaykt FROM lenh,tau,laitau WHERE tau.id_t=lenh.id_t AND laitau.id_lt=lenh.id_lt";
    // $sql="SELECT chutau.hoten,chutau.cmnd,tau.id_t,tau.namsx,tau.anh_sp,tau.tinhtrang,tau.socho,tau.masot FROM tau,chutau WHERE chutau.id_ct=tau.id_ct";
    $sql="SELECT chutau.hoten,chutau.cmnd,tau.id_t,tau.namsx,tau.anh_sp,tau.tinhtrang,tau.socho,tau.masot FROM tau,chutau WHERE chutau.id_ct=tau.id_ct AND id_t='$id_t' "; 
    $sqlct="SELECT * FROM chutau ";
    $queryct= mysqli_query($conn,$sqlct);
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÔNG TIN TÀU</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">			
                <table data-toggle="table"  data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>	
                                     <th data-sortable="true">Mã Số Tàu</th>
                                    <th data-sortable="true">Chủ Tàu</th>
                                    <th data-sortable="true">CMND</th>
                                    <th data-sortable="true">Năm Sản Xuất</th>
                                    <th data-sortable="true">Hình ảnh</th>
                                    <th data-sortable="true">Số chỗ</th>      
                                    <th data-sortable="true">Tình Trạng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                    <td data-checkbox="true"><?php echo $row['masot']; ?></td>
                          <td data-checkbox="true"><?php echo $row['hoten']; ?></td>

                              <td data-checkbox="true">    
                            <?php echo $row['cmnd']; ?>
                            </td> 
                            
                            <td data-checkbox="true">    
                        <?php 
	                        echo date("d/m/Y", strtotime($row['namsx']));                             
                           
                           ?>                         
                           </td>
                             <td data-sortable="true">                               
                     <span class="thumb"><img width="180px" height="100px" src="anhtau/<?php echo $row['anh_sp'] ?>" /></span>
                       </td>
                            <td data-sortable="true">
                                <?php echo $row['socho']; ?>
                            </td>
                         <td data-sortable="true">
                              <span class="label label-<?php if($row['tinhtrang']==1) {echo "success";}elseif(($row['tinhtrang']==3)) {echo 'danger';} else{echo 'unsuccess';}?>">

                                   <?php
                                        if($row['tinhtrang']==1){echo 'Sằn Sàng';}
                                       if($row['tinhtrang']==2){echo 'Hoạt Động';}
                                      if($row['tinhtrang']==3){echo 'Bị Hỏng';}
                                      ?>
                                </span>
                            </td>
                        </tr>
                    </tbody>       

                </table>      
            </div>
        </div>         
    </div>
</div>