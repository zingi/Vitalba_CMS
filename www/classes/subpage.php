<?php
	class Subpage	{
		// Private Attributes
		private $databaseConnection;
		private $id;
		private $page;
		private $subPageTitle;

		// Constructors
		function subpage ()	{

		}

		function subpage ($dbCon, $pid)	{
			$databaseConnection = $dbCon;
			$id = $pid;
		}

		// Functions
		function buildSubPage ()	{
			// To-Do: Get specified information about the Subpage
			// Get the needed Information
			$subPageTitle;
			$articles;

			$page =  "<section>" +
						"<h2>" + $subPageTitle + "</h2>";

			// Print all relevant articles
			foreach ($articles as $article)	{
				$article->buildArticle();
				$page += $article->getArticle();
			}

			$page += "</section>";
		}

		function printSubPage ()	{
			echo $page;
		}

		function getTitle ()	{
			if ($usbPageTitle != "")	{
				return $subPageTitle;
			}	else	{
				return "";
			}
		}

		function getURL ()	{
			$url;

			return $url;
		}

		// Getters & Setters
		function setId ($pageId)	{
			$id = $pageId;
		}

		function getId ()	{
			return $id;
		}

		function setDBCon ($dbCon)	{
			$databaseConnection = $dbCon;
		}

		function getDBCon ()	{
			return $databaseConnection;
		}
	}
?>