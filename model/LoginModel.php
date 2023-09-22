<?php
include 'ConnectDB.php';

function checkLogin($email,$password){
    $conn = connect();
    $query = "SELECT * FROM khach_hang WHERE email='$email' AND matkhau=$password";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq = $stmt->fetch();
    return $kq;
}
function checkRegister($email){
    $conn = connect();
    $query = "SELECT * FROM khach_hang WHERE email='$email'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq = $stmt->fetch();
    return $kq;
}
function register($hoten,$matkhau,$email){
    $conn= connect();
    $query = "INSERT INTO khach_hang(hoten,matkhau,email,anh) VALUES('$hoten','$matkhau','$email','../upload/img/avatar.jpg')";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return true;
}
function checkPhone($phone){
    $conn = connect();
    $query = "SELECT * FROM khach_hang WHERE phone='$phone'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $kq = $stmt->fetch();
    return $kq;
}
?>