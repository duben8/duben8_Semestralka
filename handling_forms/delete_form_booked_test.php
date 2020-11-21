<?php
include "../database.php";
$db = new Database();
$id = $_POST['id'];
$db->deleteBookedTest(intval($id));
header("Location: ../testResults.php?birthNumber=" . $_GET['birthNumber']);
die();
?>