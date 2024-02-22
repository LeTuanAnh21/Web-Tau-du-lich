<?php  
	$id_ct=$_GET['id_ct'];
	$sql="SELECT * FROM chutau WHERE id_ct='$id_ct'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÔNG TIN CHỦ TÀU</h1>
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
                                       <th data-sortable="true">Giới Tính</th>
                                     <th data-sortable="true">Ngày Sinh</th>
                                    <th data-sortable="true">Địa chỉ</th>
                                    <th data-sortable="true">SDT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                             <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                            <td data-checkbox="true"><?php echo $row['email']; ?></td>
                            <td data-checkbox="true"><?php echo $row['hoten']; ?></td>
                            <td data-checkbox="true"><?php echo $row['cmnd']; ?></td>
                         <td data-checkbox="true">
                               <?php
                               
                                        if($row['gioitinh']==1){echo 'Nam';}
                                       if($row['gioitinh']==2){echo 'Nữ';}
                                      ?>
                                    </td>

                         <td data-sortable="true"><?php 
	                        echo date("d/m/Y", strtotime($row['ns']));                             
                         
                         ?></td>

                            <td data-checkbox="true"><?php echo $row['diachi']; ?></td>
                            <td data-checkbox="true"><?php echo $row['sdt']; ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>