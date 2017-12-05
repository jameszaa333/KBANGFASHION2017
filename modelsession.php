<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["modelN0"] = "dog";
$_SESSION["modelN1"] = "cat";
$_SESSION["modelN2"] = "mouse";
$_SESSION["modelN3"] = "snake";
$_SESSION["modelN4"] = "baby";

echo "Session variables are set.";
?>

</body>
</html>