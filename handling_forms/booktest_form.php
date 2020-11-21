<?php
include '../database.php';
$birthNumber = $_GET['birthNumber'];
$varType = $_POST['testType'];
$date = $_POST['onDate'];
$db = new Database();
$db->bookTest($birthNumber  , $date ,$varType );
?>
<script type="text/javascript">
     <?php $result = "" . "window.location = \"../testResults.php?birthNumber=" . $_GET['birthNumber'] ."\"";
        echo $result;
     ?>
</script>
