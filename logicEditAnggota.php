<?php 
    include 'config.php';

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];

        $sql = "UPDATE `anggota` SET`nama`='$nama',`alamat`='$alamat',`no_hp`='$no_hp' WHERE id_anggota = '$id'";
        $update = mysqli_query($db, $sql);

        if($update){
            header("Location: anggota.php");
        }else{
            die('Data gagal diubah......');
        }
    }
?>  