<?php  
    $id_lenh=$_GET['id_lenh'];
    $sqlt="SELECT * FROM tau";
    $queryt= mysqli_query($conn,$sqlt);

    $sqllt="SELECT * FROM laitau";
    $querylt= mysqli_query($conn,$sqllt);

    $sql="SELECT * FROM lenh WHERE id_lenh='$id_lenh'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        $masol=$_POST['masol'];
        $diadiem=$_POST['diadiem'];
        $ngaybd=$_POST['ngaybd'];
        $ngaykt=$_POST['ngaykt'];
      
        $id_t=$_POST['id_t'];
       $id_lt=$_POST['id_lt'];
        if(isset($masol) &&isset($diadiem) && isset($ngaybd) && isset($ngaykt) )     
                {
            $sql="UPDATE lenh SET masol='$masol', diadiem='$diadiem', ngaybd='$ngaybd', ngaykt='$ngaykt'," ." id_t='$id_t',"."id_lt='$id_lt' WHERE id_lenh=$id_lenh";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyl');
        }
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN LỆNH KHỞI HÀNH</h1>
    </div>
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" enctype="multipart/form-data" role="form">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mã Lệnh</label>
                            <input type="text" class="form-control"  name="masol" value="<?php if(isset($_POST['masol'])){echo $_POST['masol'];}else{echo $row['masol'];} ?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Tàu</label>
                              <select name="id_t" class="form-control">
                                            <?php  
                                                while($rowt= mysqli_fetch_array($queryt)) {
                                            ?>
                                            <option
                                                <?php
                                                if($row['id_t']==$rowt['id_t']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowt['id_t']; ?>"><?php echo $rowt['masot']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                        </div>
                    <div class="form-group">
                            <label>Lái Tàu</label>
                                  <select name="id_lt" class="form-control">
                                            <?php  
                                                while($rowlt= mysqli_fetch_array($querylt)) {
                                            ?>
                                            <option
                                                <?php
                                                if($row['id_lt']==$rowlt['id_lt']){
                                                    echo 'selected="selected"'; 
                                                }?>
                                            value="<?php echo $rowlt['id_lt']; ?>"><?php echo $rowlt['hoten']; ?></option>
                                            <?php 
                                                }
                                            ?>
                                        </select>
                        </div>
                      
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label>Ngày Xuất Phát</label>

                                        <input type="date" id="brithday"class="form-control"  name="ngaybd" value="<?php if(isset($_POST['ngaybd'])){echo $_POST['ngaybd'];}else{echo $row['ngaybd'];} ?>" required="">

                                    </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                                        <input type="date" id="brithday"class="form-control"  name="ngaykt" value="<?php if(isset($_POST['ngaykt'])){echo $_POST['ngaykt'];}else{echo $row['ngaykt'];} ?>" required="">
                        </div>
                         <div class="form-group">
                            <label>Địa Điểm</label>
                                        <input type="text" class="form-control"  name="diadiem" value="<?php if(isset($_POST['diadiem'])){echo $_POST['diadiem'];}else{echo $row['diadiem'];} ?>" required="">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                  <a href="quantri.php?page_layout=quanlyl"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							


                </form>
            </div>
        </div>
    </div>
</div>