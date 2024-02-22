<script>
	function xoatv(){
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
    $rowPerPage=3;
    $perPage=$page*$rowPerPage-$rowPerPage;

    $sql="SELECT chucvu.ten,thanhvien.id_thanhvien,thanhvien.maso,thanhvien.email,thanhvien.ht,thanhvien.cmnd,thanhvien.anh_sp,thanhvien.gt,thanhvien.dc,thanhvien.sdt,thanhvien.mat_khau FROM chucvu,thanhvien WHERE chucvu.id=thanhvien.id ORDER BY id_thanhvien ASC LIMIT $perPage,$rowPerPage";
	$query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM thanhvien"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlytv&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlytv&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ NHÂN VIÊN</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themtv" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Nhân Viên</a>			
                	
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">Mã Số</th>          
                         <th data-sortable="true">Hình ảnh</th>
                            <th data-sortable="true">Email</th>
                            <th data-sortable="true">Họ Tên</th>
                            <th data-sortable="true">CMND</th>
                             <th data-sortable="true">Địa Chỉ</th>
                            <th data-sortable="true">SDT</th>
                            <th data-sortable="true">Chức Vụ</th>
                            <th data-sortable="true">Mật Khẩu</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 100px;">
                            <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                            <td data-sortable="true">
                                <span class="thumb"><img width="70px" height="90px" src="anh/<?php echo $row['anh_sp'] ?>" /></span>
                            </td>
                               
                            <td data-checkbox="true">
                                <a href="quantri.php?page_layout=suatv&id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><?php echo $row['email']; ?></a>
                            
                            </td>
                                <td data-checkbox="true"><?php echo $row['ht']; ?></td>
                             <td data-checkbox="true"><?php echo $row['cmnd']; ?></td>
                             <td data-checkbox="true"><?php echo $row['dc']; ?></td>
                              <td data-checkbox="true"><?php echo $row['sdt']; ?></td>
                            
                           <td data-checkbox="true">    
                                    <?php echo $row['ten']; ?>
                            </td> 
                             <td data-checkbox="true"><?php echo md5($row['mat_khau'])?></td>

                            <td>
                                <a href="quantri.php?page_layout=suatv&id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoatv();" href="./chucnang/thanhvien/xoatv.php?id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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