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
function totalHangHoa(){
    $query = "SELECT COUNT(*) as sl FROM  hang_hoa ";
    return pdo_query_one($query);
}
function getAllHangHoaPerpage($item_perpage , $offset){
    $query = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT $item_perpage OFFSET $offset ";
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


function getHH_Loai($iddm,$filter=0){
    $query = "SELECT * FROM hang_hoa WHERE ma_loai='$iddm'  ";
    if($filter != 0){
        if($filter == 1){
            $query.= "ORDER BY ASC";
        }else if($filter == 2){
            $query.= "ORDER BY DESC";
        }
    }
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

// thống kê
function thong_ke_sp_theo_loai(){
    $query = "SELECT loai.ten_loai, loai.ma_loai , COUNT(hh.ma_hh) as sl,AVG(hh.don_gia) as tb ,MIN(hh.don_gia) as min,MAX(hh.don_gia) as max 
    FROM loai JOIN hang_hoa hh 
    ON loai.ma_loai = hh.ma_loai 
    GROUP BY loai.ten_loai , loai.ma_loai 
    ORDER BY sl DESC
    ";
    return pdo_query($query);
}

?>