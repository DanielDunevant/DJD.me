<?php
$pageValue = $_GET['page'];
$arrayOfPages = array("Home_View","Blog","About","Contact");
if (in_array($pageValue,$arrayOfPages)) 
{
        require_once( $pageValue.".php");
	require "socialPanel.php";
}
else
{
        require_once( "triDivTest.php");
	require "socialPanel.php";
}
?>
