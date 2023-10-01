<?php
function updateKH($makh,$hoten,$matkhau,$email,$anh,$dia_chi,$phone){
    $query = "UPDATE khach_hang SET hoten='$hoten',matkhau='$matkhau',email='$email',anh='$anh',dia_chi='$dia_chi',phone='$phone' WHERE ma_kh='$makh'";
    pdo_excute($query);
}

function updateHH($mahh,$tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$mota,$luotxem){
    $query = "UPDATE hang_hoa SET ten_hh='$tenhh',don_gia='$gia',anh='$anh',giam_gia='$giamgia',ngay_nhap='$ngaynhap',ma_loai='$maloai',dac_biet='$dacbiet',mota='$mota',so_luot_xem='$luotxem' WHERE ma_hh='$mahh'";
    pdo_excute($query);
}


function updateLuotXemSP($idhh){
    $query = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=$idhh";
    pdo_excute($query);
}
?>

