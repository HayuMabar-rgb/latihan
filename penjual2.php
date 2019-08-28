<?php

 if (isset($_POST['simpan'])) {
    $film=  $_POST['nama'];
    $addres=$_POST['alamak'];
    $nambe= $_POST['nambar'];
    $price= $_POST['harga'];
    $quant= $_POST['jumlah'];
    $deskr= $_POST['desk'];
 echo"Nama   : $film<br>";
  echo"Alamat : $addres<br>";
  echo"Nama Barang :$nambe<br>";
  echo"Harga Barang: $price<br>";
  echo"jumlah barang: $quant<br>";
  echo"deskripsi : $deskr<br>";
if($quant >10){
    echo"anda Membeli Produk Kami Dengan Jumlah Banyak <br>
    Maka Anda Mendapatkan Diskon Sebesar 25% <br>";
    echo"Syarat Dan ketentuan Berlaku!";
if ($quant > 15) {
    echo"Anda Membeli Produk Kami Dengan Jumlah Banyak <br>
    Maka Anda MEndapatkan diskon 50%";

}
}

 }
 if($quant <= 0){
    echo"Maaf Permintaan anda tidak dapat di proses";
    
}else {
    echo"Terima Kasih Telah Membeli produk Kami<br>";
    echo"Anda Akan Mendapat Diskon Jika Belanja Produk Kami dengan jumlah banyak<br>";
    echo"Syarat dan ketentuan Berlaku<br>";
}


?>