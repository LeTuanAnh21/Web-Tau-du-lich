<?php  
	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
	   $maso=$_POST['maso'];
        $hoten=$_POST['hoten'];
        $cmnd=$_POST['cmnd'];
        $gioitinh=$_POST['gioitinh'];
         $ns=$_POST['ns'];
        $diachi=$_POST['diachi']; 
        $sdt=$_POST['sdt'];
		if (isset($email)&&isset($maso)&&isset($hoten)&&isset($cmnd)&&isset($gioitinh)&&isset($ns)&&isset($diachi)&&isset($sdt)) {
			$sql="INSERT INTO chutau(email,maso,hoten,cmnd,gioitinh,ns,diachi,sdt) VALUES('$email','$maso','$hoten','$cmnd','$gioitinh','$ns','$diachi','$sdt')";
			$query=mysqli_query($conn,$sql);
			header('location: quantri.php?page_layout=quanlyct');
		}
	}
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM CHỦ TÀU</h1>
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
                                        <input class="form-control" type="text" name="maso" placeholder="Mã số"value="<?php if(isset($_POST['maso']))echo $_POST['maso'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Họ Tên</label>
                                        <input class="form-control" type="text" name="hoten" placeholder="Họ và Tên"value="<?php if(isset($_POST['hoten']))echo $_POST['hoten'];?>" required="">
                        </div>
                          <div class="form-group">
                            <label>CMND</label>
                                        <input class="form-control" type="text" name="cmnd"placeholder="CMND" value="<?php if(isset($_POST['cmnd']))echo $_POST['cmnd'];?>" required="">
                        </div>
                                <div class="form-group">
                            <label>Email</label>
                                        <input class="form-control" type="text" name="email" placeholder="Email"value="<?php if(isset($_POST['email']))echo $_POST['email'];?>" required="">
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                            <label>Giới tính</label>
                             <select name="gioitinh" class="form-control">
                                                <option value=1> Nam</option>
                                                <option value=2> Nữ</option>
                                            </select>
                                
                        </div>       
                          <div class="form-group">
                            <label>Ngày Sinh</label>
                                        <input class="form-control" type="date" id="brithday" name="ns" value="<?php if(isset($_POST['ns']))echo $_POST['ns'];?>" required="">
                        </div>
                         <div class="form-group">
                            <label>Số Điện Thoại</label>
                                        <input class="form-control" type="text" name="sdt"placeholder="Điện Thoại" value="<?php if(isset($_POST['sdt']))echo $_POST['sdt'];?>" required="">

                        </div>
                          <div class="form-group">
                            <label>Địa Chỉ</label>
                                        <input class="form-control" type="text" name="diachi" placeholder="Địa Chỉ"value="<?php if(isset($_POST['diachi']))echo $_POST['diachi'];?>" required="">

                        </div>
                        

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlyct"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>
