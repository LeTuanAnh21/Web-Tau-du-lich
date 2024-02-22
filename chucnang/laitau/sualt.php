<?php  

    $id_lt=$_GET['id_lt'];
     $sqlct="SELECT * FROM bangcap";
    $queryct= mysqli_query($conn,$sqlct);
	$sql = "SELECT * FROM laitau WHERE id_lt=$id_lt";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
        $hoten=$_POST['hoten'];        
        $cmnd=$_POST['cmnd']; 
         $dc=$_POST['dc']; 
         $ngaysinh=$_POST['ngaysinh'];       
         $ngaycap=$_POST['ngaycap']; 
         $noicap=$_POST['noicap']; 
          $sdt=$_POST['sdt']; 
		$id=$_POST['id'];
		$trinhdo=$_POST['trinhdo'];
		if (isset($email)&&isset($hoten)&&isset($cmnd)&&isset($dc)&&isset($ngaysinh)&&isset($ngaycap)&&isset($noicap)&&isset($sdt)&&isset($id)&&isset($trinhdo)) {
			$sql="UPDATE laitau SET email='$email',hoten='$hoten',cmnd='$cmnd',dc='$dc',ngaysinh='$ngaysinh',ngaycap='$ngaycap',noicap='$noicap',sdt='$sdt',id='$id',trinhdo='$trinhdo' WHERE id_lt=$id_lt";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlylt');
		}
	}
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN LÁI TÀU</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mã Số</label>
                                                        <br>

                                        <?php echo $row['maso']; ?>
                        </div>
                      <div class="form-group">
                            <label>Họ Tên</label>
                             <input class="form-control" type="text" name="hoten" value="<?php if(isset($_POST['hoten'])){echo $_POST['hoten'];}else{echo $row['hoten'];}?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $row['email'];}?>" required="">
                        </div>
                        <div class="form-group">
                            <label>CMND</label>
                           <input class="form-control" type="text" name="cmnd" value="<?php if(isset($_POST['cmnd'])){echo $_POST['cmnd'];}else{echo $row['cmnd'];}?>" required="">

                        </div>
                         <div class="form-group">
                            <label>Ngày Sinh</label>
                             <input class="form-control" type="date" name="ngaysinh" value="<?php if(isset($_POST['ngaysinh'])){echo $_POST['ngaysinh'];}else{echo $row['ngaysinh'];}?>" required="">
                        </div>
                             <div class="form-group">
                            <label>SDT</label>
                             <input class="form-control" type="text" name="sdt" value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];}else{echo $row['sdt'];}?>" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                           <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" type="text" name="dc" value="<?php if(isset($_POST['dc'])){echo $_POST['dc'];}else{echo $row['dc'];}?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Bằng Cấp</label>
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
                        </div>
                           <div class="form-group">
                            <label>Trình Độ</label>
                            <select name="trinhdo" class="form-control">
                                <option <?php if($row["trinhdo"]=='HẠNG NHẤT'){echo "selected";}?> value='HẠNG NHẤT'>HẠNG NHẤT</option>
                                <option <?php if($row["trinhdo"]=='HẠNG HAI'){echo "selected";}?> value='HẠNG HAI'>HẠNG HAI</option>
                                <option <?php if($row["trinhdo"]=='HẠNG BA'){echo "selected";}?> value='HẠNG BA'>HẠNG BA</option>

                            </select>
                        </div>
                           <div class="form-group">
                            <label>Ngày Cấp</label>
                                        <input class="form-control" type="date" name="ngaycap" value="<?php if(isset($_POST['ngaycap'])){echo $_POST['ngaycap'];}else{echo $row['ngaycap'];}?>" required="">
                        </div>
                           <div class="form-group">
                            <label>Nơi Cấp</label>
                                        <input class="form-control" type="text" name="noicap" value="<?php if(isset($_POST['noicap'])){echo $_POST['noicap'];}else{echo $row['noicap'];}?>" required="">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập Nhật</button>
                  <a href="quantri.php?page_layout=quanlylt"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							

                </form>
            </div>
        </div>
    </div>
</div>
