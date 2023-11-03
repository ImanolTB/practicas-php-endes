<?php
$num=$_GET["numero"];
$tabla=0;
for($i = 1;$i <=10 ;$i++){
    $tabla=$num * $i;
    echo " $num x $i = $tabla" . "<br>";
}

?>
