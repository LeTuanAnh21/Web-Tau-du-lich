<?php  
    $id_thanhvien=$_GET['id_thanhvien'];
    $sqlct="SELECT * FROM chucvu";
    $queryct= mysqli_query($conn,$sqlct);

    $sql="SELECT * FROM thanhvien WHERE id_thanhvien='$id_thanhvien'";

    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        
        $email=$_POST['email'];
		$ht=$_POST['ht'];		
        $cmnd=$_POST['cmnd'];

         $gt=$_POST['gt']; 
         $mat_khau=$_POST['mat_khau']; 
         $dc=$_POST['dc']; 
          $sdt=$_POST['sdt']; 
          if($_FILES['anh_sp']['name']==''){
            $anh_sp=$_POST['anh_sp'];
        }else{
            $anh_sp=$_FILES['anh_sp']['name'];
            $tmp_name=$_FILES['anh_sp']['tmp_name'];
        }
	        $id=$_POST['id'];

		if (isset($email)&&isset($dc)&&isset($mat_khau)&&isset($gt)&&isset($ht)&&isset($cmnd)&&isset($sdt)&&isset($id)) {
            move_uploaded_file($tmp_name, 'anh/'.$anh_sp);
			$sql="UPDATE thanhvien SET email='$email',dc='$dc',ht='$ht',gt='$gt',mat_khau='$mat_khau',cmnd='$cmnd',sdt='$sdt',anh_sp='$anh_sp',"."id='$id' WHERE id_thanhvien=$id_thanhvien";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlytv');
		}
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN</h1>
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
                            <input type="text" class="form-control"  name="ht" value="<?php if(isset($_POST['ht'])){echo $_POST['ht'];}else{echo $row['ht'];} ?>" required="">
                        </div>
                          <div class="form-group">
                            <label>CMND</label>
                            <input type="text" class="form-control"  name="cmnd" value="<?php if(isset($_POST['cmnd'])){echo $_POST['cmnd'];}else{echo $row['cmnd'];} ?>" required="">
                        </div>
                               
                        <div class="form-group">
                            <label>Giới tính</label>
                            <select name="gt" class="form-control">
                                <option <?php if($row["gt"]==1){echo "selected";}?> value=1>Nam</option>
                                <option <?php if($row["gt"]==2){echo "selected";}?> value=2>Nữ</option>

                            </select>
                                
                        </div>
                        <div class="form-group">
                            <label>Upload Hình ảnh</label>
                            <input type="file" name="anh_sp"><input type="hidden" name="anh_sp" value="<?php echo $row['anh_sp']; ?>">
                        </div> 
                 


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $row['email'];} ?>" required="">
                        </div>
                          <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input type="text" class="form-control" name="dc" value="<?php if(isset($_POST['dc'])){echo $_POST['dc'];}else{echo $row['dc'];} ?>" required="">
                        </div>
                         <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" class="form-control" name="sdt" value="<?php if(isset($_POST['sdt'])){echo $_POST['sdt'];}else{echo $row['sdt'];} ?>" required="">
                        </div>
                          <div class="form-group">
                            <label>Mật Khẩu</label>
                            <input type="text" class="form-control" name="mat_khau" value="<?php if(isset($_POST['mat_khau'])){echo $_POST['mat_khau'];}else{echo $row['mat_khau'];} ?>" required="">
                        </div>
                          <div class="form-group">
                            <label>Chức Vụ</label>
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

                            </select>
                        
                        </div>
                        

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                  <a href="quantri.php?page_layout=quanlytv"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>
