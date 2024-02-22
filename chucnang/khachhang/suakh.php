<?php  
    $id_khachhang=$_GET['id_khachhang'];
    $sqlct="SELECT * FROM quoctich";
    $queryct= mysqli_query($conn,$sqlct);
	$sql = "SELECT * FROM khachhang WHERE id_khachhang=$id_khachhang";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
	if (isset($_POST['submit'])) {
     	$email=$_POST['email'];
		$hoten=$_POST['hoten'];
		$gioitinh=$_POST['gioitinh'];
		$CMND=$_POST['CMND'];
        $ns=$_POST['ns'];
         $sdt=$_POST['sdt'];
         $id=$_POST['id'];

		if (isset($email)&&isset($hoten)&&isset($gioitinh)&&isset($CMND)&&isset($ns)&&isset($sdt)&&isset($id)) {
			$sql="UPDATE khachhang SET email='$email',hoten='$hoten', gioitinh='$gioitinh', CMND='$CMND', ns='$ns' ,sdt='$sdt', id='$id' WHERE id_khachhang=$id_khachhang";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlykh');
		}
	}
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT KHÁCH HÀNG</h1>
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
                            <input class="form-control" type="text" name="CMND" value="<?php if(isset($_POST['CMND'])){echo $_POST['CMND'];}else{echo $row['CMND'];}?>" required="">

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
                            <label>Quốc Gia</label>
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
                        

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập Nhật</button>
                  <a href="quantri.php?page_layout=quanlykh"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>
