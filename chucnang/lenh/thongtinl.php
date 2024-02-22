<?php  
    $id_lenh=$_GET['id_lenh'];
    $sql="SELECT tau.masot,tau.id_t,laitau.hoten,laitau.id_lt,lenh.id_lenh,lenh.masol,lenh.diadiem,lenh.ngaybd,lenh.ngaykt FROM lenh,tau,laitau WHERE tau.id_t=lenh.id_t AND laitau.id_lt=lenh.id_lt";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
?>


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">THÔNG TIN LỆNH KHỞI HÀNH</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">					
            <div class="panel-body" style="position: relative;">			
                <table data-toggle="table"  data-select-item-name="toolbar1" data-sort-name="name" data-sort-order="desc">
                    <thead>
                        <tr>	
                          <th data-sortable="true">Mã Lệnh</th>
                           <th data-sortable="true">Địa Điểm</th>
                           <th data-sortable="true">Tàu</th>
                            <th data-sortable="true">Lái Tàu</th>
                             <th data-sortable="true">Ngày Xuát Phát</th>      
                             <th data-sortable="true">Ngày Về</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="height: 300px;">
                    <td data-checkbox="true"><?php echo $row['masol']; ?></td>
                          <td data-checkbox="true"><?php echo $row['diadiem']; ?></td>

                              <td data-checkbox="true">    
                              <a href="quantri.php?page_layout=thongtint&id_t=<?php echo $row['id_t']; ?>"><?php echo $row['masot']; ?></a>
                            </td> 
                            
                            <td data-checkbox="true">    
                              <a href="quantri.php?page_layout=thongtinlt&id_lt=<?php echo $row['id_lt']; ?>"><?php echo $row['hoten']; ?></a>
                            </td>
                             <td data-sortable="true"><?php
	                        echo date("d/m/Y", strtotime($row['ngaybd']));                             
                             
                             ?></td>
                            <td data-sortable="true"><?php 
	                        echo date("d/m/Y", strtotime($row['ngaykt']));                             
                             ?></td>
                         
                        </tr>
                    </tbody>       

                </table>      
            </div>
        </div>         
    </div>
</div>