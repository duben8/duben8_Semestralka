<?php
include '../database.php';
$db = new Database();
$newDate = $_POST['newDate'];
$id = $_POST['id'];
$db->editDateBookedTest(intval($id),$newDate);
header('Location: ../testResults.php?birthNumber=' . $_GET['birthNumber']);
die();
?>