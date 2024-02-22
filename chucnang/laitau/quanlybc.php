<script>
	function xoabc(){
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
    $rowPerPage=10;
    $perPage=$page*$rowPerPage-$rowPerPage;
	$sql="SELECT * FROM bangcap ORDER BY id ASC LIMIT $perPage,$rowPerPage";
	$query=mysqli_query($conn, $sql);

    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM bangcap"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlybc&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlybc&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ BẰNG CẤP</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=thembc" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Bằng Cấp</a>				
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">ID</th>
                            <th data-sortable="true">Bằng Cấp</th>
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
                           
                            <td data-sortable="true"><?php echo $row['ten']; ?></td>
                            <td>
                                <a href="quantri.php?page_layout=suabc&id=<?php echo $row['id']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoabc();" href="./chucnang/laitau/xoabc.php?id=<?php echo $row['id']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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