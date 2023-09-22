<?php
function updateKH($makh,$hoten,$matkhau,$email,$anh,$dia_chi,$phone){
    $conn =connect();
    $query = "UPDATE khach_hang SET hoten='$hoten',matkhau='$matkhau',email='$email',anh='$anh',dia_chi='$dia_chi',phone='$phone' WHERE ma_kh='$makh'";
    $conn->prepare($query)->execute();
}

function updateHH($mahh,$tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$mota,$luotxem){
    $conn = connect();
    $query = "UPDATE hang_hoa SET ten_hh='$tenhh',don_gia='$gia',anh='$anh',giam_gia='$giamgia',ngay_nhap='$ngaynhap',ma_loai='$maloai',dac_biet='$dacbiet',mota='$mota',so_luot_xem='$luotxem' WHERE ma_hh='$mahh'";
    $conn->prepare($query)->execute();
}


function updateLuotXemSP($idhh){
    $conn = connect();
    $query = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=$idhh";
    $conn->prepare($query)->execute();
}
?>

