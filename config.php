<?php

$server = 'localhost';
$user = 'root';
$password ='';
$nama_database = 'koperasi';

$db = mysqli_connect($server, $user, $password, $nama_database);

if(!$db){
    echo "Database belum terhubung. ".mysqli_connect_error();
}
?>