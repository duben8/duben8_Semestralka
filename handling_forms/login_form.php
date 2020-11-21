
<?php
include "../database.php";
$db = new Database();
if( $db->validLogin($_POST['inputBirthNumber'],$_POST['password'])) {
$var = $_POST['inputBirthNumber'];
header("Location: ../testResults.php?birthNumber=" . $var);
} else {
    header("Location: ../signInPage.php");
}
die();

?>