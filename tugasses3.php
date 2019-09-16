<?php
session_start();
if (isset($_SESSION['login'])) {
    unset ($_SESSION);
    session_destroy();

    echo"<h1>halaman 3</h1>";


    echo"<p> klik <a href =tugasses1.php> disini </a>untuk login kembali</p>";
}


?>