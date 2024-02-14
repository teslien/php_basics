<?php

$password_string = array_merge(range('a', 'b'), range('A', 'B'), array("$", "&", "*", "@", "#", "~", "!", "?", "-", "_", "+", "=", "<", ">", ",", ".", "'", "\"", "`", "|", "{", "}", "[", "]", "(", ")", ";", ":", "/", "\\"));

function generarePassword($len) {
    global $password_string;
    $password = "";
    for ($i = 0; $i < $len; $i++) {
        $password .= $password_string[rand(0, (count($password_string)-1))];
    }
    return $password;
}

$randomPassword = generarePassword(20);
echo sprintf("Random Password for you : %s", $randomPassword);

?>
