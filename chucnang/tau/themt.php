<?php  
    $sqlct="SELECT * FROM chutau";
    $queryct= mysqli_query($conn,$sqlct);

    if(isset($_POST['submit'])){
        $masot=$_POST['masot'];
        $namsx=$_POST['namsx'];
        $socho=$_POST['socho'];
        $tinhtrang=$_POST['tinhtrang'];
      if($_FILES['anh_sp']['name']==''){
            $error_anh_sp='<span style="color: red;">(*)</span>';
        }
        else{
            $anh_sp=$_FILES['anh_sp']['name'];
            $tmp_name=$_FILES['anh_sp']['tmp_name'];
        }             

        $id_ct=$_POST['id_ct'];
        if(isset($masot) &&isset($namsx)&& isset($anh_sp) && isset($socho) && isset($tinhtrang)&& isset($id_ct) )  {
                        move_uploaded_file($tmp_name, 'anhtau/'.$anh_sp);

         $sql="INSERT INTO tau(masot,namsx,anh_sp,socho,tinhtrang,id_ct) VALUES('$masot','$namsx','$anh_sp','$socho','$tinhtrang','$id_ct')";
            $query= mysqli_query($conn, $sql);
            header('location: quantri.php?page_layout=quanlyt');
        }
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM TÀU</h1>
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
                                 <input class="form-control" type="text" name="masot" value="<?php if(isset($_POST['masot']))echo $_POST['masot'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Chủ Tàu</label>
                             <select name="id_ct" class="form-control">
                                          <option>Chọn Chủ Tàu</option>
                                            <?php
                                                while($rowct= mysqli_fetch_array($queryct)){
                                            ?>
                                            <option value="<?php echo $rowct['id_ct']; ?>"><?php echo $rowct['hoten']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>              
                       </div>
                     <div class="form-group">
                            <label>Số chỗ</label>
                                <input class="form-control" type="text" name="socho" value="<?php if(isset($_POST['socho']))echo $_POST['socho'];?>" required="">
                        </div>
                           
                    </div>
                     <div class="col-md-6">

                         <div class="form-group">
                            <label>Năm Sản Xuất</label>
                                <input class="form-control" type="date" name="namsx" value="<?php if(isset($_POST['namsx']))echo $_POST['namsx'];?>" required="">
                        </div>
                        <div class="form-group">
                            <label>Upload Hình ảnh</label>
                            <input type="file" name="anh_sp">
                        </div>
                         <div class="form-group">
                            <label>Tình Trạng</label>
                            <select name="tinhtrang" class="form-control">
                                         <option value=1>Sẵn Sàng</option>
                                        <option value=2>Hoạt Động</option>
                                       <option value=3>Bị Hỏng</option>

                                </select>             
                       </div>
                    </div>

                   
                    <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlyt"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							

                </form>
            </div>
        </div>
    </div>
</div>
