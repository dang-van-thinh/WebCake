<?php

function setKhachHang($hoten,$matkhau,$email,$anh,$kichhoat,$vaitro,$dia_chi,$phone){
    $conn = connect();
    $query = "INSERT INTO khach_hang(hoten,matkhau,email,anh,kich_hoat,vai_tro) VALUES('$hoten','$matkhau','$email','$anh',$kichhoat,$vaitro,'$dia_chi','$phone')";
    $stmt =  $conn->prepare($query);
   $stmt->execute();
    return true;
}
function setLoaiHang($tenloai){
    $conn = connect();
    $query = "INSERT INTO loai(ten_loai) VALUES('$tenloai')";
    $conn->prepare($query)->execute();
}
function setBL($noidung,$makh,$mahh,$ngaybl){
    $conn = connect();
    $query = "INSERT INTO binh_luan(noi_dung,ma_kh,ma_hh,ngay_bl) VALUES('$noidung','$makh','$mahh','$ngaybl')";
    $conn->prepare($query)->execute();
}
function setHangHoa($tenhh,$gia,$anh,$giamgia,$ngaynhap,$maloai,$dacbiet,$luotxem,$mota){
    $conn = connect();
    $query = "INSERT INTO hang_hoa(ten_hh,don_gia,anh,giam_gia,ngay_nhap,ma_loai,dac_biet,so_luot_xem,mota) VALUES('$tenhh','$gia','$anh','$giamgia','$ngaynhap','$maloai','$dacbiet','$luotxem','$mota')";
    $conn->prepare($query)->execute();
    return true;
}

?>