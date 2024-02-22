<?php  

    $sqlct="SELECT * FROM chucvu";
    $queryct= mysqli_query($conn,$sqlct);

	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
	   $maso=$_POST['maso'];
        $ht=$_POST['ht'];
            $cmnd=$_POST['cmnd'];


        if($_FILES['anh_sp']['name']==''){
            $error_anh_sp='<span style="color: red;">(*)</span>';
        }
        else{
            $anh_sp=$_FILES['anh_sp']['name'];
            $tmp_name=$_FILES['anh_sp']['tmp_name'];
        }            $gt=$_POST['gt'];
            $dc=$_POST['dc'];
            $sdt=$_POST['sdt'];
		$id=$_POST['id'];
    	$quyen_truy_cap=$_POST['quyen_truy_cap'];
    	$mat_khau=$_POST['mat_khau'];

		if (isset($email)&&isset($maso)&&isset($ht)&&isset($cmnd)&&isset($gt)&&isset($dc)&&isset($sdt)&&isset($anh_sp)&&isset($id)&&isset($mat_khau)&&isset($quyen_truy_cap)) {
            move_uploaded_file($tmp_name, 'anh/'.$anh_sp);
			$sql="INSERT INTO thanhvien(email,maso,ht,cmnd,gt,dc,sdt,anh_sp,id,mat_khau,quyen_truy_cap) VALUES('$email','$maso','$ht','$cmnd','$gt','$dc','$sdt','$anh_sp','$id','$mat_khau','$quyen_truy_cap')";
			$query=mysqli_query($conn,$sql);
			header('location: quantri.php?page_layout=quanlytv');
		}
	}
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM NHÂN VIÊN</h1>
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
                                        <input class="form-control" type="text" name="maso" placeholder="Mã Số" value="<?php if(isset($_POST['maso']))echo $_POST['maso'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Họ Tên</label>
                                        <input class="form-control" type="text" name="ht"placeholder="Họ và Tên" value="<?php if(isset($_POST['ht']))echo $_POST['ht'];?>" required="">
                        </div>  
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" placeholder="Email"value="<?php if(isset($_POST['email']))echo $_POST['email'];?>" required="">
                        </div>
                          <div class="form-group">
                            <label>CMND</label>
                                        <input class="form-control" type="text" name="cmnd" placeholder="CMND"value="<?php if(isset($_POST['cmnd']))echo $_POST['cmnd'];?>" required="">
                        </div>
                               
                    
                        <div class="form-group">
                            <label>Upload Hình ảnh</label>
                            <input type="file" name="anh_sp">
                        </div> 
                 


                    </div>
                    <div class="col-md-6">
                          <div class="form-group">
                            <label>Giới tính</label>
                             <select name="gt" class="form-control">
                                                <option value=1> Nam</option>
                                                <option value=2> Nữ</option>
                                            </select>
                                
                        </div>
                          <div class="form-group">
                            <label>Địa Chỉ</label>
                                        <input class="form-control" type="text" name="dc" placeholder="Địa Chỉ"value="<?php if(isset($_POST['dc']))echo $_POST['dc'];?>" required="">
                        </div>
                         <div class="form-group">
                            <label>Số Điện Thoại</label>
                                        <input class="form-control" type="text" name="sdt" placeholder="Điện Thoại"value="<?php if(isset($_POST['sdt']))echo $_POST['sdt'];?>" required="">
                        </div>       
                   
                        
                        
                         <div class="form-group">
                            <label>Quyền Truy Cập</label>
                                 <select name="quyen_truy_cap" class="form-control">
                                    <option value=2>ADMIN</option>
                                    <option value=1>NHÂN VIÊN</option>
                                </select>                        </div>
                          <div class="form-group">
                            <label>Chức Vụ</label>
                             <select name="id" class="form-control">
                                          <option>Chọn Chức Vụ</option>
                                            <?php
                                                while($rowct= mysqli_fetch_array($queryct)){
                                            ?>
                                            <option value="<?php echo $rowct['id']; ?>"><?php echo $rowct['ten']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                        
                        </div>
                                <!-- <div class="form-group">
                            <label>Mật Khẩu</label>
                             <input class="form-control" type="text" name="mat_khau" placeholder="Mật Khẩu"value="<?php if(isset($_POST['mat_khau']))echo $_POST['mat_khau'];?>" required="">
                        </div>   -->

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlytv"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>
