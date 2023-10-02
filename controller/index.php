<?php
session_start();
ob_start();
require_once '../model/GetData.php';
require_once '../model/Update.php';
require_once '../model/InsertData.php';
require_once '../model/ConnectDB.php';
?>
<?php
if(isset($_SESSION['role']) && ($_SESSION['role']!=0)){
    header('location: AdminController.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../view/client/component/head.php';?>
</head>
<body>
<?php 
$loai = getAllLoaiHang();
include '../view/client/component/header.php';?>    
<?php 
if(isset($_COOKIE['error_login'])){
    include '../view/client/component/toast.php';
}
?>    

<?php

if(isset($_GET['act'])){
    switch($_GET['act']){
        case 'home':
            $hhmoi = getBanhMoi();
            $hhtt = getBanhTTTop10();
            include '../view/client/home.php';
        break;
        case 'lienhe':
            include '../view/client/lienhe.php';
        break;
        case 'cart':
            if(isset($_SESSION['idkh'])){
                $idkh= $_SESSION['idkh'];
                $kh = getOneKH($idkh);
            }
            include '../view/client/cart.php';
        break;
        case 'loaihh':
            if(isset($_GET['iddm'])){
                $iddm = $_GET['iddm'];
            }
        
            $loaihh =  getOneLoaiHang($iddm);
            $hh_loai = getHH_Loai($iddm);
            include '../view/client/hanghoa_loai.php';
        break;
        case 'search':
            if(isset($_POST['search'])){
                $search  = $_POST['search_product'];
                $hhsearch = loadSearchhh($search);
            }
            include '../view/client/search.php';
        break;
        case 'chitiet':
            if(isset($_GET['id']) && (isset($_GET['idloai']))){ 
                $idhh = $_GET['id'];
                $idloai = $_GET['idloai'];
                updateLuotXemSP($idhh);
                $onehh = getOneHangHoa($idhh);
                $top4 = getBanhTop4($idloai);
            }
                $bl = getBLHangHoa($idhh);
                $tongbl = getOneBinhLuan($idhh);                
            include '../view/client/chitietsanpham.php';
        break;
        case 'comment':
            if(isset($_POST['submitbl'])){      
            $makh = $_SESSION['idkh'];
            $idhh = $_POST['idhh'];
            $noidung = $_POST['noidung'];
            $ngaybl = date('Y-m-d');
            setBL($noidung,$makh,$idhh,$ngaybl);
            $id=$_POST['id'];
            $idloai = $_POST['idloai'];
            header("location: ?act=chitiet&id=$id&idloai=$idloai");
            }
        break;
        case 'updatekh':
            $check = true;
            if(isset($_POST['updatekh'])){
                if(isset($_POST['old_password'])){
                    if($_POST['old_password'] == $_POST['password']){
                        $matkhau = $_POST['new_password'];
                        $checkUpdate = true;
                    }else{
                        $idkh = $_SESSION['idkh'];
                        $checkUpdate = false;
                        setcookie('error','Nhập mật khẩu không chính xác !',time()+5,'/');
                        header('location: ?act=chitietkh&idkh='.$idkh.'');
                    }
                }else{
                    $matkhau = $_POST['password'];
                }
                $makh = $_POST['idkh'];
                $hoten = $_POST['ten_kh'];
                $email = $_POST['email'];
                $dia_chi = $_POST['diachi'];
                $phone = $_POST['phone'];
                if($_FILES['anh2']['name'] == ""){
                    $anh = $_POST['anh'];
                }else{
                    $folder = "../upload/img/";
                    $anh = $folder . basename($_FILES['anh2']['name']);
                    $file_tmp = $_FILES['anh2']['tmp_name'];
                    move_uploaded_file($file_tmp,$anh); 
                }
                if($checkUpdate){
                    updateKH($makh,$hoten,$matkhau,$email,$anh,$dia_chi,$phone);
                    header('location: '.$_SERVER['PHP_SELF']);
                }
            }
        break;
        case 'chitietkh':
            
            if(isset($_GET['idkh'])){ 
                $idkh = $_GET['idkh'];
                $kh = getOneKH($idkh);
            }
            include '../view/client/chitietkhachhang.php';
        break;
        case 'login':
            header('location: LoginController.php');
        break;
        case 'register':
            header('location: LoginController.php?lg=register');
        break;
        default:
        $hhtt = getBanhTTTop10();
        $hhmoi = getBanhMoi();
        include '../view/client/home.php';
    }
}else{
    $hhmoi = getBanhMoi();
    $hhtt = getBanhTTTop10();
    include '../view/client/home.php';
}

?>
<?php include '../view/client/component/footer.php'?>
</body>
</html>

    