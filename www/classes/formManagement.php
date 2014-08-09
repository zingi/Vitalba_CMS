<?php
	class FormManagement	{
		// Private Attributes
		private $databaseConnection;
		private $form;
		private $class;

		// Constructors
		function formManagement ()	{
			$databaseConnection = new database();

		}

		function formManagement ($dbCon, $cssClass)	{
			$databaseConnection = $dbCon;
			$class = $cssClass;
		}

		// Functions
		function buildForm ($case, $action)	{
			/*	Captions:
			 *	regis: Registration Form
			 *	uname: Username
			 *	name_: Name
			 *	sname: Surname
			 *	passw: Password
			 *	rpass: Repeat Password
			 *	male_: Male
			 *	femal: Female
			 *	stree: Street
			 *	house: House
			 *	posta: Postal Code
			 *	city_: City
			 *	count: Country Code
			 *	submi: Submit
			 *	login: Login Form
			 *	stre2: Street 2
			 *	provi: Province Code
			 *	regio: Region
			 *	prefi: Prefix
			 *	langu: Language
			 */

			//TO-DO: Create getCaption - pawi = password wiederholung
			//		 Create getCaption into an Array for less Database strain
			/*
				---register
				---login
				---captcha
				---email
				---
			*/ 
			switch ($case) {
				case "register":
					// To-Do: Verify only the needed attributes. Skip Uneccessary ones.
					//		  Create Grouping for User Data, Contact Data and Optional Data
					$form = "<form name='" + $databaseConnection->getCaption("regis") + "' action='" + $action + "' method='post' class='vcms_regform " + $class + "'>";
					
					// User Data
					$form += 	"<label>" + $databaseConnection->getCaption("uname") + ":	</label><input type='text' name='usrname'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("name_") + ":	</label><input type='text' name='name'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("sname") + ":	</label><input type='text' name='surname'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("user_") + ":	</label><input type='text' name='usrname'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("passw") + ":	</label><input type='password' name='pwd0'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("rpass") + ":	</label><input type='password' name='pwd1'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("male_") + ":	</label><input type='radio' name='sex' value='0'>";
					$form += 	"<label>" + $databaseConnection->getCaption("femal") + ":	</label><input type='radio' name='sex' value='1'></br>";
					
					// User Contact Data
					$form += 	"<label>" + $databaseConnection->getCaption("stree") + ":	</label><input type='text' name='street0'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("house") + ":	</label><input type='text' name='house'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("posta") + ":	</label><input type='text' name='postalcode'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("city_") + ":	</label><input type='text' name='city'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("count") + ":	</label><input type='text' name='countrycode'></br>";
					
					// Optional Data
					$form += 	"<label>" + $databaseConnection->getCaption("stre2") + ":	</label><input type='text' name='street1'></br>";	
					$form += 	"<label>" + $databaseConnection->getCaption("provi") + ":	</label><input type='text' name='provincecode'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("regio") + ":	</label><input type='text' name='region'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("prefi") + ":	</label><input type='text' name='prefix'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("langu") + ":	</label><input type='text' name='language'></br>";				

					$form += 	"<input type='submit' value='" + $databaseConnection->getCaption("submi") + "'>";
					$form += "</form>";
					break;

				case "login":
					// To-Do: Create Password and User encryption
					$username;
					$password;

					$form = "<form name='" + $databaseConnection->getCaption("login") + "' action='" + $action + "' method='post' class='vcms_loginform " + $class + "'>";
					
					$form += 	"<label>" + $databaseConnection->getCaption("uname") + ":	</label><input type='text' name='" + $username + "'></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("passw") + ":	</label><input type='password' name='" + $pwd + "'></br>";	

					$form += 	"<input type='submit' value='" + $databaseConnection->getCaption("submi") + "'>";
					$form += "</form>";

					break;

				case "email":
					// To-Do: Create the E-Mail Sending Form

					break;
				
				default:
					// To-Do: Error Message?

					break;
			}
		}

		//Getter & Setter

	}
?>
