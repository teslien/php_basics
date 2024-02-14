<?php
$myfile = fopen("data.txt", "a+");
$txt = "\nRohit Bhai\n"; // Append a newline character
fwrite($myfile, $txt);
fclose($myfile);
?>

<?php
$txt = file_get_contents("data.txt"); // No need to reopen the file
echo $txt;
?>
