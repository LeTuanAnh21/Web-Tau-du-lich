<script>
	function dangxuat(){
		var conf=confirm('Bạn có muốn đăng xuất tài khoản này không?');
		return conf;
	}
</script>


<?php  
    ob_start();
    session_start();
    include_once'./ketnoi.php';
?>
</?php>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HỆ THỐNG QUẢN LÝ TÀU DU LỊCH</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="js/lumino.glyphs.js"></script>

      
        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="quantri.php">
                    <span>                   
                             <img src="https://img.icons8.com/dusk/64/000000/cargo-ship--v1.png" width="40" height="35"/>
                                HỆ THỐNG QUẢN LÝ TÀU DU LỊCH</span>Admin</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">

                               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                     <use xlink:href="#stroked-male-user"></use></svg><span style="color: white;">Xin chào, <?php if(isset($_SESSION['email'])){echo $_SESSION['email'];} ?></span> <span class="caret"></span></a>
                          
                          
                 <ul class="dropdown-menu" role="menu">                                            
                         <li>
                                
                                  <a href="quantri.php?page_layout=thongtin&email=<?php echo $_SESSION['email'];?>&pass=<?php echo $_SESSION['pass'];?>">
                                                <img src="https://img.icons8.com/ios/50/000000/security-shield-green.png"width="20px"/>                                

                                Thông tin</a></li>
                  
                              <li><a onclick="return dangxuat();" href="./chucnang/dangxuat/dangxuat.php">
                              
                                    <img src="https://img.icons8.com/windows/32/000000/logout-rounded-up.png"width="20px"/>                              
                              Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Tìm kiếm">
                </div>
            </form>
            <ul class="nav menu">
                <li class="active"><a href="quantri.php">
                    
           <img src="https://img.icons8.com/neon/96/null/experimental-home-neon.png"width="30" height="30"/>
                TỔNG QUAN</a></li>
                <li class="parent ">
                    <a href="quantri.php?page_layout=quanlytv">
                    <span data-toggle="collapse" href="#sub-item-9">
                        
                    
                    <img src="https://img.icons8.com/fluency/48/FA5252/conference-background-selected.png"width="30" height="30"/>                
                
                </span> TÀI KHOẢN
                    </a>
                    <ul class="children collapse" id="sub-item-9">
                        <li>
                            <a href="quantri.php?page_layout=quanlycv">

                                Quản Lý Chức Vụ
                            </a>
                        </li>
                           <li>
                           <a class="" href="quantri.php?page_layout=themtv">
                                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                                            </a>
                        </li>
                    </ul>			
                </li>





                <li class="parent ">
                    <a href="quantri.php?page_layout=quanlykh">
                        <span data-toggle="collapse" href="#sub-item-2">
                            
                        <img src="https://img.icons8.com/external-yogi-aprelliyanto-flat-yogi-aprelliyanto/32/000000/external-customer-shopping-and-ecommerce-yogi-aprelliyanto-flat-yogi-aprelliyanto.png"width="30" height="30"/>                    
                    
                    </span>  KHÁCH HÀNG
                    </a>
                    <ul class="children collapse" id="sub-item-2">
                        <li>
                            <a class="" href="quantri.php?page_layout=quanlyqt">
                              Quản Lý Quốc Gia
                            </a>
                        </li>
                            <li>
                           <a class="" href="quantri.php?page_layout=themkh">
                                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                                            </a>
                        </li>

                    </ul>			
                </li>
                <li class="parent ">
                    <a href="quantri.php?page_layout=quanlyct">
                        <span data-toggle="collapse" href="#sub-item-3">
                            
                <img src="https://img.icons8.com/stickers/100/000000/gender-neutral-user.png" width="30" height="30"/>                    
                    
                    </span> CHỦ TÀU
                    </a>
                    <ul class="children collapse" id="sub-item-3">
                        <li>
                            <a class="" href="quantri.php?page_layout=themct">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>
                    </ul>				
                </li>
              <li class="parent ">
                    <a href="quantri.php?page_layout=quanlylt">
                        <span data-toggle="collapse" href="#sub-item-8">
                            
                <img src="https://img.icons8.com/color/48/000000/dharmacakra.png"width="30px"/>
                    </span>LÁI TÀU
                    </a>
                    <ul class="children collapse" id="sub-item-8">
                        <li>
                            <a class="" href="quantri.php?page_layout=quanlybc">
                     Quản Lý Bằng Cấp
                        </a>
                        </li>
                    <li>
                           
                      <a class="" href="quantri.php?page_layout=themlt">
                                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                                            </a>
                        </li>
                    </ul>				
                </li>

                 <li class="parent ">
                    <a href="quantri.php?page_layout=quanlyt">
                        <span data-toggle="collapse" href="#sub-item-4">
                            
                        <img src="https://img.icons8.com/dusk/64/000000/cargo-ship--v1.png" width="30" height="30"/>                    
                    </span>TÀU
                    </a>
                    <ul class="children collapse" id="sub-item-4">
                        <li>
                            <a class="" href="quantri.php?page_layout=themt">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>
                    </ul>				
                </li>

                <li class="parent ">
                    <a href="quantri.php?page_layout=quanlyhdkh">
                        <span data-toggle="collapse" href="#sub-item-5">
                            
                    <img src="https://img.icons8.com/external-febrian-hidayat-gradient-febrian-hidayat/64/000000/external-contract-business-and-management-febrian-hidayat-gradient-febrian-hidayat.png"width="30" height="30"/>                    
                    </span>HỢP ĐỒNG KHÁCH HÀNG
                    </a>
                    <ul class="children collapse" id="sub-item-5">
                        <li>
                            <a class="" href="quantri.php?page_layout=themhdkh">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>
                    </ul>			
                </li>


                 <li class="parent ">
                    <a href="quantri.php?page_layout=quanlyhdct">
                        <span data-toggle="collapse" href="#sub-item-6">
                            
             <img src="https://img.icons8.com/external-konkapp-flat-konkapp/64/000000/external-contract-real-estate-konkapp-flat-konkapp.png"width="30" height="30"/>                    
                    </span>HỢP ĐỒNG CHỦ TÀU
                    </a>
                    <ul class="children collapse" id="sub-item-6">
                        <li>
                            <a class="" href="quantri.php?page_layout=themhdct">
                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                            </a>
                        </li>                       
                    </ul>			
                </li>
                <li class="parent ">
                                    <a href="quantri.php?page_layout=quanlyl">
                                        <span data-toggle="collapse" href="#sub-item-7">
                                            
                                <img src="https://img.icons8.com/color/48/000000/speaker_1.png"width="30" height="30"/>
                                    </span>LỆNH KHỞI HÀNH
                                    </a>
                                    <ul class="children collapse" id="sub-item-7">
                                        <li>
                                            <a class="" href="quantri.php?page_layout=theml">
                                                <svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Thêm mới
                                            </a>
                                        </li>           
                                    </ul>			
                                </li>

                <li role="presentation" class="divider"></li>
                <li><a onclick="return dangxuat();" href="./chucnang/dangxuat/dangxuat.php">
              <img src="https://img.icons8.com/external-anggara-flat-anggara-putra/32/null/external-logout-user-interface-anggara-flat-anggara-putra.png"/>    
              <h9>  ĐĂNG XUẤT</h9>   
              </a></li>
           
           
            </ul>

        </div><!--/.sidebar-->

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
            <?php  
                //master page
                if(isset($_GET['page_layout'])){
                    switch ($_GET['page_layout']) {
                        case 'quanlytv': include_once'./chucnang/thanhvien/quanlytv.php';
                            break;       
                            
                            case 'quanlycv': include_once'./chucnang/thanhvien/quanlycv.php';
                            break;
                        case 'themtv': include_once'./chucnang/thanhvien/themtv.php';
                            break;
                        case 'suatv': include_once'./chucnang/thanhvien/suatv.php';
                            break; 
                             case 'suathongtin': include_once'./chucnang/thanhvien/suathongtin.php';
                            break;
                         case 'xoatv': include_once'./chucnang/thanhvien/xoatv.php';
                            break;
                      

                               case 'themcv': include_once'./chucnang/thanhvien/themcv.php';
                            break;
                        case 'suacv': include_once'./chucnang/thanhvien/suacv.php';
                            break;
                         case 'xoacv': include_once'./chucnang/thanhvien/xoacv.php';
                            break;

                             case 'quanlykh': include_once'./chucnang/khachhang/quanlykh.php';
                            break;
                            case 'themkh': include_once'./chucnang/khachhang/themkh.php';
                                break;
                            case 'suakh': include_once'./chucnang/khachhang/suakh.php';
                                break;
                            case 'xoakh': include_once'./chucnang/khachhang/xoakh.php';
                                break;
                            

                                 case 'quanlyqt': include_once'./chucnang/khachhang/quanlyqt.php';
                            break;
                            case 'themqt': include_once'./chucnang/khachhang/themqt.php';
                                break;
                            case 'suaqt': include_once'./chucnang/khachhang/suaqt.php';
                                break;
                            case 'xoaqt': include_once'./chucnang/khachhang/xoaqt.php';
                                break;

                                   case 'quanlyct': include_once'./chucnang/chutau/quanlyct.php';
                            break;
                            case 'themct': include_once'./chucnang/chutau/themct.php';
                                break;
                            case 'suact': include_once'./chucnang/chutau/suact.php';
                                break;
                            case 'xoact': include_once'./chucnang/chutau/xoact.php';
                            break;
                         


                            case 'quanlyt': include_once'./chucnang/tau/quanlyt.php';
                            break;
                            case 'themt': include_once'./chucnang/tau/themt.php';
                                break;
                            case 'suat': include_once'./chucnang/tau/suat.php';
                                break;
                            case 'xoat': include_once'./chucnang/tau/xoat.php';
                                break;   
                  

                            case 'quanlylt': include_once'./chucnang/laitau/quanlylt.php';
                            break;
                            case 'themlt': include_once'./chucnang/laitau/themlt.php';
                                break;
                            case 'sualt': include_once'./chucnang/laitau/sualt.php';
                                break;
                            case 'xoalt': include_once'./chucnang/laitau/xoalt.php';
                                break;   

                             case 'quanlybc': include_once'./chucnang/laitau/quanlybc.php';
                            break;
                            case 'thembc': include_once'./chucnang/laitau/thembc.php';
                                break;
                            case 'suabc': include_once'./chucnang/laitau/suabc.php';
                                break;
                            case 'xoabc': include_once'./chucnang/laitau/xoabc.php';
                                break;
                                    
                                
                                

                                  case 'quanlyl': include_once'./chucnang/lenh/quanlyl.php';
                            break;
                            case 'theml': include_once'./chucnang/lenh/theml.php';
                                break;
                            case 'sual': include_once'./chucnang/lenh/sual.php';
                                break;
                            case 'xoal': include_once'./chucnang/lenh/xoal.php';
                                break;   
                            
                            case 'thongtinl': include_once'./chucnang/lenh/thongtinl.php';
                                break;  



                              case 'quanlyhdkh': include_once'./chucnang/hdkh/quanlyhdkh.php';
                            break;
                            case 'themhdkh': include_once'./chucnang/hdkh/themhdkh.php';
                                break;
                            case 'suahdkh': include_once'./chucnang/hdkh/suahdkh.php';
                                break;
                            case 'xoahdkh': include_once'./chucnang/hdkh/xoahdkh.php';
                                break;   
                        

                         case 'quanlyhdct': include_once'./chucnang/hdct/quanlyhdct.php';
                            break;
                            case 'themhdct': include_once'./chucnang/hdct/themhdct.php';
                                break;
                            case 'suahdct': include_once'./chucnang/hdct/suahdct.php';
                                break;
                            case 'xoahdct': include_once'./chucnang/hdct/xoahdct.php';
                                break;    
                                

                        case 'thongtin': include_once'./chucnang/thanhvien/thongtin.php';
                            break;
                      case 'thongtinct': include_once'./chucnang/chutau/thongtinct.php';
                            break;
                      case 'thongtinlt': include_once'./chucnang/laitau/thongtinlt.php';
                            break;
                      case 'thongtint': include_once'./chucnang/tau/thongtint.php';
                            break;
                       case 'thongtinkh': include_once'./chucnang/khachhang/thongtinkh.php';
                            break; 
                            
                     case 'thongtinnv': include_once'./chucnang/thanhvien/thongtinnv.php';
                            break;
                        default:include_once'./gioithieu.php';
                    }
                }
                else{
                    include_once'./gioithieu.php';
                }
            ?>
        </div>	

        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>	
        <script src="js/bootstrap-table.js"></script>
        <link rel="stylesheet" href="css/bootstrap-table.css"/>
        <script>
            $('#calendar').datepicker({
            });

            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>	
    </body>

</html>
