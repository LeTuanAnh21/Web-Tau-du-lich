<script>
	function xoakh(){
			var conf=confirm('Dữ liệu bị xóa sẽ không thể phục hồi.Bạn có chắc chắn?');
		return conf;
	}
</script>
<?php
    if(isset($_GET['page']))
    {
        $page=$_GET['page'];
    }
    else{
        $page=1;
    }
    $rowPerPage=5;
    $perPage=$page*$rowPerPage-$rowPerPage;
    $sql="SELECT quoctich.ten,khachhang.id_khachhang,khachhang.maso,khachhang.hoten,khachhang.email,khachhang.gioitinh,khachhang.CMND,khachhang.ns,khachhang.sdt FROM quoctich,khachhang WHERE quoctich.id=khachhang.id ORDER BY id_khachhang ASC LIMIT $perPage,$rowPerPage";
	$query=mysqli_query($conn, $sql);

    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM khachhang"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlykh&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlykh&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ KHÁCH HÀNG</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themkh" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Khách Hàng</a>				
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">Mã Số</th>
                            <th data-sortable="true">Email</th>  
                            <th data-sortable="true">Họ Tên</th>
                            <th data-sortable="true">Giới tính</th>
                            <th data-sortable="true">CMND</th>
                             <th data-sortable="true">Ngày Sinh</th>
                            <th data-sortable="true">SDT</th>
                            <th data-sortable="true">Quốc Gia</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 300px;">
                            <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                            <td data-checkbox="true"><a href="quantri.php?page_layout=suakh&id_khachhang=<?php echo $row['id_khachhang']; ?>"><?php echo $row['email']; ?></a></td>
                            <td data-sortable="true"><?php echo $row['hoten']; ?></td>

                         <td data-checkbox="true">
                               <?php
                               
                                        if($row['gioitinh']==1){echo '<img src="https://img.icons8.com/material/24/000000/male.png" width="15" height="15"/>';}
                                       if($row['gioitinh']==2){echo '<img src="https://img.icons8.com/color/48/000000/female.png" width="15" height="15"/>';}
                                      ?>
                                    </td>

                            <td data-sortable="true"><?php echo $row['CMND']; ?></td>
                            <td data-sortable="true"><?php
	                        echo date("d/m/Y", strtotime($row['ns']));                             
                             ?></td>

                            <td data-sortable="true"><?php echo $row['sdt']; ?></td>

                            <td data-sortable="true"><?php echo $row['ten']; ?></td>
                            <td>
                                <a href="quantri.php?page_layout=suakh&id_khachhang=<?php echo $row['id_khachhang']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoakh();" href="./chucnang/khachhang/xoakh.php?id_khachhang=<?php echo $row['id_khachhang']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td>
                        </tr>
                        <?php  
                            }
                        ?>
                    </tbody>
                </table>
                <ul class="pagination" style="float: right;">
                    <?php  
                        echo $listPage;
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>