<?php
	class User	{
		// Private Attributes
		private $databaseConnection;
		private $id;
		private $printString;
		private $css;

		// Constructors
		function user ()	{
			$databaseConnection = new database();
		}

		function user ($dbCon, $cssClass)	{
			$databaseConnection = $dbCon;
			$css = $cssClass;
		}

		function user ($dbCon, $uId, $cssClass)	{
			$databaseConnection = $dbCon;
			$id = $uId;
			$css = $cssClass;
		}

		// Functions
		function buildUserCard ()	{
			/*
			- VCMS_User
			--- ID, INT NOT NULL AUTO_INCREMENT PRIMARY KEY
			--- Username, VARCHAR(10) NOT NULL
			--- Password, VARCHAR(20) NOT NULL
			--- Language_ID, INT NOT NULL FOREIGN KEY
			--- Name, VARCHAR(20) NOT NULL
			--- Surname, VARCHAR(20) NOT NULL
			--- Birthdate, DATE NULL
			--- Description, TEXT NULL
			--- Sex, VARCHAR(1) NULL
			--- Address_ID, INT NOT NULL FOREIGN KEY
			--- Contact_ID, INT NOT NULL FOREIGN KEY
			--- Join_Date, DATETIME NOT NULL
			--- Last_Login, DATETIME NOT NULL
			--- Premissionset_ID, INT NOT NULL FOREIGN KEY
			--- Image_ID, INT NOT NULL FOREIGN KEY
			--- SSL, BOOLEAN NOT NULL
			*/
			// To-Do: Fill in Captions from Form.php
			//		  database->getUserAsArray()
			$user = $databaseConnection->getUserAsArray();
			$printString  = "<article class='vcms_usercard " + $css + "'>";
			$printString += 	"<div class='vcms_label'><b>" + $caption['username'] + ":</b> " + $user['username'] + "</div>";
			$printString += 	"";
			$printString += "</article>";
		}

		function buildUserList ()	{

		}

		function printUser()	{
			echo $printString;
		}

		// Getters & Setters
	}
?>