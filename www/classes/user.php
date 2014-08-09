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
			// To-Do: database->getUserAsArray()
			$user = $databaseConnection->getUserAsArray($id);
			$caption = $databaseConnection->getCaptions("userCard");

			$printString  = "<article class='vcms_usercard " + $css + "'>";

			$printString += 	"<div class='vcms_usrmaininfo'>":
			$printString += 		"<div class='vcms_usravatar'>" + $user['image'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['uname'] + ": </div><div class='vcms_usrvalue'>" + $user['username'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['name_'] + ": </div><div class='vcms_usrvalue'>" + $user['name'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['sname'] + ": </div><div class='vcms_usrvalue'>" + $user['surname'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['birth'] + ": </div><div class='vcms_usrvalue'>" + $user['birthdate'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['descr'] + ": </div><div class='vcms_usrvalue'>" + $user['description'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['sex__'] + ": </div><div class='vcms_usrvalue'>" + $user['sex'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['joind'] + ": </div><div class='vcms_usrvalue'>" + $user['joindate'] + "</div>";
			$printString += 		"<div class='vcms_usrlabel'>" + $caption['lasto'] + ": </div><div class='vcms_usrvalue'>" + $user['lastlogin'] + "</div>";
			$printString += 	"</div>";

			$printString +=		"<div class='vcms_usraddressinfo'>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['stree'] + ": </div><div class='vcms_usrvalue'>" + $user['street1'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['stre2'] + ": </div><div class='vcms_usrvalue'>" + $user['street2'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['house'] + ": </div><div class='vcms_usrvalue'>" + $user['houseno'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['posta'] + ": </div><div class='vcms_usrvalue'>" + $user['postalcode'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['city_'] + ": </div><div class='vcms_usrvalue'>" + $user['city'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['provi'] + ": </div><div class='vcms_usrvalue'>" + $user['provincecode'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['regio'] + ": </div><div class='vcms_usrvalue'>" + $user['region'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['count'] + ": </div><div class='vcms_usrvalue'>" + $user['countrycode'] + "</div>";
			$printString +=		"</div>";

			$printString +=		"<div class='vcms_usrcontactinfo'>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['email'] + ": </div><div class='vcms_usrvalue'>" + $user['email'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['telep'] + ": </div><div class='vcms_usrvalue'>" + $user['telephone'] + "</div>";
			$printString +=			"<div class='vcms_usrlabel'>" + $caption['fax__'] + ": </div><div class='vcms_usrvalue'>" + $user['fax'] + "</div>";
			$printString +=		"</div>";

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
