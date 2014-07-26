<?php
	class Database	{
		// Private Attributes

		// Constructors
		function database ()	{
			if (!mysql_connect('localhost', 'drockerhofit', 'vorUnuJ4:8Jy9'))	{
				echo "Datenbankverbindung konnte nicht aufgebaut werden.";
			}	else	{
				if (!mysql_select_db('drockerhofit'))	{
					echo "Datenbank konnte nicht gefunden werden.";
				}
			}

			// To-Do: Check if Tables exist
			if (TRUE)	{
				// Do Nothing, Maybe check consistency?
			}	else	{
				// To-Do: Create all needed Tables
				$this->createTable("vcms_article", 
								   "Index INTEGER NOT NULL AUTO_INCREMENT,
								    Title VARCHAR(50) NOT NULL,
								    SubTitle VARCHAR(100),
								    Content TEXT NOT NULL,
								    Author VARCHAR(15),
								    CreationDate DATETIME,
									PageId INTEGER NOT NULL,
								    PRIMARY KEY (Index)");
				
			}
		}
		
		// Functions
		function returnSQLQuery ($sqlQuery)	{
			$ergebnis = mysql_query($sqlQuery);
			
			$datensatz = array();
			
			while($row = mysql_fetch_array($ergebnis))	{
				array_push($datensatz, $row);
			}
			
			return $datensatz;
		}
		
		function executeSQLQuery ($sqlQuery)	{
			$ergebnis = mysql_query($sqlQuery);
		}
		
		// Set-Up Tables
		function createTable ($tableName, $fields)	{
			$this->executeSQLQuery("CREATE TABLE " + $tableName + " (
										" + $fields + ");");
		}

		function getArticleTitle ($id, $lang)	{
			// To-Do: Add different languages
			//		  Verify TABLE for the Article Title
			$titles = $this->returnSQLQuery("SELECT * FROM vcms_articles WHERE ID=".$id);
			if ($titles == NULL)	{
				$title = "Titel nicht gefunden.";
			}	else	{
				$title = $titles[0]["Text"];
			}
			return $title;
		}
		
		function getArticleText ($id, $lang)	{
			// To-Do: Verify TABLE for the Article
			if (strcasecmp($lang, "de") == 0)	{
				$lang = "de";
			}	else if (strcasecmp($lang, "it") == 0)	{
				$lang = "it";
			}	else if (strcasecmp($lang, "en") == 0)	{
				$lang = "en";
			}	else 	{
				$lang = "de";
			}

			$texts = $this->returnSQLQuery("SELECT * FROM vcms_articles WHERE ID=".$id);
			
			if ($texts == NULL)	{
				$text = "Text nicht gefunden.";
			}	else	{
				$text = $texts[0][$lang];
			}
			return $text;
		}
		
		function getArticleAuthor ($id, $lang)	{
			// To-Do: Get Author of the Article
		}

		// Getters & Setters
	}
?>