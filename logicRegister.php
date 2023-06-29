<?php 
    include 'config.php';

    $username = strtolower(stripslashes($_POST['username']));
    $email = strtolower(stripslashes($_POST['email']));
    $password = $_POST['password'];

    // checking same username or email
    $check = mysqli_query($db, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");
    if(mysqli_fetch_assoc($check)){
        die('Username atau email yang anda masukkan sudah digunakan.');
        exit;
    }
        $pass = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$username','$email','$pass')";
        $query = mysqli_query($db, $sql);

        header('Location: index.php');
    
?>