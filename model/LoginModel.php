<?php
include 'ConnectDB.php';
require_once 'PDO.php';
function checkLogin($email,$password){
    $query = "SELECT * FROM khach_hang WHERE email='$email' AND matkhau='$password'";
    return pdo_query_one($query);
}
function checkRegister($email){
    $query = "SELECT * FROM khach_hang WHERE email='$email'";
    return pdo_query_one($query);
}
function register($hoten,$matkhau,$email){
    $query = "INSERT INTO khach_hang(hoten,matkhau,email,anh) VALUES('$hoten','$matkhau','$email','../upload/img/avatar.jpg')";
   pdo_excute($query);
    return true;
}
function checkPhone($phone){
    $query = "SELECT * FROM khach_hang WHERE phone='$phone'";
    return pdo_query_one($query);
}
?>