<?php  
    $sqlt="SELECT * FROM tau";
    $queryt= mysqli_query($conn,$sqlt);


     $sqllt="SELECT * FROM laitau";
    $querylt= mysqli_query($conn,$sqllt);


    if(isset($_POST['submit'])){
        $masol=$_POST['masol'];
        $diadiem=$_POST['diadiem'];
        $ngaybd=$_POST['ngaybd'];
        $ngaykt=$_POST['ngaykt'];

        $id_t=$_POST['id_t'];
         $id_lt=$_POST['id_lt'];
        if(isset($masol) &&isset($diadiem) && isset($ngaybd) && isset($ngaykt)&& isset($id_t)&& isset($id_lt) )  {
         $sql="INSERT INTO lenh(masol,diadiem,ngaybd,ngaykt,id_t,id_lt) VALUES('$masol','$diadiem','$ngaybd','$ngaykt','$id_t','$id_lt')";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyl');
        }
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM LỆNH KHỞI HÀNH</h1>
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
                            <input type="text" class="form-control"  name="masol" required="">
                        </div>
                        <div class="form-group">
                            <label>Tàu</label>
                            <select name="id_t" class="form-control">
                                          <option>Chọn Tàu</option>
                                            <?php
                                                while($rowt= mysqli_fetch_array($queryt)){
                                            ?>
                                            <option value="<?php echo $rowt['id_t']; ?>"><?php echo $rowt['masot']; ?></option>
                                            <?php
                                            }
                                            ?>
                           </select> 
                        </div>
                    <div class="form-group">
                            <label>Lái Tàu</label>
                                <select name="id_lt" class="form-control">
                                          <option>Chọn Lái Tàu</option>
                                            <?php
                                                while($rowlt= mysqli_fetch_array($querylt)){
                                            ?>
                                            <option value="<?php echo $rowlt['id_lt']; ?>"><?php echo $rowlt['hoten']; ?></option>
                                            <?php
                                            }
                                            ?>
                              </select> 
                        </div>
                      
                    </div>
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label>Ngày Xuất Phát</label>

                                 <input class="form-control" type="date" name="ngaybd" value="<?php if(isset($_POST['ngaybd']))echo $_POST['ngaybd'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Ngày Kết Thúc</label>
                         <input class="form-control" type="date" name="ngaykt" value="<?php if(isset($_POST['ngaykt']))echo $_POST['ngaykt'];?>" required="">
                          </div>

                             <div class="form-group">
                        <label>Địa Điểm</label>
                           <textarea class="form-control" rows="3" name="diadiem"></textarea>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlyl"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							

                </form>
            </div>
        </div>
    </div>
</div>