<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ATE - Release overview</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css" />
<link rel="stylesheet" type="text/css" href="CSS/main.css" />
<script src="Javascript/jquery-latest.js"></script>
<script src="JavaScript/JScriptRel.js"></script>
</head>
<body onload="populateBody('mainRel.php');populateBodyInterval('mainRel.php', false, false);">
<?php 
include $_SERVER['DOCUMENT_ROOT'].'\bodyRel.php'; 
?>
</body>
</html>