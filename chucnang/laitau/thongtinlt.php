<?php  
   $id_lt=$_GET['id_lt'];
     $sqlct="SELECT * FROM bangcap";
    $queryct= mysqli_query($conn,$sqlct);
	$sql = "SELECT * FROM laitau WHERE id_lt=$id_lt";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÔNG TIN LÁI TÀU</h1>
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
                                    <th data-sortable="true">Địa Chỉ</th>
                                    <th data-sortable="true">SDT</th>
                                    <th data-sortable="true">Bằng cấp</th>
                                    <th data-sortable="true">Trình Độ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                            <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                                <td data-checkbox="true"><?php echo $row['email']; ?></td>
                                <td data-checkbox="true"><?php echo $row['hoten']; ?></td>
                               <td data-checkbox="true"><?php echo $row['cmnd']; ?></td>                 
                                <td data-checkbox="true"><?php echo $row['dc']; ?></td>
                               <td data-checkbox="true"><?php echo $row['sdt']; ?></td>
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
                             <td data-checkbox="true">                               
                              <?php echo $row['trinhdo']; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>       
        </div>                 
    </div>
</div>