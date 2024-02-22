<?php  
    $id_hdct=$_GET['id_hdct'];
    $sqlct="SELECT * FROM tau";
    $queryct= mysqli_query($conn,$sqlct);
    $sqltv="SELECT * FROM thanhvien";
    $querytv= mysqli_query($conn,$sqltv);

    $sql="SELECT * FROM hdct WHERE id_hdct='$id_hdct'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        $ngaybd=$_POST['ngaybd'];
        $ngaykt=$_POST['ngaykt'];
        $giatri=$_POST['giatri'];      
        $id_thanhvien=$_POST['id_thanhvien'];
        $id_t=$_POST['id_t'];
        if(isset($ngaybd) &&isset($ngaykt) && isset($giatri) )     
                {
            $sql="UPDATE hdct SET ngaybd='$ngaybd', ngaykt='$ngaykt',giatri='$giatri'," ." id_thanhvien='$id_thanhvien',"."id_t='$id_t' WHERE id_hdct=$id_hdct";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyhdct');
        }
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN HỢP ĐỒNG CHỦ TÀU</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mã Số</label> </br>
                               <?php echo $row['maso']; ?>     
                         </div>
                        <div class="form-group">
                            <label>Tàu</label>
                                    <select name="id_t" class="form-control">
                                            <?php  
                                                while($rowct= mysqli_fetch_array($queryct)) {
                                            ?>
                                            <option
                                                <?php
                                                if($row['id_t']==$rowct['id_t']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowct['id_t']; ?>"><?php echo $rowct['masot']; ?></option>
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
                  <a href="quantri.php?page_layout=quanlyhdct"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>