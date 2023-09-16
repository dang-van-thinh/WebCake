<?php
require_once 'ConnectDB.php';
// khách hàng
function getAllKH(){
    $conn = connect();
    $query = "SELECT * FROM khach_hang";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getOneKH($idkh){
    $conn = connect();
    $query = "SELECT * FROM khach_hang WHERE ma_kh='$idkh'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
   $kq= $stmt->fetch();
   return $kq;
}
//end khách hàng

// loại hàng

function getAllLoaiHang(){
    $conn = connect();
    $query = "SELECT * FROM loai";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getOneLoaiHang($idlh){
    $conn = connect();
    $query = "SELECT * FROM loai WHERE ma_loai='$idlh'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
   $kq= $stmt->fetch();
   return $kq;
}
// end loại hàng
//  hàng hóa
function getAllHangHoa(){
    $conn = connect();
    $query = "SELECT * FROM hang_hoa";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getBanhMoi(){
    $conn = connect();
    $query = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 8 ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getBanhTTTop10(){
    $conn = connect();
    $query = "SELECT * FROM hang_hoa as hh JOIN loai 
    ON hh.ma_loai = loai.ma_loai
    WHERE loai.ma_loai = 4
    LIMIT 8
    ";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getHH_Loai($iddm){
    $conn = connect();
    $query = "SELECT * FROM hang_hoa WHERE ma_loai=$iddm";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getOneHangHoa($idhh){
    $conn = connect();
    $query = "SELECT * FROM hang_hoa WHERE ma_hh=$idhh";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq= $stmt->fetch();
    return $kq;
}
// end hàng hóa
// bình luận
function getAllBinhLuan(){
    $conn = connect();
    $query = "SELECT * FROM binh_luan";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
}
function getOneBinhLuan($id){
    $conn = connect();
    $query = "SELECT * FROM khach_hang WHERE ma_kh='$id'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
   $kq= $stmt->fetch();
   return $kq;
}
//end bình luận


?>