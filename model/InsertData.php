<?php
require_once 'PDO.php';
function setKhachHang($hoten,$matkhau,$email,$anh,$kichhoat,$vaitro,$dia_chi,$phone){
    $query = "INSERT INTO khach_hang(hoten,matkhau,email,anh,kich_hoat,vai_tro) VALUES('$hoten','$matkhau','$email','$anh',$kichhoat,$vaitro,'$dia_chi','$phone')";
    pdo_excute($query);
    return true;
}
function setLoaiHang($tenloai){
    $query = "INSERT INTO loai(ten_loai) VALUES('$tenloai')";
    pdo_excute($query);
}
function setBL($noidung,$makh,$mahh,$ngaybl){
    $query = "INSERT INTO binh_luan(noi_dung,ma_kh,ma_hh,ngay_bl) VALUES('$noidung','$makh','$mahh','$ngaybl')";
    pdo_excute($query);
}
function setHangHoa($tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$luotxem,$mota){
    $query = "INSERT INTO hang_hoa(ten_hh,don_gia,anh,giam_gia,ngay_nhap,ma_loai,dac_biet,so_luot_xem,mota) VALUES('$tenhh','$gia','$anh','$giamgia','$ngaynhap','$maloai','$dacbiet','$luotxem','$mota')";
    pdo_excute($query);
    return true;
}

?>