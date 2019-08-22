<?php
if (isset($_POST['Input'])) {
    $user =$_POST['nama'];
    $alamat =$_POST['Alamat'];
    $kel =$_POST['jenkel'];
    $agm =$_POST['agama'];
    $imel =$_POST['email'];
    $pass =$_POST['password'];
    if ($pass == "091") {
        echo $user. "<br>";
        echo $alamat. "<br>";
        echo $kel. "<br>";
        echo $agm. "<br>";
        echo $imel. "<br>";
        echo $pass. "<br>";
        echo "Status : Aktif<br>";

    }else {
        echo $user. "<br>";
        echo $alamat. "<br>";
        echo $kel. "<br>";
        echo $agm. "<br>";
        echo $imel. "<br>";
        echo $pass. "<br>";
        echo "Status :Tidak Aktif";
    }
    
}
?>




