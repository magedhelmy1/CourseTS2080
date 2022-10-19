<?php
if(isset($_POST["testStatusId"]))
{
    include $_SERVER['DOCUMENT_ROOT'].'/PhpClasses/Query.php';
    $queryObj = new PhpClasses\Query();
    $queryObj->deleteTestStatus($_POST["testStatusId"]);
      
}
?>
