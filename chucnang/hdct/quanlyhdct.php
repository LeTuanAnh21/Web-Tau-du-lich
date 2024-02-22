<script>
	function xoahdct(){
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
    $sql="SELECT thanhvien.id_thanhvien,thanhvien.ht,hdct.id_hdct,hdct.ngaybd,hdct.ngaykt,hdct.giatri,hdct.tinhtrang,tau.id_t,tau.masot,hdct.maso FROM thanhvien,hdct,tau WHERE thanhvien.id_thanhvien=hdct.id_thanhvien  AND tau.id_t=hdct.id_t  ORDER BY id_hdct ASC LIMIT $perPage,$rowPerPage";
    $query=mysqli_query($conn, $sql);
    $totalRows=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM hdct"));
    $totalPages=ceil($totalRows/$rowPerPage);
    $listPage="";
    for($i=1;$i<=$totalPages;$i++)
    {
        if($page==$i){
            $listPage.='<li class="active"><a href="quantri.php?page_layout=quanlyhdct&page='.$i.'">'.$i.'</a></li>';
        }
        else{
            $listPage.='<li><a href="quantri.php?page_layout=quanlyhdct&page='.$i.'">'.$i.'</a></li>';
        }
    }
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">QUẢN LÝ HỢP ĐỒNG CHỦ TÀU</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">
                <a href="quantri.php?page_layout=themhdct" class="btn btn-primary" style="margin: 10px 0 20px 0; position: absolute;">Thêm Hợp Đồng Chủ Tàu</a>				
                <table data-toggle="table" data-search="true" data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>						        
                            <th data-sortable="true">Mã số</th>
                            <th data-sortable="true">Tàu</th>
                           <th data-sortable="true">Người Chiu Trách Nhiệm</th>
                            <th data-sortable="true">Ngày Bắt Đầu</th>
                            <th data-sortable="true">Ngày Kết Thúc</th>
                            <th data-sortable="true">Giá Trị</th>
                             <th data-sortable="true">Tình Trạng</th>
                            <th data-sortable="true">Sửa</th>
                            <!-- <th data-sortable="true">Xóa</th> -->
                        </tr>
                    </thead>
                    <tbody>
                           <?php  
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr style="height: 300px;">
                                  <td data-sortable="true"><?php echo $row['maso']; ?></td>
                                  
                                  <td data-checkbox="true">    
                                            <a href="quantri.php?page_layout=thongtint&id_t=<?php echo $row['id_t']; ?>"><?php echo $row['masot']; ?></a>
                               </td>
                             <td data-checkbox="true">    
                              <a href="quantri.php?page_layout=thongtinnv&id_thanhvien=<?php echo $row['id_thanhvien']; ?>"><?php echo $row['ht']; ?></a>
                            </td>
                            



                           <td data-sortable="true"><?php
	                        echo date("d/m/Y", strtotime($row['ngaybd']));                             
                             
                             ?></td>
                            <td data-sortable="true"><?php 
	                        echo date("d/m/Y", strtotime($row['ngaykt']));                             
                             ?></td>
                             <td data-sortable="true"><?php echo $row['giatri']; ?></td>
                         <td>
                              <span class="label label-<?php 

                              $bday = new DateTime($row['ngaykt']); // Your date of birth
                                $today = new Datetime(date('m.d.y'));
                                $diff = $today->diff($bday);
                               $date =   ($diff->d)+1;
                               $month =    $diff->m;                   
                               $year =    $diff->y;
                               $today = date("Y-m-d");
                               $another_date =date($row['ngaykt']);
                          if(strtotime($today) >= strtotime($another_date)) {echo "danger";} else{echo 'success';}?>">
                                   <?php
                                           
                                            if (strtotime($today) >= strtotime($another_date)) {
                                            echo "Hết Hạn";
                                            } else {
                                              if($year <1 AND $month <1 AND ($date>=1 AND $date<=10) ){echo 'Còn '. $date.' '.'ngày';} 
                                         elseif($year <1 AND $month <1 AND $date> 10 ){echo 'Còn '. $date.' '.'ngày';}
                                         elseif($year <1 AND $month >=1){echo 'Còn '. $month.' '.'tháng',' '. $date.' '.'ngày';}
                                      elseif($year >=1){echo 'Còn '. $year.' '.'năm',' '. $month.' '.'tháng',' '. $date.' '.'ngày';}

                                            }
                                      
                                      ?>
                                </span>
                            </td>
                            <td>
                                <a href="quantri.php?page_layout=suahdct&id_hdct=<?php echo $row['id_hdct']; ?>"><span><svg class="glyph stroked brush" style="width: 20px;height: 20px;"><use xlink:href="#stroked-brush"/></svg></span></a>
                            </td>
                            <!-- <td>
                                <a onclick="return xoahdct();" href="./chucnang/hdct/xoahdct.php?id_hdct=<?php echo $row['id_hdct']; ?>"><span><svg class="glyph stroked cancel" style="width: 20px;height: 20px;"><use xlink:href="#stroked-cancel"/></svg></span></a>
                            </td> -->
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