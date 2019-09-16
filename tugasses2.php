<?php
session_start();

if (isset($_SESSION['login'])) {
    echo"<h1>Halaman 2 ". $_SESSION[''] . "</h1>";
}

?>