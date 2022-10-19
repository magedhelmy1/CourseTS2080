<?php
if(isset($_POST["reports"]))
{
	$files = explode(",", $_POST["reports"]);
	$fileName=explode("/", $files[0]);
	$fileName=explode("@", $fileName[4]);
	$zipName = $_SERVER['DOCUMENT_ROOT'].'/Reports/Zip/PCK' . $fileName[0] . '_TestReports.zip';
	$zip = new ZipArchive();
	if($zip->open($zipName, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE) !== TRUE)
	{
		die ("Error creating zip-file.");
	}
	foreach ($files as $file)
	{
		$name=explode("/", $file);
		$zip->addFile($_SERVER['DOCUMENT_ROOT'].$file, $name[5]."_".$name[6]);
	}
	if($zip->close())
	{
		echo '/Reports/Zip/PCK' . $fileName[0] . '_TestReports.zip';
	}
	else
	{
		echo "false";
	}
}
?>