<?php
// khách hàng
require_once 'PDO.php';
function getAllKH(){
    $query = "SELECT * FROM khach_hang";
    return pdo_query($query);
}
function getOneKH($idkh){
    $query = "SELECT * FROM khach_hang WHERE ma_kh='$idkh'";
    return pdo_query_one($query);
}
//end khách hàng

// loại hàng

function getAllLoaiHang(){
    $query = "SELECT * FROM loai";
    return pdo_query($query);
}

function demSLTheoLoai($idloai){
    $query = "SELECT COUNT(*) as sl FROM hang_hoa WHERE ma_loai = $idloai";
   return pdo_query_one($query);
}

function getGiaSanPhamLonNhatTheoLoai($idloai){
    $query = "SELECT * FROM hang_hoa WHERE ma_loai = $idloai order by don_gia desc limit 1";
    return pdo_query_one($query);
}

function getGiaSanPhamNhoNhatTheoLoai($idloai){
    $query = "SELECT * FROM hang_hoa WHERE ma_loai = $idloai order by don_gia asc limit 1";
    return pdo_query_one($query);
}

function getOneLoaiHang($idlh){
    $query = "SELECT * FROM loai WHERE ma_loai = '$idlh'";
    return pdo_query_one($query);
}
// end loại hàng
//  hàng hóa
function getAllHangHoa(){
    $query = "SELECT * FROM hang_hoa";
    return pdo_query($query);
}
function loadSearchhh($search){
    $query = "SELECT hh.*,loai.* FROM hang_hoa hh JOIN loai
    ON hh.ma_loai = loai.ma_loai
     WHERE ten_hh LIKE '%$search%' or loai.ten_loai LIKE '%$search%'";
    return pdo_query($query);
}
function getBanhMoi(){
    $query = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 8 ";
    return pdo_query($query);
}

function getBanhTTTop10(){
    $query = "SELECT * FROM hang_hoa as hh JOIN loai 
    ON hh.ma_loai = loai.ma_loai
    WHERE loai.ma_loai = 4
    LIMIT 8
    ";
    return pdo_query($query);
}

function getBanhTop4($idloai){
    $query = "SELECT * FROM hang_hoa WHERE ma_loai=$idloai LIMIT 4";
    return pdo_query($query);
}


function getHH_Loai($iddm){
    $query = "SELECT * FROM hang_hoa WHERE ma_loai='$iddm' ";
    return pdo_query($query);
}

function getOneHangHoa($idhh){
    $query = "SELECT * FROM hang_hoa WHERE ma_hh=$idhh";
    return pdo_query_one($query);
}
// end hàng hóa
// bình luận
function getAllBinhLuan(){
    $query = "SELECT * FROM binh_luan group by ma_hh";
    return pdo_query($query);
}
function getOneBinhLuan($idhh){
    $query = "SELECT * , count(*) as tongbl FROM binh_luan WHERE ma_hh='$idhh'";
    return pdo_query_one($query);
}

function getBLHangHoa($idhh){
    $query = "SELECT *, kh.hoten,kh.anh FROM binh_luan bl JOIN khach_hang kh
    ON bl.ma_kh = kh.ma_kh
    WHERE ma_hh=$idhh";
     return pdo_query($query);
}
//end bình luận


?>