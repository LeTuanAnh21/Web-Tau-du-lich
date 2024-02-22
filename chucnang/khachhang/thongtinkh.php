<?php  
	$id_khachhang= $_GET['id_khachhang'];
     $sqlct="SELECT * FROM quoctich";
    $queryct= mysqli_query($conn,$sqlct);
	$sql="SELECT * FROM khachhang WHERE id_khachhang='$id_khachhang'";
	$query=mysqli_query($conn, $sql);
	$row=mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÔNG TIN KHÁCH HÀNG</h1>
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
		                            <th data-sortable="true">Giới tính</th>
                                    <th data-sortable="true">CMND</th>
                                    <th data-sortable="true">Ngày sinh</th>
		                            <th data-sortable="true">SDT</th>
                                     <th data-sortable="true">Quốc Gia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                              <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                            <td data-checkbox="true"><?php echo $row['email']; ?></td>
                            <td data-sortable="true"><?php echo $row['hoten']; ?></td>

                         <td data-checkbox="true">
                               <?php
                               
                                        if($row['gioitinh']==1){echo 'Nam';}
                                       if($row['gioitinh']==2){echo 'Nữ';}
                                      ?>
                                    </td>

                            <td data-sortable="true"><?php echo $row['CMND']; ?></td>
                            <td data-sortable="true"><?php
	                        echo date("d/m/Y", strtotime($row['ns']));                             
                             ?></td>

                            <td data-sortable="true"><?php echo $row['sdt']; ?></td>

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
                                    </td>                          
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>