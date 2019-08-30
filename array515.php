<?php
function tambah_String($str){
 $str =$str . ",Jakarta";
 return $str;
}
//
$str ="universitas Budi Luhur";
echo"\$str =$str <br>";
echo tambah_String($str) . "<br>";
echo"\$str = $str <br>";

?>