<?php  
    $id_t=$_GET['id_t']; 
    $sqlct="SELECT * FROM chutau ";
    $queryct= mysqli_query($conn,$sqlct);
    $sql="SELECT chutau.hoten,tau.id_t,tau.namsx,tau.anh_sp,tau.tinhtrang,tau.socho,tau.masot FROM tau,chutau WHERE chutau.id_ct=tau.id_ct AND id_t='$id_t' "; 

    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
       $tinhtrang=$_POST['tinhtrang'];
        if(isset($tinhtrang) )     
                {           
            $sql="UPDATE tau SET  tinhtrang='$tinhtrang' WHERE id_t=$id_t";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyt');
        }
    }

?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN TÀU</h1>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
          
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <table data-toggle="table">
                            <thead>
                                <tr>                                
		                             <th data-sortable="true">Mã Số Tàu</th>
                                    <th data-sortable="true">Chủ Tàu</th>
                                    <th data-sortable="true">Năm Sản Xuất</th>
                                    <th data-sortable="true">Hình ảnh</th>
                                    <th data-sortable="true">Số chỗ</th>      
                                    <th data-sortable="true">Tình Trạng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                             <td data-checkbox="true"><?php echo $row['masot']; ?></td>
                         <td data-checkbox="true">
                        <?php echo $row['hoten']; ?>
                           </td>

                                  <td data-checkbox="true"><?php 
	                        echo date("d/m/Y", strtotime($row['namsx']));                             
                           
                           ?></td>   
                             <td data-sortable="true">
                                <span class="thumb"><img width="180px" height="100px" src="anhtau/<?php echo $row['anh_sp'] ?>" /></span>
                            </td>	    
                         <td data-checkbox="true"><?php echo $row['socho']; ?></td>

                                   <td data-checkbox="true">
                            <select name="tinhtrang" class="form-control">
                                <option <?php if($row["tinhtrang"]==1){echo "selected";}?> value=1>Sẵn Sàng</option>
                                <option <?php if($row["tinhtrang"]==2){echo "selected";}?> value=2>Hoạt Động</option>
                                <option <?php if($row["tinhtrang"]==3){echo "selected";}?> value=3>Bị Hỏng</option>

                            </select>
                                </td>
                                
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                  <a href="quantri.php?page_layout=quanlyt"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							
                </div>
                </form>
            </div>
        </div>
    </div><!-- /.col-->
</div>