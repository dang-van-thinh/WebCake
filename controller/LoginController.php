<?php
session_start();
ob_start();
include '../model/LoginModel.php';
    if(isset($_POST['signin'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(checkLogin($email,$password) != []){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $kh = checkLogin($email,$password);
            $_SESSION['img'] = $kh['anh'];
            $_SESSION['hoten'] =$kh['hoten'];
            $_SESSION['role'] = $kh['vai_tro'];
            if($_SESSION['role']==1){ 
                header('location: AdminController.php?ad=home');
            } else{
               header('location: index.php?act=home');
            }
        }else{
            setcookie('error','Kiểm tra lại Email và Mật khẩu do không tồn tại !',time() + 10,'/');
            header('location: index.php?act=login');
        }

    }
// logout tài khoản
    if(isset($_GET['logout'])){
        unset($_SESSION['email'],$_SESSION['password'],$_SESSION['role'],$_SESSION['img'],$_SESSION['hoten']);
        header('location: index.php');
    }
// register 
if(isset($_POST['signup'])){
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    if(checkRegister($email) == null){
        if(register($hoten,$password,$email)){
            setcookie('success','Đăng ký tài khoản thành công !',time()+5,'/');
            header('location: /login.php');
        };
    }else{
        setcookie('error','Tên email đã tồn tại , quay lại đăng nhập !',time()+5,'/');
        header("location: ../view/client/register.php");
    }
}


?>