<script>
	function xoal(){
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
    $sql="SELECT tau.masot,tau.id_t,laitau.hoten,laitau.id_lt,lenh.id_lenh,lenh.masol,lenh.diadiem,lenh.ngaybd,lenh.ngaykt FROM lenh,tau,laitau WHERE tau.id_t=lenh.id_t AND laitau.id_lt=lenh.id_lt ORDER BY id_lenh ASC LIMIT $perPage,$rowPerPage";
    $query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM lenh"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlyl&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlyl&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ LỆNH KHỞI HÀNH</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=theml" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Lệnh Khởi Hành</a>				
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>				
                            <th data-sortable="true">Mã Lệnh</th>
                           <th data-sortable="true">Địa Điểm</th>
                           <th data-sortable="true">Tàu</th>
                            <th data-sortable="true">Lái Tàu</th>
                             <th data-sortable="true">Ngày Xuát Phát</th>      
                             <th data-sortable="true">Ngày Về</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 300px;">
                           <td data-checkbox="true"><?php echo $row['masol']; ?></td>
                          <td data-checkbox="true"><?php echo $row['diadiem']; ?></td>

                              <td data-checkbox="true">    
                              <a href="quantri.php?page_layout=thongtint&id_t=<?php echo $row['id_t']; ?>"><?php echo $row['masot']; ?></a>
                            </td> 
                            
                            <td data-checkbox="true">    
                              <a href="quantri.php?page_layout=thongtinlt&id_lt=<?php echo $row['id_lt']; ?>"><?php echo $row['hoten']; ?></a>
                            </td>
                             <td data-sortable="true"><?php
	                        echo date("d/m/Y", strtotime($row['ngaybd']));                             
                             
                             ?></td>
                            <td data-sortable="true"><?php 
	                        echo date("d/m/Y", strtotime($row['ngaykt']));                             
                             ?></td>
                         
                            <td>
                                <a href="quantri.php?page_layout=sual&id_lenh=<?php echo $row['id_lenh']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoal();" href="./chucnang/lenh/xoal.php?id_lenh=<?php echo $row['id_lenh']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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