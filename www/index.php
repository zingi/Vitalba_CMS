<?php
	session_start();
	
	// To-Do: Connect all Classes to the index.php File
	//require_once("../cgi-bin/database.php");
	include("scripts/dropdown.php");
	
	// Create the Database Connection
	$database = new database();
	
	// To-Do: Clean Encryption Methods
	if (!isset($_SESSION["lang"]))	{
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
	}
?>

<!DOCTYPE html> 
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Content-Language" content="de" />
		<title>Drockerhof</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="css/lightbox.css">
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/lightbox.min.js"></script>
	</head>

	<body>
		<!-- Pop-Ups -->
		<?php
			if ($msg != "")	{
				echo "<div id=\"msgBox\">&nbsp;&nbsp;".$msg."&nbsp;&nbsp;</div>";
			}
		?>
		<header>
			<div id="header_img_text">
				<h3>
					<?php
						echo "".$database->getText(2, $_SESSION["lang"]);
					?>
				</h3>
			</div>
		</header>
		
		<?php
			// To-Do: Create a Navigation Bar from Class and Connection
		?>
		
		<div id="page_content">
			<?php
				if(file_exists("content/".$page))	{
					include("content/".$page);
				}
				else	{
					include("content/error.php");
				}
			?>
		</div>

		<footer>
			<div id="footer_wrap">
				<div id="footer_left">
					<div id="footer_content_left">
						<?php
							echo "".$database->getText(1, $_SESSION["lang"]);
						?>
					</div>
				</div>
				<div class="footer_spacer"></div>
				<div id="footer_center">
					<div id="footer_content_center">
						<?php
							echo "".$database->getText(5, $_SESSION["lang"]);
						?>
					</div>
				</div>
				<div class="footer_spacer"></div>
				<div id="footer_right">
					<div id="footer_content_right">
						<?php
							echo "".$database->getText(6, $_SESSION["lang"]);
						?>
					</div>
				</div>
				<div class="clear_float"></div>
			</div>
			<div id="footer_copyright">
				&copy; 2013 by Fabio Vitalba. All rights reserved.
			</div>
		</footer>
	</body>
</html> 