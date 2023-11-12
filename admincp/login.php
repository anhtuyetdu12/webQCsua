<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        // md5: mã hóa pasword
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location:index.php');
        }else{
            echo '<script> alert("Tài khoản hoặc mật khẩu không đúng. Vui lòng nhập lại !");</script>';
            header('Location:login.php');
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <style>
        body{
            background-color: #f2f2f2;
        }
        .wrapper-login{
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
        }
        .login-body{
            margin: auto;
            position: relative;
            z-index: 1;
            border: 1px dashed #e74a67;

        }
        table{
            width: 500px;
            margin: 10px 20px;
        }
        .first{
            padding: 10px;
        }
        input{
            height: 25px;
            width: 80%;
            margin: 10px;
            outline: none;

        }
        .login{
            border: none;
            margin: 10px 0;
            background-color: #e74a67;
            border-radius: 3px;
            font-size: 1rem;
            color: #fff;
            height: 30px;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="wrapper-login">
        <div class="login-body">
            <!-- autocomplete off: kh cho nhớ các tkhoan đã đnhap -->
            <form action="" method="post" autocomplete="off">
            <table style="text-align: center;border-collapse: collapse;">
                <tr>
                    <td colspan="2"><h2>Đăng nhập Admin</h2></td>
                </tr>
                <tr>
                    <td class="first">User name</td>
                    <td><input type="text" name="username" ></td>
                </tr>
                <tr>
                    <td class="first">Password</td>
                    <td><input type="password" name="password" ></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="dangnhap" value="Đăng nhập" style="width: 100%;" class="login">
                    </td>
                </tr>
            </table>
            </form>

        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>