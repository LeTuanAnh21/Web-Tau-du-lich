<?php  
    $id=$_GET['id'];

    $sql="SELECT * FROM quoctich WHERE id='$id'";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);

    if(isset($_POST['submit'])){
        
		$ten=$_POST['ten'];		
		if (isset($id)&&isset($ten)) {
			$sql="UPDATE quoctich SET ten='$ten' WHERE id=$id";
            $query = mysqli_query($conn,$sql);
            header('location: quantri.php?page_layout=quanlyqt');
		}
    }

?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CẬP NHẬT THÔNG TIN QUỐC GIA</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
          
            <div class="panel-body">
                <div class="col-md-12">
                    <form role="form" method="post">
                        <table data-toggle="table">
                            <thead>
                                <tr>                                
		                             <th data-sortable="true">ID</th>
                                    <th data-sortable="true">Quốc Gia</th>
                
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                             <td data-checkbox="true"><?php echo $row['maso']; ?></td>
                            <td data-checkbox="true">
                                <!-- <?php echo $row['ten']; ?> -->
                              <input type="text" class="form-control"  name="ten" value="<?php if(isset($_POST['ten'])){echo $_POST['ten'];}else{echo $row['ten'];} ?>" required="">
                            </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
                  <a href="quantri.php?page_layout=quanlyqt"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							
                </div>
                </form>
            </div>
        </div>
    </div>
</div>