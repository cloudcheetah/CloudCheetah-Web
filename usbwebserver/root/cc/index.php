<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>
		Cloud Cheetah
	</title>
</head>
<body>

<div id="mySidenav" class="sidenavCLOSE">
	<div id="mySidenav" class="myProfile">
		<table class="myInfo" style="padding:.5vw;">
			<tr>
				<td class="td1">
					<input type="image" style="background-color:#ffffff;" disabled class="myImage" src="resources/kurumi.png">
				</td>
				<td class="td2" style="padding-left:1vw;color:#FFFFFF;">
					<span>CEO</span>
					<br>
					<span style="font-weight:bold;">Kurumi Tokisaki</span>
				</td>
			</tr>
		</table>
	</div>
	<div id="mySidenav" class="sidenavCloseInner">
		<button class="sideBTNSelected" style="background-image:url('resources/btn_home.png');">Home</button>
		<button class="sideBTN" style="background-image:url('resources/btn_chat.png');">Chat</button>
		<button class="sideBTN" style="background-image:url('resources/btn_people.png');">People</button> 
		<button class="sideBTN" style="background-image:url('resources/btn_project.png');">Projects</button> 
		<button class="sideBTN" style="background-image:url('resources/btn_tip.png');">Task-in-Progress</button>
		<button class="sideBTN" style="background-image:url('resources/btn_banking.png');">Accounting &amp; Banking</button> 
		<button class="sideBTN" style="background-image:url('resources/btn_vendor.png');">Vendors</button>
		<button class="sideBTN" style="background-image:url('resources/btn_hr.png');">Human Resources</button>
		<button class="sideBTN" style="background-image:url('resources/btn_banking.png');">Supplies &amp; Inventory</button> 
	</div>
</div>

<div id="main" class="mainCLOSE">
	<div class="top">
		<span style="cursor:pointer;font-weight:bold;" onclick="toggle()">&#9776;</span><input id="getIt" type="hidden" value="open">
	</div>
</div>

<script>
	function toggle()
	{
		if (document.getElementById("getIt").value=="open")
		{
			document.getElementById("mySidenav").className = "sidenavOPEN";
			document.getElementById("main").className = "mainOPEN";
	    	document.getElementById("getIt").value = "close";
		}
		else
		{
			document.getElementById("mySidenav").className = "sidenavCLOSE";
			document.getElementById("main").className = "mainCLOSE";
	    	document.getElementById("getIt").value = "open";
		}
	}
</script>
     
</body>
</html>

