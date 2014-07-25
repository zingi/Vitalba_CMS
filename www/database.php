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
		}
		
		// Functions
		function doSQLQuery ($sqlQuery)	{
			$ergebnis = mysql_query($sqlQuery);
			
			$datensatz = array();
			
			while($row = mysql_fetch_array($ergebnis))	{
				array_push($datensatz, $row);
			}
			
			return $datensatz;
		}
		
		function doSimpleSQL ($sqlQuery)	{
			$ergebnis = mysql_query($sqlQuery);
		}
		
		function getArticleTitle ($id, $lang)	{
			// To-Do: Add different languages
			//		  Verify TABLE for the Article Title
			$titles = $this->doSQLQuery("SELECT * FROM titel WHERE ID=".$id);
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

			$texts = $this->doSQLQuery("SELECT * FROM content WHERE ID=".$id);
			
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