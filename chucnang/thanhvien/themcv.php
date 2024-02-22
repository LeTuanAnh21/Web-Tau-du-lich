<?php  
	if (isset($_POST['submit'])) {
		$maso=$_POST['maso'];
        $ten=$_POST['ten'];
           
		if (isset($maso)&&isset($ten)) {
			$sql="INSERT INTO chucvu(maso,ten) VALUES('$maso','$ten')";
			$query=mysqli_query($conn,$sql);
			header('location: quantri.php?page_layout=quanlycv');
		}
	}
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÊM CHỨC VỤ</h1>
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
		                            <th data-sortable="true">Chức Vụ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-checkbox="true">
                                        <input class="form-control" type="text" name="maso" value="<?php if(isset($_POST['maso']))echo $_POST['maso'];?>" required="">
                                    </td>
                                      <td data-checkbox="true">
                                        <input class="form-control" type="text" name="ten" value="<?php if(isset($_POST['ten']))echo $_POST['ten'];?>" required="">
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary" name="submit">Thêm mới</button>
                  <a href="quantri.php?page_layout=quanlycv"><input type="button" value="Quay Lại" class="btn btn-default" /></a>							
                </div>
                </form>
            </div>
        </div>
    </div>
</div>