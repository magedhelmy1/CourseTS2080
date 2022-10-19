<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ATE</title>
<link rel="stylesheet" type="text/css" href="CSS/header.css" />
<link rel="stylesheet" type="text/css" href="CSS/main.css" />
<script src="JavaScript/jquery-latest.js"></script>
<script src="JavaScript/JScript.js"></script>
</head>
<body onload="populateBody('main.php');populateBodyInterval('main.php', false, false);">
<?php 
include $_SERVER['DOCUMENT_ROOT'].'\body.php'; 
?>
</body>
</html>