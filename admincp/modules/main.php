<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query = '';
        }//danhmuc
        if($tam == 'quanlyDanhMucSP' && $query =='them'){
            include("modules/quanlydanhmucSP/them.php");
            include("modules/quanlydanhmucSP/lietke.php");
            
        }else if($tam == 'quanlyDanhMucSP' && $query =='sua'){
            include("modules/quanlydanhmucSP/sua.php"); 
        //sanpham
        }else if($tam == 'quanlysanpham' && $query =='them'){
            include("modules/quanlySanPham/them.php");  
            include("modules/quanlySanPham/lietke.php");

        }else if($tam == 'quanlysanpham' && $query =='sua'){
            include("modules/quanlySanPham/sua.php");
        //khachhang
        }else if($tam == 'quanlykhachhang' && $query =='them'){
            include("modules/quanlyKhachHang/them.php");  
            include("modules/quanlyKhachHang/lietke.php");

        }else if($tam == 'quanlykhachhang' && $query =='sua'){
            include("modules/quanlyKhachHang/sua.php");
        //hangsua
        }else if($tam == 'quanlyhangsua' && $query =='them'){
            include("modules/quanlyHangSua/them.php");  
            include("modules/quanlyHangSua/lietke.php");

        }else if($tam == 'quanlyhangsua' && $query =='sua'){
            include("modules/quanlyHangSua/sua.php");
        //thongtinsua
        }else if($tam == 'quanlythongtinsua' && $query =='them'){
            include("modules/quanlyTTSua/them.php");  
            include("modules/quanlyTTSua/lietke.php");

        }else if($tam == 'quanlythongtinsua' && $query =='sua'){
            include("modules/quanlyTTSua/sua.php");
        
        }else{ 
            include("modules/dashboard.php");
        }
    ?>
</div>
