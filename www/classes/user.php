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
			$user = $databaseConnection->getUserAsArray($id);
			$caption = $databaseConnection->getCaptions("userCard");

			$printString  = "<article class='vcms_usercard " + $css + "'>";
			$printString += 	"<div class='vcms_usravatar'>" + $user['image'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['uname'] + ": </div><div class='vcms_usrvalue'>" + $user['username'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['name_'] + ": </div><div class='vcms_usrvalue'>" + $user['name'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['sname'] + ": </div><div class='vcms_usrvalue'>" + $user['surname'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['birth'] + ": </div><div class='vcms_usrvalue'>" + $user['birthdate'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['descr'] + ": </div><div class='vcms_usrvalue'>" + $user['description'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['sex__'] + ": </div><div class='vcms_usrvalue'>" + $user['sex'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['joind'] + ": </div><div class='vcms_usrvalue'>" + $user['joindate'] + "</div>";
			$printString += 	"<div class='vcms_usrlabel'>" + $caption['lasto'] + ": </div><div class='vcms_usrvalue'>" + $user['lastlogin'] + "</div>";
			
			// To-Do: If the user is watching his own card, display all information.
			//		  If enabled, show Adress/Contact information

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
