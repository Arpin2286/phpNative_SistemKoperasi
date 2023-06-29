<?php 
    include 'config.php';

    if(isset($_GET['delete'])){
        $id = $_GET['delete'];

        $sql = "DELETE FROM `produk` WHERE id_produk = '$id'";
        if(mysqli_query($db, $sql)){
            header('Location: product.php');
        } else{
            die('Data tidak berhasil dihapus.....');
        }
    }
?>