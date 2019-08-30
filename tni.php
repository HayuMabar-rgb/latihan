<!DOCTYPE html>
<html>
<head>
<form action ="" method ="get">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
    </form>
</head>
<body>
<fieldset><legend>Daftar Tni</legend>
<label for="">Berat Badan Anda : </label>
<input type="number" name = "s" required><br>
<label for="">Tinggi Badan Anda :</label>
<input type="number" name = "k" required><br> 
    <input type="submit" name="simpan" value="simpan">
    <?php
if (isset($_GET ['simpan'])) {
    $bb = $_GET['s'];
    $tb = $_GET['k'];
    function tni($berat , $tinggi){
        if ($berat >= 60 && $tinggi >= 165) {
             $e = "diterima";
        }else{
            echo"Tidak diterima karena belum memenuhi syarat";
        }
        return $e;
    }
    $terima = tni($bb , $tb);
    echo"Berat Badan anda : $bb";
    echo"Tinggi badan Anda: $tb";
    echo"Catatan          :$e";
}

?>

</fieldset>
</body>
</html>