<?php 
session_start();
ob_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']) && ($_SESSION['role']==1) ):
    require_once '../model/InsertData.php';
    require_once '../model/Delete.php';
    require_once '../model/GetData.php';
    require_once '../model/Update.php';
    

?>

<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../view/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <?php include '../view/admin/component/head.php'?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include '../view/admin/component/menu.php'?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php include '../view/admin/component/nav.php'?>
          <!-- / Navbar -->

    <!-- home page -->
<?php
if(isset($_GET['ad'])){ 
    switch($_GET['ad']){ 
        case 'home':
            include '../view/admin/home.php';
        break;
        //hàng hóa
        case 'dshh':
            if(isset($_POST['key'])){
                $data = $_POST['key'];
                echo $data;
                header('location: ../model/jquery.php');
            }
            $hh = getAllHangHoa();
            if(isset($_GET['idhh'])){
                $idhh = $_GET['idhh'];
                delHH($idhh);
                header('location: ?ad=dshh');
            }
            include '../view/admin/san-pham/qlsanpham.php';
        break;
        case 'addsanpham':
            $loaihang = getAllLoaiHang();
            if(isset($_POST['addhanghoa'])){
                $tenhh = $_POST['ten_hang'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['gia_km'];
                $maloai = $_POST['loai_hang'];
                $ngaynhap = $_POST['ngay_nhap'];
                $dacbiet = $_POST['dac_biet'];
                $luotxem = $_POST['luot_xem'];
                $mota = $_POST['mota'];
                
                $folder = '../upload/san-pham/';
                $anh = $folder . basename($_FILES['anh']['name']);
                $tmp = $_FILES['anh']['tmp_name'];

                move_uploaded_file($tmp,$anh);
                
                if(setHangHoa($tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$luotxem,$mota)){
                    setcookie('success','Thêm dữ liệu thành công !',time()+10,'/');
                    header('location: ?ad=addsanpham');
                }else{
                    setcookie('fail','Thêm dữ liệu không thành công !',time()+10,'/');
                    header('location: ?ad=addsanpham');
                }
            }
            include '../view/admin/san-pham/addSp.php';
        break;
        case 'edithanghoa':
            $loaihang = getAllLoaiHang();
            if(isset($_GET['idhh'])){
                $idhh = $_GET['idhh'];
                $onehh = getOneHangHoa($idhh);
            }
            if(isset($_POST['edithh'])){
                $mahh = $_POST['ma_hang'];
                $tenhh = $_POST['ten_hang'];
                $gia = $_POST['gia'];
                $giamgia = $_POST['gia_km'];
                $maloai = $_POST['loai_hang'];
                $ngaynhap = $_POST['ngay_nhap'];
                $dacbiet = $_POST['dac_biet'];
                $luotxem = $_POST['luot_xem'];
                $mota = $_POST['mota'];
                if($_FILES['anhhh2']['name'] != ""){
                    $folder = '../upload/san-pham/';
                    $anh = $folder . basename($_FILES['anhhh2']['name']);
                    $tmp = $_FILES['anhhh2']['tmp_name'];
                    move_uploaded_file($tmp,$anh);
                }else{
                    $anh = $_POST['anhhh'];
                }
                updateHH($mahh,$tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$mota,$luotxem);
                setcookie('success','Cập nhật dữ liệu thành công !',time()+5,'/');
                header('location: ?ad=dshh');
            }
            include '../view/admin/san-pham/editsanpham.php';
        break;
            // khách hàng
        case 'addkh':
            if(isset($_POST['themkh']) && $_POST['themkh']){ 
                $tenkh = $_POST['tenkh'];
                $email = $_POST['email'];
                $kichhoat = $_POST['kichhoat'];
                $matkhau = $_POST['matkhau'];
                $vaitro = $_POST['vaitro'];

                $folder = '../upload/img/';
                $anh = $folder . basename($_FILES['anhkh']['name']);
                $tmp = $_FILES['anhkh']['tmp_name'];
                move_uploaded_file($tmp,$anh);
                if(setKhachHang($tenkh,$matkhau,$email,$anh,$kichhoat,$vaitro)){
                    setcookie('success','Thêm dữ liệu thành công !',time()+3,'/');
                    header('location: ?ad=addkh');

                }else{
                    setcookie('fail','Thêm dữ liệu không thành công !',time()+3,'/');
                    header('location: ?ad=addkh');
                }
            }
            include '../view/admin/khach-hang/addkhachhang.php';
        break;

        case 'dskh':
            $khs=getAllKH();
            if(isset($_GET['idkh'])){
                $idkh = $_GET['idkh'];
                $kh=getOneKH($idkh);
                unlink($kh['anh']);
                delKH($idkh);
                header('location: AdminController.php?ad=dskh');  
            }
            include '../view/admin/khach-hang/dskhachhang.php';
        break;
        case 'editkh':
            if(isset($_GET['idkh'])){
                $idkh = $_GET['idkh'];
                $onekh = getOneKH($idkh);
            }
            if(isset($_POST['capnhat'])&& $_POST['capnhat']){
                $hoten = $_POST['tenkh'];
                $email = $_POST['email'];
                $kichhoat = $_POST['kichhoat'];
                $matkhau = $_POST['matkhau'];
                $makh = $_POST['makh'];

                if($_FILES['anhkh2']['name'] != ''){
                    $folder = '../upload/img/';
                    $anh = $folder . basename($_FILES['anhkh2']['name']);
                    $tmp = $_FILES['anhkh2']['tmp_name'];
                    unlink($_POST['anhkh']);
                    move_uploaded_file($tmp,$anh);
                }else{
                    $anh = $_POST['anhkh'];
                }
                updateKH($makh,$hoten,$matkhau,$email,$anh,$kichhoat);
                setcookie('success','Thay đổi dữ liệu thành công !',time()+3,'/');  
                header('location: ?ad=dskh');
            }
            include '../view/admin/khach-hang/editkhachhang.php';
        break;
        //bình luận sản phẩm
        case 'bl':
            include '../view/admin/binh-luan/tonghopbl.php';
        break;
        case 'ctbl':
            include '../view/admin/binh-luan/chitietbl.php';
        break;
        // danh mục hàng hóa
        case 'addloaihang':

            include '../view/admin/loai-hang/addloaihang.php';
        break;
        case 'dsloaihang':
            $lh = getAllLoaiHang();
            include '../view/admin/loai-hang/dsloaihang.php';
        break;
        //thống kê
        default: include '../view/admin/home.php';
        break;
    }
}else{
    include '../view/admin/home.php';
}
?>
    <!--end home page -->
        </div>
    </div>
</div>

<?php include '../view/admin/component/script.php'?>

    
  </body>
</html>

<?php  else:setcookie('error_login','d', time()+3 ,'/');
            header('location: index.php');
?>
<?php 
   endif
?>