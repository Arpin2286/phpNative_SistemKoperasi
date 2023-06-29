<?php 
    include 'config.php';

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE FROM `anggota` WHERE id_anggota = '$id'";
        if(mysqli_query($db, $sql)){
            header('Location: anggota.php');
        } else{
            die('Data tidak berhasil dihapus.....');
        }
    }
?>