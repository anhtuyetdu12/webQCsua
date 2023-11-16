<!-- phần chính -->
<div class="main">
    <?php
        include("pages/sidebar/sideBar.php");
    ?>

    <div class="main-content">
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam = '';
            }
            if($tam == 'CSKH'){
                include("main/cskh.php");
            }else if($tam == 'thongbao'){
                include("main/thongbao.php");
            }else if($tam == 'giohang'){
                include("main/giohang.php");
            }else if($tam == 'danhmucsanpham'){
                include("main/danhmuc.php");
            }else if($tam == 'sanpham'){
                include("main/sanpham.php");
            }else if($tam == 'dangky'){
                include("main/dangky.php");
            }else if($tam == 'thanhtoan'){
                include("main/thanhtoan.php");
            }else if($tam == 'dangnhap'){
                include("main/dangnhap.php");
            }else if($tam == 'camon'){
                include("main/camon.php");
            }
            else{
                include("main/tranggchu.php");
            }
        ?>
    </div>
</div>