<?php  
    $id_ct=$_GET['id_ct'];
	$sql = "SELECT * FROM chutau WHERE id_ct=$id_ct";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$hoten=$_POST['hoten'];
        $cmnd=$_POST['cmnd'];
        $gioitinh=$_POST['gioitinh'];
        $ns=$_POST['ns'];

        $diachi=$_POST['diachi'];
        $sdt=$_POST['sdt'];

		if (isset($email)&&isset($hoten)&&isset($cmnd)&&isset($gioitinh)&&isset($ns)&&isset($diachi)&&isset($sdt)) {
			$sql="UPDATE chutau SET email='$email',hoten='$hoten',cmnd='$cmnd',gioitinh='$gioitinh',ns='$ns',diachi='$diachi',sdt='$sdt'WHERE id_ct=$id_ct";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlyct');
		}
	}
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN CHỦ TÀU</h1>
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
                            <label>CMND</label>
                                        <input class="form-control" type="text" name="cmnd" value="<?php if(isset($_POST['cmnd'])){echo $_POST['cmnd'];}else{echo $row['cmnd'];}?>" required="">
                        </div>
                                <div class="form-group">
                            <label>Email</label>
                                        <input class="form-control" type="text" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $row['email'];}?>" required="">
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label>Giới tính</label>
                             <select name="gioitinh" class="form-control">
                                <option <?php if($row["gioitinh"]==1){echo "selected";}?> value=1>Nam</option>
                                <option <?php if($row["gioitinh"]==2){echo "selected";}?> value=2>Nữ</option>

                            </select>
                                
                        </div>       
                          <div class="form-group">
                            <label>Ngày Sinh</label>
                                        <input class="form-control" type="date" id="brithday"name="ns" value="<?php if(isset($_POST['ns'])){echo $_POST['ns'];}else{echo $row['ns'];}?>" required="">
                        </div>
                         <div class="form-group">
                            <label>Số Điện Thoại</label>
                                        <input class="form-control" type="text" name="sdt" value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];}else{echo $row['sdt'];}?>" required="">

                        </div>
                          <div class="form-group">
                            <label>Địa Chỉ</label>
                       <input class="form-control" type="text" name="diachi" value="<?php if(isset($_POST['diachi'])){echo $_POST['diachi'];}else{echo $row['diachi'];}?>" required="">

                        </div>
                        

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập Nhật</button>
                  <a href="quantri.php?page_layout=quanlyct"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>
