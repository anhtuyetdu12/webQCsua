<!-- đăng xuất -->
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>
<div class="heading" >
    <p style="color: #fff; padding: 6px 10px;">
        <a href="index.php?dangxuat=1" style=" text-decoration: none; color: #fff;">
            Đăng xuất: </a>
        <?php if (isset($_SESSION['dangnhap'])) {
            echo $_SESSION['dangnhap'];
        } ?>
    </p>
</div>