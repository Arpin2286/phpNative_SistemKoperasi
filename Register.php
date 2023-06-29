<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login | Sistem Koperasi</title>
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="text-center mb-4">Register</h4>
                            <form action="logicRegister.php" method="post" class="mb-4">
                                <div class="form-group mb-2">
                                    <label for="">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="MyUserName">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="email@email.com">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="**********">
                                </div>
                                <input type="submit" value="Daftar" name="daftar" class="btn btn-primary form-control">
                            </form>
                            <hr>
                            <p class="text-center">Sudah punya akun ? <a href="index.php" class="text-primary"> Masuk Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </div>
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