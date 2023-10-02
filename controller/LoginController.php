<?php
session_start();
ob_start();
require_once '../model/LoginModel.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="../view/assets/img/customize/just-shop-logo.png" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../view/assets/css/customize.css">
        <script src="../view/assets/js/customize.js"></script>
</head>
<body>
<?php
          if(isset($_GET['lg'])){
            switch($_GET['lg']){
              case 'login':
                if(isset($_POST['signin'])){
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    if(checkLogin($email,$password) != []){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $kh = checkLogin($email,$password);
                        $_SESSION['role'] = $kh['vai_tro'];
                        $_SESSION['idkh'] = $kh['ma_kh'];
                        if($_SESSION['role']==1){ 
                            header('location: AdminController.php?ad=home');
                        } else{
                           header('location: index.php?act=home');
                        }
                    }else{
                        setcookie('fail','Kiểm tra lại Email và Mật khẩu do không tồn tại !',time() + 5,'/');
                        header('location: ?lg=login');
                    }
            
                }
                include '../view/client/component/login.php';
                break;
                case 'logout':
                    // logout tài khoản
                        unset($_SESSION['email'],$_SESSION['password'],$_SESSION['role'],$_SESSION['hoten'],$_SESSION['idkh']);
                        header('location: index.php');
                
                break;
              case 'register':
                // register 
                    if(isset($_POST['signup'])){
                        $hoten = $_POST['hoten'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                    
                        if(checkRegister($email) == null){
                            if(register($hoten,$password,$email)){
                                setcookie('success','Đăng ký tài khoản thành công !',time()+5,'/');
                                header('location: ?lg=login');
                            };
                        }else{
                            setcookie('error','Tên email đã tồn tại , quay lại đăng nhập !',time()+5,'/');
                            header("location: ?lg=register");
                        }
                    }
                include '../view/client/component/register.php';
                break;
              case 'forgot':
                if(isset($_POST['forgot'])){
                  require_once '../model/quenmk.php';
                    $email = $_POST['email'];
                    if(checkRegister($email) == true){
                        $kh= checkRegister($email);
                        if(sendEmail($email,$kh['matkhau'])){
                            setcookie('success','Gửi Email thành vui lòng vào email đã đăng ký để xem ',time()+5,'/');
                        }else{
                            setcookie('fail','Gửi Email không thành công',time()+5,'/');
                        }
                        header('location: ?lg=login');
                    }else{
                        setcookie('fail','Email bạn nhập không tồn tại trong hệ thống !',time()+5,'/');
                        header('location: ?lg=forgot');
                    }
                
                  
                }
                include '../view/client/component/forgot.php';
                break;
            }
          }else{
            include '../view/client/component/login.php';
          }
          
          ?>
</body>
</html>