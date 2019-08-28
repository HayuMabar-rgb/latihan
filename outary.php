<?php
if (isset($_POST['sbm'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];

    foreach ($nama as $data) {
        echo"Nama Saya : ".$nama[$data].
        "-kelas :".$kelas[$data]."<hr>";
    }
}
?>