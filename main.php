<?php
$pageValue = $_GET['page'];
$arrayOfPages = array("about","resume","blog","projects","contact");
if (in_array($pageValue,$arrayOfPages)) 
{
        require_once( $pageValue.".php");
	require "socialPanel.php";
}
else
{
        require_once( "about.php");
	require "socialPanel.php";
}
?>
