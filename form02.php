<<!DOCTYPE html>
<html>
<head><title>Pengolahan Form</title></head>
<body>
    <FORM ACTION= "form02.php" METHOD="POST" NAME ="input">
        Nama Anda: <input type="text" name="nama"><br>
        <input type= "submit" name="input" value="input">
    </FORM>
</body>
</html>

<?php
if(isset($_POST['Input'])){
    $nama =$_POST['nama'];
    echo"Nama Anda :<b> $nama <b> " ;
}


?>