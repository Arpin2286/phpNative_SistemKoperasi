<?php include'config.php'; $i++; ?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistem Koperasi</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="home.php">Sistem Koperasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="anggota.php">Anggota</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="product.php">Produk</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container mt-4">
        <h1>Data Produk Koperasi</h1>
        <hr>

        <a href="tambahProduk.php" class="btn btn-primary mb-4">Tambah Data Produk</a>

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th scope="col-1">#</th>
              <th scope="col-3">Nama Produk</th>
              <th scope="col-3">Nama Pemilik</th>
              <th scope="col-3">Harga</th>
              <th scope="col-1">Jumlah</th>
              <th scope="col-1">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $sql = "SELECT * FROM produk INNER JOIN anggota ON produk.id_anggota = anggota.id_anggota";
              $query = mysqli_query($db, $sql);

              while($produk = mysqli_fetch_array($query)):
            ?>
            <tr>
              <th scope="row"><?= $i; $i++; ?></th>
              <td><?= $produk['nama_produk'] ?></td>
              <td><?= $produk['nama'] ?></td>
              <td>Rp <?= $produk['harga'] ?></td>
              <td><?= $produk['jumlah'] ?></td>
              <td>
                <a href="editProduk.php?edit=<?= $produk['id_produk'] ?>" class="btn btn-warning btn-sm">Ubah</a>
                <a href="hapusProduk.php?delete=<?= $produk['id_produk'] ?>" class="btn btn-danger btn-sm">Hapus</a>
              </td>
            </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>