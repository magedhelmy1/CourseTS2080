<?php
if(isset($_POST["testName"])&& isset($_POST["PCK"])&& !isset($_POST["comment"]))
{
	include $_SERVER['DOCUMENT_ROOT'].'/PhpClasses/DataPlacer.php';
	$dataPlacerObj = new PhpClasses\DataPlacer();
	$testStatusObj = $dataPlacerObj->placetestStatus(false);
	list($target, $PCK) = split(':', $_POST["PCK"]);
	echo "<p style='font-weight:normal;'>";
		echo "<b>Test status comment</b></br>";
		echo $_POST["testName"]."</br>";
		echo "Target " . $target."</br>";
		echo "PCK". $PCK ."</br>";
	echo "</p>";
	echo "<table>";
		foreach($testStatusObj as $testStatus)
		{
			if($testStatus->getPCK()==$_POST["PCK"] && $testStatus->getTestName()==$_POST["testName"])
			{
				echo "<tr>";
					echo "<textarea id='comment' style='width:212px;' maxlength='50'>";
						echo $testStatus->getComment();
					echo "</textarea>";
				echo "</tr>";
				echo "<tr>";
					if ($testStatus->getManual()==null)
						$testStatus->setManual(0);
					echo "<input type='button' style='float:right;' value='Save' onclick='saveComment(" . $testStatus->getTestStatusId() . ", " . $testStatus->getTestStatus() . ", " . $testStatus->getManual() . ")' />";
				echo "</tr>";
			}
		}
	echo "</table>";
}
if(isset($_POST["testName"])&& isset($_POST["PCK"]) && isset($_POST["comment"]))
{
	include $_SERVER['DOCUMENT_ROOT'].'/PhpClasses/Query.php';
    $queryObj = new PhpClasses\Query();
	list($target, $PCK) = split(':', $_POST["PCK"]);
    $time = time();
    $isUpdated=$queryObj->updateTestStatus($_POST["testStatusId"], $_POST["testStatus"], $time, $_POST["manual"], $_POST["comment"]);
	echo "<p style='font-weight:normal;'>";
		echo "<b>Test status comment</b></br>";
		echo $_POST["testName"]."</br>";
		echo "Target " . $target ."</br>";
		echo "PCK". $PCK ."</br>";
	echo "</p>";
	echo "<table>";
		echo "<tr>";
			echo "<textarea id='comment' style='width:212px;' maxlength='50'>";
				echo $_POST["comment"];
			echo "</textarea>";
		echo "</tr>";
		echo "<tr>";
			echo "<input type='button' style='float:right;' value='Save' onclick='saveComment(" . $_POST["testStatusId"] . ", " . $_POST["testStatus"] . ", " . $_POST["manual"] . ")' />";
		echo "</tr>";
	echo "</table>";
	if($isUpdated)
		echo "<p style='font-weight:normal;'>Saved ".date("d.m.y @ H:i:s",$time)."</p>";
	else
		echo "<p style='font-weight:normal;'>The comment was not saved.</p>";
}
?>