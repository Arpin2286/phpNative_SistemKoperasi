<?php 
    include 'config.php';

    if(isset($_POST['tambah'])){
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        $sql = "INSERT INTO anggota (nama, alamat, no_hp) VALUES ('$nama', '$alamat', '$no_hp')";
        $query = mysqli_query($db, $sql);

        if($query){
            header('Location: anggota.php');
        }else{
            die('Gagal menambahkan data');
        }
        
    } else{
        die('Sepertinya ada kesalahan di formulir...');
    }
?>