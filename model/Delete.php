<?php
function delKH($idkh){
    $query = "DELETE FROM khach_hang WHERE ma_kh=$idkh";
    pdo_excute($query);
}
function delHH($idhh){
    $query = "DELETE FROM hang_hoa WHERE ma_hh=$idhh";
    pdo_excute($query);
}
function delBl($idbl){
    $query = "DELETE FROM binh_luan WHERE ma_bl=$idbl";
    pdo_excute($query);
}
?>