<<!DOCTYPE html>
<html>
<head><title>Form baru</title>
<FORM ACTION= "Form03.php" METHOD="POST" NAME ="input">
        Nama    : <input type="text" name="nama"><br>
        Nilai 1 : <input type="text" name="nilsa"><br>
        Nilai 2 : <input type="text" name="nildu"><br>
        <input type= "submit" name="input" value="input"> 

</head>
<body>
    
</body>
</html>

<?php

$x=$nilsa+$nildu/2;

if(isset($_POST['input'])){
    $nama =$_POST['nama'];
    echo"Nama Anda :<b> $nama <b> " ;

if(isset($_POST['input'])){
    $nilsa = $_POST['nilsa'];
    echo"Nilai 1 :<b> $nilsa <b>";
}
if(isset($_POST['input'])){
    $nildu = $_POST['nildu'];
    echo"Nilai 2 : <b> $nildu <b>";
    echo"Nilai Rata Rata : $x";

}
}

?>