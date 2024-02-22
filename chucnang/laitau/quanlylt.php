<script>
	function xoalt(){
			var conf=confirm('Dữ Liệu bị xóa sẽ không thể phục hồi.Bạn có chắc chắn?');
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
    $sql="SELECT bangcap.ten,laitau.id_lt,laitau.maso,laitau.email,laitau.hoten,laitau.cmnd,laitau.sdt,laitau.dc,laitau.trinhdo FROM bangcap,laitau WHERE bangcap.id=laitau.id ORDER BY id_lt ASC LIMIT $perPage,$rowPerPage";
	$query=mysqli_query($conn, $sql);

    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM laitau"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlylt&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlylt&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ LÁI TÀU</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themlt" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Lái Tàu</a>			
                	
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
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
                                <td data-checkbox="true"><a href="quantri.php?page_layout=sualt&id_lt=<?php echo $row['id_lt']; ?>"><?php echo $row['email']; ?></a></td>
                                <td data-checkbox="true"><?php echo $row['hoten']; ?></td>
                               <td data-checkbox="true"><?php echo $row['cmnd']; ?></td>                 
                                <td data-checkbox="true"><?php echo $row['dc']; ?></td>
                               <td data-checkbox="true"><?php echo $row['sdt']; ?></td>
                              <td data-checkbox="true">                               
                              <?php echo $row['ten']; ?>
                            </td>
                             <td data-checkbox="true">                               
                              <?php echo $row['trinhdo']; ?>
                            </td>
                            <td>
                                <a href="quantri.php?page_layout=sualt&id_lt=<?php echo $row['id_lt']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoalt();" href="./chucnang/laitau/xoalt.php?id_lt=<?php echo $row['id_lt']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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
</div><!--/.row-->	