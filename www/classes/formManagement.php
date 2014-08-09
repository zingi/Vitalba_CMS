<?php

	class FormManagement	{
		
		//Private Attributes
		private $databaseConnection;
		private $form;
		private $class;


		//Constructors
		function formManagement ()	{
			$databaseConnection = new database();

		}

		function formManagement ($dbCon, $cssClass)	{
			$databaseConnection = $dbCon;
			$class = $cssClass;
		}

		//Functions

		function buildForm ($case, $action)	{
			/*
				++ + TO-DO: $languageID + ++ + get required data + ++ 
			*/


			switch ($case, $action) {
				case "register":
					# code...
				//Vars (not null in readme)
					//vars auto-increment
					$userID			=
					
					//vars not auto
						//userDaten
						$name			=
						$surname		=
						$username		= 
						$pwd 			=
						$birthday		=
						$sex			=

						//userContactData
						$street			=
						$houseNr		=
						$postalCode		=
						$city			=
						$countryCode	=

				//vars (null in README)
				/*
				*	$secondStreet	=
				*	$provinceCode	=
				*	$region 		=
				*	$prefix			=	
				*	$languageID		=
				*/


				//form zu css standarts addn
				//TO-DO: Creat getCaption - pawi = password wiederholung
					$form = "<form name = " $databaseConnection->getCaption("form") " action = " + $action + " method = "post" class='vcms_form" + $class + "'>";
					//userDaten
						$form += 	"<label>" + $databaseConnection->getCaption("name") + ":	</label><input type="text" name = " + $name + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("surn") + ":	</label><input type="text" name = " + $surname + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("user") + ":	</label><input type="text" name = " + $username + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("pass") + ":	</label><input type="password" name = " + $pwd + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("pawi") + ":	</label><input type="password" name = " + $pwd1 + "></br>";//gaet worscheinlich net, deswegen tua -> viel Spiel, Spaß und Sponnung wia a soa olter Sock amol gsg hot, der wos des sicher im Traum schreibm kannat!
						$form += 	"<label>" + $databaseConnection->getCaption("male") + ":	</label><input type="radio" name = " + $sex + " value = "1">";
						$form += 	"<label>" + $databaseConnection->getCaption("fema") + ":	</label><input type="radio" name = " + $sex + " value = "0"></br>";
						//userContactData
						$form += 	"<label>" + $databaseConnection->getCaption("stre") + ":	</label><input type="text" name = " + $street + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("hous") + ":	</label><input type="text" name = " + $houseNr + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("post") + ":	</label><input type="text" name = " + $postalCode + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("city") + ":	</label><input type="text" name = " + $city + "></br>";
						$form += 	"<label>" + $databaseConnection->getCaption("coun") + ":	</label><input type="text" name = " + $countryCode + "></br>";
						
						//null vars
						/*
						*	$form += 	"<label>"+ $databaseConnection->getCaption(?) + ":	" + "<input type=text name = "$secondStreet">" + "</label>"	
						*	$form += 	"<label>"+ $databaseConnection->getCaption(?) + ":	" + "<input type=text name = "$provinceCode">" + "</label>"
						*	$form += 	"<label>"+ $databaseConnection->getCaption(?) + ":	" + "<input type=text name = "$region">" + "</label>"
						*	$form += 	"<label>"+ $databaseConnection->getCaption(?) + ":	" + "<input type=text name = "$prefix">" + "</label>"
						*	$form += 	"<label>"+ $databaseConnection->getCaption(?) + ":	" + "<input type=text name = "$languageID">" + "</label>"				
						*/

						if($pwd == $pwd1){
							$form += 	"<input type="submit" value=" + $databaseConnection->getCaption("subm") + ">"
						}
						
					$form += "</form>";
					break;
				case "login":
					# code...

					$username;
					$password;

					$form = "<form name = "+ $databaseConnection->getCaption("form") +" action = " + $action + " method = "post" class='vcms_form" + $class + "'>";
					$form += 	"<label>" + $databaseConnection->getCaption("user") + ":	</label><input type="text" name = " + $username + "></br>";
					$form += 	"<label>" + $databaseConnection->getCaption("pass") + ":	</label><input type="password" name = " + $pwd + "></br>";	
					
					$form += 	"<input type="submit" value=" + $databaseConnection->getCaption("subm") + ">"
					$form += "</form>";

					break;
				case "email":
					# code...



					break;
				
				default:
					# code...
					break;
			}
		}
		//Getter & Setter

	}

/*
	---register
	---login
	---captcha
	---email
	---
*/ 
?>