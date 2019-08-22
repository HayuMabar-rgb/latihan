<?php
//array ke numerik
$a = array('candra', 21, true,14.45);
echo $a[1];
for($i = 0; $i >= 0 ; $i--){
echo $a[$i] ."<br>";
}
// array key assosiatif 
$aso = ['nama'=> 'mahmud','umur'=> 21,
'alamat'=> 'bandung'];
foreach($aso as $index){
    echo $index ."<br>";
}


?>