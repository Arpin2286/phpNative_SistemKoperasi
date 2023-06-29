<?php 
    include 'config.php';

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $id_anggota = $_POST['anggota'];
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $jumlah = $_POST['jumlah'];

        $sql = "UPDATE `produk` SET `id_anggota`='$id_anggota',`nama_produk`='$nama_produk',`harga`='$harga',`jumlah`='$jumlah' WHERE id_produk = '$id'";
        $update = mysqli_query($db, $sql);

        if($update){
            header("Location: product.php");
        }else{
            die('Data gagal diubah......');
        }
    }
?>  