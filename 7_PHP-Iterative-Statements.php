<?php

$x = 1;
$tableOf = 2;
while($x <= 10){
    $val =$x*$tableOf;
    $txt = sprintf("%u x %u = %u",$tableOf,$x,$val);
    // echo "$tableOf x $x = ".var_dump($x * $tableOf);
    echo $txt;
    echo "<br>";
    $x++;
}

?>