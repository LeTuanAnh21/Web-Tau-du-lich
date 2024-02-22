<?php  
	$email= $_GET['email'];
    $sqlct="SELECT * FROM chucvu";
    $queryct= mysqli_query($conn,$sqlct);
	$sql="SELECT * FROM thanhvien WHERE email='$email'";
	$query=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÔNG TIN</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">			
                <table data-toggle="table"  data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                                    <th data-sortable="true">Mã Số</th>
                                    <th data-sortable="true">Email</th>
                                    <th data-sortable="true">Họ Tên</th>
                                    <th data-sortable="true">CMND</th>
                                    <th data-sortable="true">Giới tính</th>
                                    <th data-sortable="true">Địa chỉ</th>
                                    <th data-sortable="true">SDT</th>
		                            <th data-sortable="true">Mật khẩu</th>
		                            <th data-sortable="true">Chức Vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                             <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                            <td data-checkbox="true">
                                <a href="quantri.php?page_layout=suathongtin&id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><?php echo $row['email']; ?></a>
                            </td>
                                    <td data-checkbox="true"><?php echo $row['ht']; ?></td>
                                    <td data-checkbox="true"><?php echo $row['cmnd']; ?></td>

                                    <td data-checkbox="true">
                               <?php
                               
                                        if($row['gt']==1){echo '<img src="https://img.icons8.com/material/24/000000/male.png" width="25" height="25"/>';}
                                       if($row['gt']==2){echo '<img src="https://img.icons8.com/color/48/000000/female.png" width="25" height="25"/>';}
                                      ?>
                                    </td>

                                    
                                    
                             <td data-checkbox="true"><?php echo $row['dc']; ?></td>
                              <td data-checkbox="true"><?php echo $row['sdt']; ?></td>
                            <td data-checkbox="true">
                                
                              <?php echo $row['mat_khau']; ?>
                            
                            </td>
                                            <td data-checkbox="true">
                                
                      <select name="id" class="form-control">
                                            <?php  
                                                while($rowct= mysqli_fetch_array($queryct)) {
                                            ?>
                                            <option
                                                <?php
                                                if($row['id']==$rowct['id']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowct['id']; ?>"><?php echo $rowct['ten']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>

                            </select>                            
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>