<script>
	function xoat(){
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
    $rowPerPage=3;
    $perPage=$page*$rowPerPage-$rowPerPage;	
    $sql="SELECT chutau.hoten,chutau.id_ct,chutau.cmnd,tau.id_t,tau.namsx,tau.anh_sp,tau.tinhtrang,tau.socho,tau.masot FROM tau,chutau WHERE chutau.id_ct=tau.id_ct ORDER BY id_t ASC LIMIT $perPage,$rowPerPage"; 

    $query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tau"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlyt&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlyt&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ TÀU</h1>
    </div>
</div><!--/.row-->

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themt" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Tàu</a>				
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>				
                                <th data-sortable="true">Mã Số Tàu</th>
                           <th data-sortable="true">Chủ Tàu</th>
                            <th data-sortable="true">Năm Sản Xuất</th>
                            <th data-sortable="true">Hình ảnh</th>
                             <th data-sortable="true">Số chỗ</th>      
                             <th data-sortable="true">Tình Trạng</th>
                            <th data-sortable="true">Sửa</th>
                            <th data-sortable="true">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 300px;">
                           <td data-checkbox="true"><?php echo $row['masot']; ?></td>
                          <td data-checkbox="true">
                              <a href="quantri.php?page_layout=thongtinct&id_ct=<?php echo $row['id_ct']; ?>"><?php echo $row['hoten']; ?></a>
                        </td>

                              <td data-checkbox="true">    
                         <?php 
	                        echo date("d/m/Y", strtotime($row['namsx'])); ?>                        
                          </td> 
                            
                            <td data-checkbox="true">    
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
                         
                            <td>
                                <a href="quantri.php?page_layout=suat&id_t=<?php echo $row['id_t']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <td>
                                <a onclick="return xoat();" href="./chucnang/tau/xoat.php?id_t=<?php echo $row['id_t']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
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