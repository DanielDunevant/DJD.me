<!-- PHP for "Novay Technologies" © 2017, authors: "Daniel Dunevant & Jesse Primiani" -->
<?php
$linkArray = array(
                   "hexagonTest2-1",
                   "triDivTest",
                   "contact");
$textArray = array("hexagonTest2-1","triDivTest","Contact");
$numLinks =3;
require_once( "hexStretch.php");
/*Where navigation image goes previously Novay*/
//print "<img src ='images/NovayHeader_Dark.svg'   class = 'col-xs-2 col-md-2 col-sm-2'  >\n";
for($i = 0; $i <$numLinks;$i++){
        print "<a class='headerLinks col-xs-2 col-md-2 col-sm-2'  href='index.php?page=$linkArray[$i]'\n >";
        print "$textArray[$i]";
        print "</a>\n";
}

//Alternate Header Style
/*
print "<div id ='headerOptions2' class='row'>\n";
print "<img src ='images/NovayHeader_Light.svg'   class = ' col-xs-2 col-md-2 col-sm-2' >\n";
for($i = 0; $i <$numLinks;$i++)
{
        print "<a class='headerLinks2 col-xs-2 col-md-2 col-sm-2'  href='index.php?page=$linkArray[$i]' >\n";
        print "$textArray[$i]";
        print "</a>\n";
}
print "</div>\n";
*/

?>

