<?php  
    $sqlkh="SELECT * FROM khachhang";
    $querykh= mysqli_query($conn,$sqlkh);

     $sqltv="SELECT * FROM thanhvien";
    $querytv= mysqli_query($conn,$sqltv);

    $sqll="SELECT * FROM lenh";
    $queryl= mysqli_query($conn,$sqll);
    if(isset($_POST['submit'])){
       $maso=$_POST['maso'];
       $ngaybd=$_POST['ngaybd'];
        $ngaykt=$_POST['ngaykt'];
        $giatri=$_POST['giatri'];      
        $id_thanhvien=$_POST['id_thanhvien'];
        $id_khachhang=$_POST['id_khachhang'];
        $id_lenh=$_POST['id_lenh'];

        if(isset($ngaybd) &&isset($maso)&&isset($ngaykt) && isset($giatri) && isset($id_khachhang)&& isset($id_thanhvien)&& isset($id_lenh) )  {
         $sql="INSERT INTO hdkh(giatri,maso,ngaybd,ngaykt,id_khachhang,id_thanhvien,id_lenh) VALUES('$giatri','$maso','$ngaybd','$ngaykt','$id_khachhang','$id_thanhvien','$id_lenh')";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyhdkh');
        }
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM HỢP ĐỒNG KHÁCH HÀNG</h1>
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
                                 <input type="text" class="form-control"  name="maso" value="<?php if(isset($_POST['maso']))echo $_POST['maso'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Khách Hàng</label>
                                     <select name="id_khachhang" class="form-control">
                                          <option>Chọn Khách Hàng </option>
                                            <?php
                                                while($rowkh= mysqli_fetch_array($querykh)){
                                            ?>
                                            <option value="<?php echo $rowkh['id_khachhang']; ?>"><?php echo $rowkh['hoten']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                        </div>
                    <div class="form-group">
                            <label>Nhân Viên</label>
                                    <select name="id_thanhvien" class="form-control">
                                          <option>Chọn Nhân viên</option>
                                            <?php
                                                while($rowtv= mysqli_fetch_array($querytv)){
                                            ?>
                                            <option value="<?php
                                             echo $rowtv['id_thanhvien']; 
                                             ?>"><?php 
                                              if($rowtv['id']==2){ echo $rowtv['ht'];}
                                             ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                        </div>
                          <div class="form-group">
                            <label>Lệnh Khởi Hành</label>
                                               <select name="id_lenh" class="form-control">
                                          <option>Chọn Lệnh Khởi Hành</option>
                                            <?php
                                                while($rowl= mysqli_fetch_array($queryl)){
                                            ?>
                                            <option value="<?php echo $rowl['id_lenh']; ?>"><?php echo $rowl['masol']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                        </div>
                      
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label>Ngày Bắt Đầu</label>

                                 <input class="form-control" type="date" name="ngaybd" value="<?php if(isset($_POST['ngaybd']))echo $_POST['ngaybd'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                                 <input class="form-control" type="date" name="ngaykt" value="<?php if(isset($_POST['ngaykt']))echo $_POST['ngaykt'];?>" required="">
                          </div>

                             <div class="form-group">
                        <label>Gía Trị</label>
                                 <input type="text" class="form-control"  name="giatri" value="<?php if(isset($_POST['giatri']))echo $_POST['giatri'];?>" required="">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlyhdkh"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							

                </form>
            </div>
        </div>
    </div>
</div>