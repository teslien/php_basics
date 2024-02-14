<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["uname"] = "shayan";
$_SESSION["upass"] = "hunter";
echo "Session variables are set.";
?>

</body>
</html>