<div id='loader'>
	<center>
		<img src="/Images/ajax-loader.gif" />
	</center>
</div>
<div id="header">
	<div id="title"><a href='/'>Automatic Test Execution (<?php include $_SERVER['DOCUMENT_ROOT'].'/ATEVersion.php';?>)</a></div>
	<?php 
	if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]=="loggedIn")
	{
	?>
		<a onclick="showHideSubMenu('subMenuAdmin', 'subMenu', 'menuAdmin', 'menu')" id="menuAdmin" class="menu">Admin</a>
	<?php 
	}
	?>
	<a onclick="showHideStatus('subMenuStatus', 'subMenu', 'menuStatus', 'menu');" id="menuStatus" class="menu">Status</a>
	<a onclick="showHideLogin('subMenuLogin', 'subMenu', 'menuLogin', 'menu');" id="menuLogin" class="menu">Access</a>
	<a href="/Info" class="menu">Info</a>
	<input type='text' value='Search PCK' id='pckSearch' onfocus='pckSearchFocus();' onblur='pckSearchBlur();'>
	<a id="searchText"><img src="/Images/ajax-loader-search.gif" /></a>
	<a href="/Statistics" class="menu">Statistics</a>
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
