<?php
function updateKH($makh,$hoten,$matkhau,$email,$anh,$kichhoat){
    $conn =connect();
    $query = "UPDATE khach_hang SET hoten='$hoten',matkhau='$matkhau',email='$email',anh='$anh',kich_hoat='$kichhoat' WHERE ma_kh=$makh";
    $conn->prepare($query)->execute();
}

function updateHH($mahh,$tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$mota,$luotxem){
    $conn = connect();
    $query = "UPDATE hang_hoa SET ten_hh='$tenhh',don_gia='$gia',anh='$anh',giam_gia='$giamgia',ngay_nhap='$ngaynhap',ma_loai='$maloai',dac_biet='$dacbiet',mota='$mota',so_luot_xem='$luotxem' WHERE ma_hh='$mahh'";
    $conn->prepare($query)->execute();
}
?>

