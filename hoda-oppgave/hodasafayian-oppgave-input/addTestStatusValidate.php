<?php
if(isset($_POST["testName"])&& isset($_POST["PCK"]) && isset($_POST["status"]))
{
    include $_SERVER['DOCUMENT_ROOT'].'/PhpClasses/Query.php';
    $queryObj = new PhpClasses\Query();
    $time = time();
    $testStatusId=$queryObj->insertTestStatus($_POST["testName"], $_POST["PCK"], $_POST["status"], $time, 1, ""); 
}
?>

