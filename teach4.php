<?php
if (isset($_POST['login'])) {
    $user =$_POST['username'];
    $pass =$_POST['password'];
    if ($user == "kemal" || $pass == "123") {
        echo"<h2>Login Berhasil</h2>";

    }else{
        echo"<h2>Username atau password Anda Salah</h2>";
    }
}


?>