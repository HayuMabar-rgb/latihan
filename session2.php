<?php
/***************************************************************************
 * Halaman Ini merupakan contoh halaman pemeriksaan session. pemeriksaan session
 * biasanya dilakukan jika suatu halaman memiliki akses terbatas. misalnya harus login
 * terlebih dahulu
 * *************************************************************************/
session_start();
//pemeriksaan session
if (isset($_SESSION['login'])) {//jika sudah login
    //menampilkan isi session
    echo"<h1> Selamat datang" . $_SESSION['login'] . "</h1>";
    echo"<h2> Halaman ini hanya bisa diakses saat anda sudah login</h2>";
    echo"<h2> klik <a href ='session3.php'> disini(session3.php)</a> untuk logout</h2>";


} else {
    // session belum ada artinya belum login
    die("anda belum login! anda tidak berhak masuk ke halaman ini
    silahkan login terlebih dahulu <a href ='session.php> Disini</a> ");
}
 