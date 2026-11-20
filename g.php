<?php
$num=[10,20,24,36,55];
$g=$num[0];
for($i=1;$i<5;$i++){
if($num[$i]>$g){
$g=$num[$i];

}

}

echo $g;
?>