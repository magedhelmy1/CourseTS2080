<?php
if(!isset($_POST["test"]) && !isset($_POST["file"]))
{
    $i=0;
	if($handle = opendir($_SERVER['DOCUMENT_ROOT']."/Reports/".$_POST["url"])) {
        while (false !== ($file = readdir($handle))) {
            echo $file.":";
			$i++;
        }
		if($i=0)
			echo "false";
        closedir($handle);
    }
}
else if(isset($_POST["test"]) && !isset($_POST["file"]))
{
    if(is_dir($_SERVER['DOCUMENT_ROOT']."/Reports/".$_POST["url"]."/".$_POST["test"]))echo "true";else echo "false"; 
}
else if(isset($_POST["file"]))
{
    if(file_exists($_SERVER['DOCUMENT_ROOT']."/Reports/".$_POST["file"]))echo "true";else echo "false";
}
?>