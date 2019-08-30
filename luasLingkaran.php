<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luas Lingkaran</title>
    <form>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    
</head>
<body>
<fieldset><legend>
    Luas Lingkaran
    </legend> 
    <label for ="">Jari Jari : </label>
    <input type="number" min="1" name = "s" required><br>
    <input type="submit" name="simpan" value="simpan">
    </fieldset>
    <?php
 if (isset($_GET ['simpan'])) {
     $pinggir =$_GET['s'];
 function Luas_Lingkaran($s){
    $luas = 3.14 * $s * $s;
    return $luas;
 }
        function keliling_lingkaran($ling){
            $kel = 2 * $ling * 3.14;

            return $kel;
     
        }
        $luas = Luas_Lingkaran($pinggir);
        echo"Luas Lingkaran : $luas<br>";
        $kel = keliling_lingkaran($pinggir);
        echo"Keliling       : $kel";
    }
?>
</body>
</html>