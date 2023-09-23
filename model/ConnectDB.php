<?php
function connect(){
    $conn = new PDO('mysql:host=localhost;dbname=cake_web','root','');
    return $conn;
}

?>