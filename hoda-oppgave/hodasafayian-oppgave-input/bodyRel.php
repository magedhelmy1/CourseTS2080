<div id='loader'>
	<center>
		<img src="/Images/ajax-loader.gif" />
	</center>
</div>
<div id="header">
	<div id="title"><a href='/'>Automatic Test Execution (<?php include $_SERVER['DOCUMENT_ROOT'].'/ATEVersion.php';?>)</a></div>
</div>
<div id="subMenuAdmin" class="subMenu">
	<a href="/builds">Builds</a></br>
	<a href="/Tests">Tests</a></br>
	<a href="/Users">Users</a></br>
	<a href="/Topology">Topology</a>
</div>
<div id="subMenuStatus" class="subMenu">

</div>
<div id="subMenuLogin" class="subMenu">

</div>
<div id="info">
	<div id="infoContent">
	
	</div>
	<div id="infoClose" class="charCircle" onclick="showHideInfo();">
		+
	</div>
</div>
<div id="body" onclick="hideSubMenu('subMenu', 'menu');">
</div>
<script type="text/javascript">
<!--
$("#pckSearch").keypress(function() {
  searchStatus();
});
$("#pckSearch").keydown(function(e) {
    if(e.which==8)
		searchStatus();
});
 // -->
</script>
