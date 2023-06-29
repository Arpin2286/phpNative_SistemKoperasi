<?php 
    include 'config.php';

    if(isset($_POST['tambah'])){
        $id_anggota = $_POST['anggota'];
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $sql = "INSERT INTO `produk`(`id_anggota`, `nama_produk`, `harga`, `jumlah`) VALUES ('$id_anggota','$nama_produk','$harga','$jumlah')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: product.php');
        }else{
            die('Gagal menambahkan data');
        }
        
    } else{
        die('Sepertinya ada kesalahan di formulir...');
    }
?>