<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = $_POST['matkhau'];
    $matkhau1 = md5($matkhau);
    $sql =  "SELECT count(*) as dem FROM tbl_dangky WHERE email = '".$email."' AND maukhau = '".$matkhau1."' ";
    $query = mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_assoc($query);
    if ($row["dem"] > 0) {
        // $row_data = mysqli_fetch_array($row);
        // $_SESSION['dangky'] = $row_data['tenkhachhang'];
        // $_SESSION['id_khachhang'] = $row_data['id_dangky'];
        echo '<span style="color:green;">Đăng nhập thành công</span>';
        header('Location:index.php?quanly=giohang');
    } else {
        echo '<p style="color:red;">Tài khoản hoặc mật khẩu không đúng.Vui lòng nhập lại !</p>';
        header('Location:login.php');
    }
    // session_destroy();

}

?>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    /* animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes growTh {
        from {
            transform: scale(0.7);
        }

        to {
            transform: scale(1);
        }
    }

    /* modal */
    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        animation: fadeIn ease-in 0.1s;
    }

    .modal-overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-body {
        margin: auto;
        position: relative;
        z-index: 1;
        animation: growTh linear 0.1s;
    }

    /* authen modal */
    .auth-form {
        width: 500px;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
    }

    .auth-container {
        padding: 0 32px;
    }

    .auth-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 12px;
        margin-top: 12px;
    }

    .heading-login {
        font-size: 1.6rem;
        font-weight: 400;
        color: #000;
    }

    .heading-switchBTN {
        font-size: 1rem;
        font-weight: 400;
        color: #e74a67;
        cursor: pointer;
    }

    .auth-input {
        width: 100%;
        height: 40px;
        margin-bottom: 16px;
        padding: 0 12px;
        font-size: 1rem;
        border: 1px solid #dbdbdb;
        border-radius: 2px;
        outline: none;

    }

    .auth-input:focus {
        border-color: #e74a67;
        box-shadow: 0 0 5px #e74a67;
    }

    .auth-aside {
        margin-top: 12px;
    }

    .policy {
        font-size: 1rem;
        line-height: 1.4rem;
        text-align: center;
        padding: 0 3px;
    }

    .policy-link {
        text-decoration: none;
        color: #e74a67;
    }

    /* btn */
    .btn {
        min-width: 142px;
        height: 34px;
        border: none;
        text-decoration: none;
        border-radius: 3px;
        font-size: 1rem;
        padding: 0 12px;
        outline: none;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn.btn--normal:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .btn.btn-primary {
        color: #fff;
        background-color: #e74a67;
    }

    .auth-controls {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .btn-back {
        margin-right: 8px;
        text-align: center;
    }

    /* social */
    .btn.btn-size-s {
        height: 32px;
        font-size: 12px;
        padding: 0 8px;
    }

    .social {
        background-color: #f5f5f5;
        padding: 16px 36px;
        display: flex;
        justify-content: space-between;
        margin-top: 22px;
    }

    .social-icon {
        font-size: 1.2rem;
    }

    .social-fb {
        color: #fff;
        background-color: #3A5A98;
    }

    /*mauf icon */
    .social-fb .social-icon {
        color: #fff;
    }

    .social-gg .social-icon {
        background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
    }

    .social-gg {
        background-color: #fff;
        color: #666;
    }

    .social-title {
        margin: 0 36px;
    }

    /* login */
    .help {
        display: flex;
        justify-content: flex-end;

    }

    .help-link {
        text-decoration: none;
        font-size: 1rem;
        color: #939393;
    }

    .help-spare {
        display: block;
        height: 22px;
        margin: 0 16px;
        border-left: 1px solid #eaeaea;
    }

    .help-forgot {
        color: #e74a67;
    }

    .auth-register {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
        color: #757575;
    }
</style>
<div class="modal">
    <div class="modal-overlay"></div>
    <script>
        // Hàm xử lý khi nhấn nút "Đăng ký"
        function register() {
            // Chuyển hướng đến trang đăng ký PHP
            window.location.href = 'index.php?quanly=dangky';
        }

        function backhome() {
            // Chuyển hướng đến trang đăng ký PHP
            window.location.href = 'index.php';
        }
        
    </script>
    <div class="modal-body">


        <!-- login : dang nhap -->
        <div class="auth-form">
            <form action="" method="POST" >
                <div class="auth-container">
                    <div class="auth-header">
                        <h3 class="heading-login">Đăng nhập</h3>
                    </div>

                    <div class="auth-with">
                        <div class="group">
                            <input type="text" placeholder="Email" name="email" class="auth-input">
                        </div>
                        <div class="group">
                            <input type="password" placeholder="Mật khẩu" name="matkhau" class="auth-input">
                        </div>

                    </div>

                    <div class="auth-aside">
                        <div class="help">
                            <a href="" class="help-link help-forgot">Quên mật khẩu</a>
                            <span class="help-spare"></span>
                            <a href="" class="help-link">Cần trợ giúp?</a>
                        </div>
                    </div>
                    <div class="auth-register">
                        <p>Bạn chưa có tài khoản?
                            <a class="heading-switchBTN" onclick="register()">Đăng ký</a>
                        </p>

                    </div>

                    <div class="auth-controls">
                        <input type="button" class="btn btn-back btn--normal" name="trolai" value="TRỞ LẠI" style="width: 155px;" onclick="backhome()">
                        <input type="submit" class="btn btn-primary" name="dangky" value="ĐĂNG NHẬP">
                    </div>

                </div>

                <div class="social">
                    <a href="" class="social-fb btn btn-size-s">
                        <i class="social-icon fa-brands fa-square-facebook"></i>
                        <span class="social-title">Kết nối với Facebook</span>
                    </a>
                    <a href="" class="social-gg btn btn-size-s">
                        <i class="social-icon fa-brands fa-google"></i>
                        <span class="social-title">Kết nối với Google</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>