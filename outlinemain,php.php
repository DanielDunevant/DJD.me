<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->
<?php
print"<!-- PHP for 'Novay Technologies' © 2017, authors: 'Daniel Dunevant & Jesse Primiani' -->";
$pageValue = $_GET['page'];
$arrayOfPages = array("hexagonTest2-1","triDivTest","contact");
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
