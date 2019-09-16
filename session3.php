<?php
/****************************************************************************
 * halaman ini adalah halaman dimana kita menghapus session yang sudah ada
*****************************************************************************/
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();
    //
    echo"<h1> Anda sudah berhasil logout</h1>";
    echo"<h2> klik <a href ='session.php'> Disini </a> untuk
    login kembali </h2>";
    echo"<h2>Anda Sekarang tidak bisa masuk ke halaman
    <a href =' session2.php '> session2.php</a> lagi </h2>";
}
?>