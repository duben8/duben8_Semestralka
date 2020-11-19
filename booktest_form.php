<?php
include 'database.php';
$birthNumber = $_GET['birthNumber'];
$varType = $_POST['typTestu'];
$date = $_POST['objednavkaDatum'];
$db = new Database();
$db->bookTest($birthNumber  , $date ,$varType );
?>
<script type="text/javascript">
     <?php $result = "" . "window.location = \"testResults.php?birthNumber=" . $_GET['birthNumber'] ."\"";
        echo $result;
     ?>
</script>
