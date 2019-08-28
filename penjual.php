<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<fieldset>
<legend>Form Penjualan</legend>
    <FORM ACTION ="penjual2.php" METHOD ="POST" NAME"input">
    Nama anda    :
    <input type ="text" name="nama" placeholder="Masukan Nama Anda"><br>
    Nama Barang  :
    <input type ="text" name="alamak" placeholder="Masukan Alamat rumah anda"><br>
    Alamat :
    <input type ="text" name="nambar" placeholder="Masukan Nama Barang yang anda beli"><br>
    Harga Barang :
    <input type ="number" name="harga" placeholder="Harga Barang"><br>
    Jumlah barang:
    <input type ="number" name="jumlah" placeholder="jumlah barang yang di beli "><br>
    Deskripsi    :
    <input type ="textarea" name="desk" placeholder="Deskripsi"><br>
    Tanggal Beli :
    <input type ="date" name="tangbel" value="tanggal pembelian"><br>
    
    <input type ="submit" name="simpan" value ="save">
    <a href="penjual2.php">
    </FORM></a>
</body>
</html>