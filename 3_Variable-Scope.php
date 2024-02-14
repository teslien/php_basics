

<?php

//global variable
$name = "Asad";

function global_var(){
    global $name;
    echo"variable inside the funcrion".$name;
    echo "</br>";
}

global_var();
echo"Variable outside the function".$name;

?>


<?php
//local variable
function test(){
    $capital = "Delhi";
    echo "Capital of India is : ".$capital;
}

mytest();

echo $capital;

?>