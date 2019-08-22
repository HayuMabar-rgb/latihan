<?php

echo"Nama : Satria kemal";
echo"Kelas: XI RPL 1 <br>";
echo"******************************************<br>";
$indonesia=80;
$mtk=70;
$rataRata=75;

if($indonesia>99 || $mtk>99){
    echo"Nilai yang anda masukan tidak sesuai<br>";
} elseif($indonesia<0 || $mtk < 0){
echo"nilai yang anda masukan tidak sesuai<br>";
}   
else{
    echo"Nilai Bahasa Indonesia :$indonesia <br>";
    echo"Nilai Matematika       :$mtk <br>";
    echo"Nilai Rata Rata        :$rataRata <br>";
    echo"Keterangan             :Lulus <br>";
}

    if($rataRata > 85){
        echo"Grade : A";
    }   elseif($rataRata > 75){
        echo"Grade : B";
    }   elseif ($rataRata > 60) {
        echo"Grade : C";
    }   elseif($rataRata<60){
        echo"Grade : D";
    }
        



 


?>