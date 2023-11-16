<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
            $query = '';
        }
        if($tam == 'quanlyDanhMucSP' && $query =='them'){
            include("modules/quanlydanhmucSP/them.php");
            include("modules/quanlydanhmucSP/lietke.php");
            
        }else if($tam == 'quanlyDanhMucSP' && $query =='sua'){
            include("modules/quanlydanhmucSP/sua.php"); 
                      
        }else if($tam == 'quanlysanpham' && $query =='them'){
            include("modules/quanlySanPham/them.php");  
            include("modules/quanlySanPham/lietke.php");

        }else if($tam == 'quanlysanpham' && $query =='sua'){
            include("modules/quanlySanPham/sua.php");

        }else{ 
            include("modules/dashboard.php");
        }
    ?>
</div>
