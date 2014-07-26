<?php
	class Gallery	{
		// Private Attributes
		private $databaseConnection;
		private $id;
		private $images;
		private $gallery;

		// Constructors
		function gallery ()	{
			$databaseConnection = new database();
		}

		function gallery ($dbCon, $gId)	{
			$databaseConnection = $dbCon;
			$id = $gId;
			$images = $this->getImages();
		}

		// Functions
		function getImages ()	{
			// To-Do: Create the Images Array

		}

		function buildGallery ()	{
			// To-Do: Create the Gallery-String
			// Get the needed Information
			
		}

		function printArticle ()	{
			echo $gallery;
		}

		// Getters & Setters
		function setID ($gId)	{
			$id = $gId;
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

		function getGallery ()	{
			return $gallery;
		}
	}
?>