<?php
include '../database.php';
$db = new Database();
$id_test = $_POST['id'];
$db->deleteFinishedTest(intval($id_test));
header('Location: ../testResults.php?birthNumber=' . $_GET['birthNumber']);
exit();
?>