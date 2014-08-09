<?php
	class SessionManagement	{
		// Private Attributes
		private $databaseConnection;

		// Constructors
		function sessionManagement ()	{
			$databaseConnection = new database();
		}

		function sessionManagement ($dbCon)	{
			$databaseConnection = $dbCon;
		}

		// Functions
		function createSession ()	{
			// To-Do: database->getLangId
			//		  database->getGuestPermission
			//		  
			session_start();
			session_regenerate_id();

			$_SESSION['language'] = $database->getLangId(1);
			$_SESSION['username'] = 'GUEST';
			$_SESSION['permissions'] = $database->getGuestPermision();
			$_SESSION['logindatetime'] = date("YmdHis", date_timestamp_get());
		}	

		function login ($loginStr)	{
			// To-Do: Verify Standard for Login String
			//		  database->getUserIdWithName
			//		  database->getUserPermissions
			//		  database->createLoginLog, remember to create an Eventlog as well when creating the Login Log
			if ($loginStr <> "")	{
				// Get Username from the Login String
				if (verifyLogin($loginStr))	{
					$username = substr($loginStr, 0, 9);
					$_SESSION['userid'] = $databaseConnection->getUserIdWithName($username);
					$_SESSION['username'] = $username;
					$_SESSION['permissions'] = $databaseConnection->getUserPermissions($_SESSION['userid']);
					$_SESSION['logindatetime'] = date("YmdHis", date_timestamp_get());

					$databaseConnection->createLoginLog(session_id(), $_SESSION['userid']);

					return true;
				}	else	{
					return false;
				}
			}	else	{
				return false;
			}
		}

		function verifyLogin ($loginStr)	{
			// To-Do: Verify Standard for Login String
			//		  Set usrName, usrPwd
			//		  Create Database Functions
			$usrName =

			if ($database->checkValidUser($usrName))	{
				$usrPwd =
				
				if ($database->checkPwdCorrect($usrPwd))	{
					return true;
				}	else	{
					return false;
				}
			}	else	{
				return false;
			}
		}

		function logout ()	{
			// Delete the current session
			session_destroy();
		}

		// Getters & Setters
	}
?>
