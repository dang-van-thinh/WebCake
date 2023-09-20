<?php
session_start();
ob_start();
require_once '../model/GetData.php';
require_once '../model/Update.php';
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
        case 'cart':
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
        case 'chitiet':
            
            if(isset($_GET['id']) && (isset($_GET['idloai']))){ 
                $idhh = $_GET['id'];
                $idloai = $_GET['idloai'];
                updateLuotXemSP($idhh);
            }
            $top4 = getBanhTop4($idloai);
            $onehh = getOneHangHoa($idhh);
            include '../view/client/chitietsanpham.php';
        break;
        case 'chitietkh':
            if(isset($_GET['idkh'])){ 
                $idkh = $_GET['idkh'];
                $kh= getOneKH($idkh);
            }
            include '../view/client/chitietkhachhang.php';
        break;
        case 'login':
            header('location: ../view/client/login.php');
        break;
        case 'register':
            header('location: ../view/client/register.php');
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

    