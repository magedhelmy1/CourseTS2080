<?php
if(isset($_POST["testStatusId"]) && isset($_POST["testStatus"]))
{	
	// Status 0 = deleted
	// Status 1 = running
	// Status 2 = accepted
	// Status 3 = error
	// Status 4 = warning
	// Status 5 = error, but accepted
	// Status 6 = warning, but accepted
	// Status 7 = accepted, but not accepted
	// Status 8 = warning, but not accepted
    include $_SERVER['DOCUMENT_ROOT'].'/PhpClasses/Query.php';
    $queryObj = new PhpClasses\Query();  
    $queryObj->updateTestStatus($_POST["testStatusId"], $_POST["testStatus"], time(), 1, "");
}
?>
