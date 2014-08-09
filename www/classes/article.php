<?php
	class Article	{
		// Private Attributes
		private $databaseConnection;
		private $id;
		private $article;
		private $class;

		// Constructors
		function article ()	{
			$databaseConnection = new database();
		}

		function article ($dbCon, $artId, $cssClass)	{
			$id = $artId;
			$databaseConnection = $dbCon;
			$class = $cssClass;
		}

		// Functions
		function buildArticle ()	{
			// Get the needed Information
			$articleTitle = $databaseConnection->getArticleTitle($id, $_SESSION["language"]);
			$articleText = $databaseConnection->getArticleText($id, $_SESSION["language"]);
			$articleAuthor = $databaseConnection->getArticleAuthor($id, $_SESSION["language"]);

			$article = 	"<article class='" + $class + "'>" +
							"<h3>" + $articleTitle + "</h3>"
				  			"<p>" + $articleText + "</p>";
							// If the Author for the Article is set, print it.
							if ($articleAuthor != "")	{
								$article += "<h5>" + $articleAuthor + "</h5>";
							}
			$article += "</article>";
		}

		function printArticle ()	{
			echo $article;
		}

		// Getters & Setters
		function setID ($artId)	{
			$id = $artId;
		}

		function getID ()	{
			return $id;
		}

		function setDBCon ($dbCon)	{
			$databaseConnection = $dbCon;
		}

		function getDBCon ()	{
			return $databaseConnection;
		}

		function getArticle ()	{
			return $article;
		}
	}
?>
