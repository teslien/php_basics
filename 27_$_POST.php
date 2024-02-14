<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_REQUEST['fname']); //Collecting Value
if (empty($name)) {
echo "Empty Name";
} else {
echo $name;
}
}
?>