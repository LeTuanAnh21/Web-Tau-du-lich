<?php  
    $sqlct="SELECT * FROM bangcap";
    $queryct= mysqli_query($conn,$sqlct);


	if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$maso=$_POST['maso'];
        $hoten=$_POST['hoten'];        
        $cmnd=$_POST['cmnd']; 
         $dc=$_POST['dc']; 
         $ngaysinh=$_POST['ngaysinh'];       
         $ngaycap=$_POST['ngaycap']; 
         $noicap=$_POST['noicap']; 
        $sdt=$_POST['sdt']; 
		$id=$_POST['id'];
		$trinhdo=$_POST['trinhdo'];

		if (isset($email)&&isset($maso)&&isset($hoten)&&isset($cmnd)&&isset($dc)&&isset($ngaysinh)&&isset($ngaycap)&&isset($noicap)&&isset($sdt)&&isset($id)&&isset($trinhdo)) {
           	$sql="INSERT INTO laitau(email,maso,hoten,cmnd,dc,ngaysinh,ngaycap,noicap,sdt,id,trinhdo) VALUES('$email','$maso','$hoten','$cmnd','$dc','$ngaysinh','$ngaycap','$noicap','$sdt','$id','$trinhdo')";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlylt');
		}
	}
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM LÁI TÀU</h1>
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
                            <input type="text" class="form-control"  name="maso" required="">
                        </div>
                      <div class="form-group">
                            <label>Họ Tên</label>
                            <input type="text" class="form-control"  name="hoten" required="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control"  name="email" required="">
                        </div>
                        <div class="form-group">
                            <label>CMND</label>
                            <input type="text" class="form-control"  name="cmnd" required="">
                        </div>
                         <div class="form-group">
                            <label>Ngày Sinh</label>
                            <input type="date" class="form-control"  name="ngaysinh" required="">
                        </div>
                             <div class="form-group">
                            <label>SDT</label>
                            <input type="text" class="form-control"  name="sdt" required="">
                        </div>
                    </div>
                    <div class="col-md-6">
                           <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input type="text" class="form-control"  name="dc" required="">
                        </div>
                        <div class="form-group">
                            <label>Bằng Cấp</label>
                            <select name="id" class="form-control">
                                          <option>Chọn Bằng Cấp</option>
                                            <?php
                                                while($rowct= mysqli_fetch_array($queryct)){
                                            ?>
                                            <option value="<?php echo $rowct['id']; ?>"><?php echo $rowct['ten']; ?></option>
                                            <?php
                                            }
                                            ?>
                           </select> 
                        </div>
                           <div class="form-group">
                            <label>Trình Độ</label>
                               <select name="trinhdo" class="form-control">
                                            <option> HẠNG NHẤT</option>
                                            <option> HẠNG HAI</option>
                                             <option> HẠNG BA</option>
                                      </select>
                        </div>
                           <div class="form-group">
                            <label>Ngày Cấp</label>
                            <input type="date" class="form-control"  name="ngaycap" required="">
                        </div>
                           <div class="form-group">
                            <label>Nơi Cấp</label>
                            <input type="text" class="form-control"  name="noicap" required="">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlylt"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							

                </form>
            </div>
        </div>
    </div>
</div>
