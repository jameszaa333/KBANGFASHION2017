<?php
// Start the session
session_start();
?>

<?php
// Set session variables
$_SESSION["modelN0"] = "/assets/images/model/modelN0.png";
$_SESSION["modelN1"] = "/assets/images/model/modelN1.png";
$_SESSION["modelN2"] = "/assets/images/model/modelN2.png";
$_SESSION["modelN3"] = "/assets/images/model/modelN3.png";
$_SESSION["modelN4"] = "/assets/images/model/modelN4.png";

isset($modelN0, $modelN1, $modelN2, $modelN3, $modelN4);

if (isset($_POST["modelN0"])) {
    echo "Yes, mail is set";    
}else{  
    echo "N0, mail is not set";
}
?>


