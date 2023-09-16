<?php
function connect(){
    $conn = new PDO('mysql:host=localhost;dbname=fpt_dm','root','');
    return $conn;
}

?>