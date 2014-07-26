<?php
	session_start();
	
	// To-Do: Connect all Classes to the index.php File
	//require_once("../cgi-bin/database.php");
	// To-Do: Connect all Scripts to the index.php File
	//include("scripts/dropdown.php");
	
	// Create the Database Connection
	$database = new database();
	
	// To-Do: Clean Encryption Methods
	/*if (!isset($_SESSION["lang"]))	{
		$_SESSION["lang"] = "DE";
	}

	if(isset($_GET["l"]))	{
		$_SESSION["lang"] = strtoupper(mysql_real_escape_string($_GET["l"]));
	}	else if ($_SESSION["lang"] == NULL || !isset($_SESSION["lang"]))	{
		$_SESSION["lang"] = strtoupper($_SESSION["lang"]);
	}	else	{
		$_SESSION["lang"] = "DE";
	}
	
	if(isset($_GET["pg"]))	{
		$page = mysql_real_escape_string($_GET["pg"].".php");
	}	else	{
		$page = "home.php";
	}
	
	if (isset($_GET["msg"])) {
		$msg = mysql_real_escape_string($_GET["msg"]);
	}	else	{
		$msg = $msg;
	}*/
?>

<!DOCTYPE html> 
<html>
	<head>
		<?php
			// To-Do: Print the Metadata, Spreadsheetlinks and Scripts from the Database
		?>
		<!-- OBSOLETE:
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="de" />
		<title>PAGETITLE</title>
		<link rel="stylesheet" type="text/css" href="test.css">
		<script src="test.js"></script>-->
	</head>

	<body>
		<!-- NOTIFICATIONS -->
		<?php
			// To-Do: Revise the Notification Displaying Options.
			/*if ($msg != "")	{
				echo "<div id=\"msgBox\">&nbsp;&nbsp;".$msg."&nbsp;&nbsp;</div>";
			}*/
		?>

		<!-- HEADER -->
		<?php
			// To-Do: Create the Header from Class and Connection
		?>
		
		<!-- NAVIGATION BAR -->
		<?php
			// To-Do: Create the Navigation Bar from Class and Connection
		?>
		
		<!-- SUBPAGE -->
		<?php
			// To-Do: Create the Subpage from the Class and Connection
		?>

		<!-- SIDEBAR -->
		<?php
			// To-Do: Create the Sidebar from the Class and Connection
		?>

		<!-- FOOTER -->
		<?php
			// To-Do: Create the Footer from the Class and Connection
		?>
	</body>
</html> 