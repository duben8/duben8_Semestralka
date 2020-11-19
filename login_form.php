
<?php
include "database.php";
$db = new Database();
if( $db->validLogin($_POST['inputBirthNumber'],$_POST['password'])) {
$var = $_POST['inputBirthNumber'];
?>
<script type="text/javascript">
     <?php $result = "" . "window.location = \"testResults.php?birthNumber=" . $var ."\"";
        echo $result;
     ?>
</script>
<?php
} else {


?>
<script type="text/javascript">
    window.location = "signInPage.php" ;
</script>
<?php
}


?>