<?php
function delKH($idkh){
    $conn = connect();
    $query = "DELETE FROM khach_hang WHERE ma_kh=$idkh";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
function delHH($idhh){
    $conn = connect();
    $query = "DELETE FROM hang_hoa WHERE ma_hh=$idhh";
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
?>