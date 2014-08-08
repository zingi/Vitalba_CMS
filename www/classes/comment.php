<?php
	class Comment 	{
		//Private Attributes
		private $databaseConnection;
		private $id;
		private $comment;
		private $class;


		//Constructors
		function comment ()	{
			$databaseConnection = new database();
		}

		function comment ($dbCon, $artId, $cssClass)	{
			$databaseConnection = $dbCon;
			$id = $artId;
			$class = $cssClass;

		}

		//Functions
		function buildComment ()	{
			//Get the needed Information
			//To-Do: create loop for all comments for an article
			//to-do: get Infor for Comment
			$commentTitle = 
			$commentText = 
			$commentAutor = 
			$commentVotes = 
			$commenDate = 

			//Comment Aufbau
			$comment = "<div class='vcms_comment" + $classCss + "'>"; 
								if($commentTitle != "")	{
				$comment +=			 "<h4>" + $commentTitle + "</h4>"; 
								}
				$comment +=		"<p>" + $commentText + "</p>";
				$comment +=		"<h5>" + $commenDate + " - " + $commentAutor + " (" + $commentVotes + ")" + "</h5>";

			$comment += "</div>";
		}

		function printComment ()	{
			echo $comment;
		}

		//Getters & Setters
		function setID ()	{
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

		function getComment ()	{
			return $comment;
		}
	}
?>