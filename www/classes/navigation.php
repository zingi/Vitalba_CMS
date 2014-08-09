<?php
	class Navigation	{
		// Private Attributes
		private $databaseConnection;
		private $pages;
		private $parentId;

		// Constructors
		function navigation ()	{

		}

		function navigation ($dbCon)	{
			$databaseConnection = $dbCon;
		}

		function navigation ($dbCon, $parentPId)	{
			$databaseConnection = $dbCon;
			$parentId = $parentPId;
		}

		// Functions
		function buildPageList ()	{
			// To-Do: Get specified information about the Pages
			// Get the needed Information
			if ($parentId != "")	{
				$pages;
			}	else {
				$pages;
			}
		}

		function printNavigationAsList ()	{
			$navList = "<nav><div class='vcms_navigation'>" +
							"<ul>";

			foreach ($pages as $page)	{
				// To-Do: Verify how to get the Page Title
				$navList += "<li><a href='" + $page->getURL() + "'>" + $page->getTitle() + "</a></li>";
			}

			$navList += 	"</ul>" +
						"</div></nav>";

			echo $navList;
		}

		function printNavigationDropDown ()	{
			if ($parentId = "")	{
				echo "";
			}	else	{
				$navDropDown = "<div class='vcms_navdropdown'" +
									"<ul>";
				foreach ($pages as $page)	{
					// To-Do: Verify how to get the Page Title
					$navDropDown += "<li><a href='" + $page->getURL() + "'>" + $page->getTitle() + "</a></li>";
				}

				$navDropDown += 	"</ul>" +
								"</div>";

				echo $navDropDown;					
			}
		}

		// Getters & Setters
		function setparentId ($parentPId)	{
			$parentId = $parentPId;
		}

		function getparentId ()	{
			return $parentId;
		}

		function setDBCon ($dbCon)	{
			$databaseConnection = $dbCon;
		}

		function getDBCon ()	{
			return $databaseConnection;
		}

		function getPages ()	{
			return $pages;
		}
	}
?>
