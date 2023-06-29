<?php 
    session_start();
    include 'config.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $find = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

        if(mysqli_num_rows($find) === 1){
            $check = mysqli_fetch_assoc($find);

            if(password_verify($password, $check['password'])){
                $_SESSION['login'] = true;
                header('Location: home.php');
                exit;
            }else{
                die('Password salah.');
            }
        } else{
            die('Username tidak ditemukan.');
        }
    }
?>