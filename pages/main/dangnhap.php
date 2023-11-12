<?php
    if(isset($_POST['dangky'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky =  mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkhachhang,email,email,matkhau,nhaplaiMK) 
                        VALUES('".$email."', '".$matkhau."')");
        if($sql_dangky){
            echo '<p style="color: green;">Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            header('Location: index.php?quanly=giohang');
        }
        // session_destroy();

    }
?>
<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    /* animation */
    @keyframes fadeIn {
        from{
            opacity: 0;
        }
        to{
            opacity: 1;
        }
    }
    @keyframes growTh {
        from{
            transform: scale(0.7);
        }
        to{
            transform: scale(1);
        }
    }
    /* modal */
   .modal{
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        animation: fadeIn ease-in 0.1s;
    }
   .modal-overlay{
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.4);
    }
   .modal-body{
        margin: auto;
        position: relative;
        z-index: 1;
        animation: growTh linear 0.1s;
    }
    /* authen modal */
    .auth-form{
        width: 500px;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
    }
    .auth-container{
        padding: 0 32px;
    }
    .auth-header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 20px 12px;
        margin-top: 12px;
    }
    .heading-login{
        font-size: 1.6rem;
        font-weight: 400;
        color: #000;
    }
    .heading-switchBTN{
        font-size: 1.2rem;
        font-weight: 400;
        color: #e74a67;
    }
    .auth-input{
        width: 100%;
        height: 40px;
        margin-bottom: 16px;
        padding: 0 12px;
        font-size: 1rem;
        border: 1px solid #dbdbdb;
        border-radius: 2px;
        outline: none;

    }
    .auth-input:focus{
        border-color: #e74a67;
        box-shadow: 0 0 5px #e74a67;
    }
    .auth-aside{
        margin-top: 12px;
    }
    .policy{
        font-size: 1rem;
        line-height: 1.4rem;
        text-align: center;
        padding: 0 3px;
    }
    .policy-link{
        text-decoration: none;
        color: #e74a67;
    }
    /* btn */
    .btn{
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
    .btn.btn--normal:hover{
        background-color: rgba(0,0,0,0.1);
    }
    .btn.btn-primary{
        color: #fff;
        background-color: #e74a67;
    }
    .auth-controls{
        margin-top: 80px;
        display: flex;
        justify-content: flex-end;
    }
    .btn-back{
        margin-right: 8px;
        text-align: center;
    }
    /* social */
    .btn.btn-size-s{
        height: 32px;
        font-size: 12px;
        padding: 0 8px;
    }
    .social{
        background-color: #f5f5f5;
        padding: 16px 36px;
        display: flex;
        justify-content: space-between;
        margin-top: 22px;
    }
    .social-icon{
        font-size: 1.2rem;
    }
    .social-fb{
        color: #fff;
        background-color: #3A5A98;
    }
    /*mauf icon */
    .social-fb .social-icon{
        color: #fff;
    }
    .social-gg .social-icon{
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
    .social-title{
        margin: 0 36px;
    }
    /* login */
    .help{
        display: flex;
        justify-content: flex-end;

    }
    .help-link{
        text-decoration: none;
        font-size: 1rem;
        color: #939393;
    }
    .help-spare{
        display: block;
        height: 22px;
        margin: 0 16px;
        border-left: 1px solid #eaeaea;
    }
    .help-forgot{
        color: #e74a67;
    }
</style>
<div class="modal">
    <div class="modal-overlay"></div>

    <div class="modal-body">
        <!-- register : dang ky -->
        <!-- <div class="auth-form">
            <form action="" method="POST">
                <div class="auth-container">
                    <div class="auth-header">
                        <h3 class="heading-login">Đăng ký</h3>
                        <span class="heading-switchBTN">Đăng nhập</span>       
                    </div>

                    <div class="auth-with">
                        <div class="group">
                            <input type="text" placeholder="Họ và tên" name="hovaten" class="auth-input">
                        </div>
                        <div class="group">
                            <input type="text" placeholder="Email " name="email" class="auth-input">
                        </div>
                        <div class="group">
                            <input type="text" placeholder="Số điện thoại" name="dienthoai" class="auth-input">
                        </div>
                        <div class="group">
                            <input type="password" placeholder="Mật khẩu" name="matkhau" class="auth-input">
                        </div>
                        <div class="group">
                            <input type="password" placeholder="Nhập lại mật khẩu" name="NhaplaiMK" class="auth-input">
                        </div>
                    </div>

                    <div class="auth-aside">
                        <p class="policy">Bằng việc đăng ký, bạn đã đồng ý với Milk về
                            <a href="" class="policy-link">Điểu khoản dịch vụ</a> &
                            <a href="" class="policy-link">Chính sách bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-login">
                        <p><a href="index.php?quanly=dangnhap">Đăng nhập</a> nếu có tài khoản</p>
                    </div>

                    <div class="auth-controls">
                        <input type="button" class="btn btn-back btn--normal" name="trolai" value="TRỞ LẠI" style="width: 155px;">
                        <input type="submit" class="btn btn-primary" name="dangky" value="ĐĂNG KÝ">
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
        </div> -->

         <!-- login : dang nhap -->
         <div class="auth-form">
            <form action="" method="POST">
                <div class="auth-container">
                    <div class="auth-header">
                        <h3 class="heading-login">Đăng nhập</h3>
                        <span class="heading-switchBTN">Đăng ký</span>       
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

                    <div class="auth-controls">
                        <input class="btn btn-back btn--normal" name="trolai" value="TRỞ LẠI" style="width: 155px;">
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
