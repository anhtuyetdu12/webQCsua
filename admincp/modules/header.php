<!-- đăng xuất -->
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header('Location:login.php');
}
?>

<p style="color: palevioletred;"><a href="index.php?dangxuat=1" style="margin: 0 10px; text-decoration: none; color: palevioletred; ">
    Đăng xuất: </a>
    <?php if (isset($_SESSION['dangnhap'])) {
        echo $_SESSION['dangnhap'];
    } ?></p>