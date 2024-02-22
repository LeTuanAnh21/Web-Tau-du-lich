<?php  
    $id_hdkh=$_GET['id_hdkh'];
    $sqlkh="SELECT * FROM khachhang";
    $querykh= mysqli_query($conn,$sqlkh);

    $sqltv="SELECT * FROM thanhvien";
    $querytv= mysqli_query($conn,$sqltv);

    $sqll="SELECT * FROM lenh";
    $queryl= mysqli_query($conn,$sqll);

    $sql="SELECT * FROM hdkh WHERE id_hdkh='$id_hdkh'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        $ngaybd=$_POST['ngaybd'];
        $ngaykt=$_POST['ngaykt'];
        $giatri=$_POST['giatri'];      
        $id_thanhvien=$_POST['id_thanhvien'];
        $id_khachhang=$_POST['id_khachhang'];

                $id_lenh=$_POST['id_lenh'];
        if(isset($ngaybd) &&isset($ngaykt) && isset($giatri))     
                {
            $sql="UPDATE hdkh SET ngaybd='$ngaybd', ngaykt='$ngaykt',giatri='$giatri'," ." id_thanhvien='$id_thanhvien',"."id_khachhang='$id_khachhang' ,"."id_lenh='$id_lenh' WHERE id_hdkh=$id_hdkh";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyhdkh');
        }
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN HỢP ĐỒNG KHÁCH HÀNG</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mã Số</label></br>
                               <?php echo $row['maso']; ?>     
                         </div>
                        <div class="form-group">
                            <label>Khách Hàng</label>
                                <select name="id_khachhang" class="form-control">
                                            <?php  
                                                while($rowkh= mysqli_fetch_array($querykh)) {
                                            ?>
                                            <option
                                                <?php
                                                if($row['id_khachhang']==$rowkh['id_khachhang']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowkh['id_khachhang']; ?>"><?php echo $rowkh['hoten']; ?></option>
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
                                            <option 
                                             <?php
                                                if($row['id_thanhvien']==$rowtv['id_thanhvien']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowtv['id_thanhvien']; ?>"><?php if($rowtv['id']==2){ echo $rowtv['ht'];} ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                        </div>
                  <div class="form-group">
                            <label>Lệnh Khởi Hành</label>
                                              <select name="id_lenh" class="form-control">
                                            <?php  
                                                while($rowl= mysqli_fetch_array($queryl)) {
                                            ?>
                                            <option
                                                <?php
                                                if($row['id_lenh']==$rowl['id_lenh']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowl['id_lenh']; ?>"><?php echo $rowl['masol']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                        </div>

                      
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label>Ngày Bắt Đầu</label>
                            <input type="date" id="brithday"class="form-control"  name="ngaybd" value="<?php if(isset($_POST['ngaybd'])){echo $_POST['ngaybd'];}else{echo $row['ngaybd'];} ?>" required="">


                                    </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                                        <input type="date" id="brithday"class="form-control"  name="ngaykt" value="<?php if(isset($_POST['ngaykt'])){echo $_POST['ngaykt'];}else{echo $row['ngaykt'];} ?>" required="">
                        </div>
                         <div class="form-group">
                            <label>Gía Trị</label>
                                        <input type="text" class="form-control"  name="giatri" value="<?php if(isset($_POST['giatri'])){echo $_POST['giatri'];}else{echo $row['giatri'];} ?>" required="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                  <a href="quantri.php?page_layout=quanlyhdkh"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>