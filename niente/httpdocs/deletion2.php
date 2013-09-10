<?php 
$value1 = $_GET['aid'];
/*$value2 = $_GET['piano'];
*/
if(!isset($query) || empty($query))


{$query = "delete from item where aid = '$value1'";}
$query=stripslashes($query);

mysql_connect("localhost","vivia_adm","neapolis") or die (mysql_error());
mysql_select_db("nientedb") or die (mysql_error());
/*$query = "select * from anagrafica";*/

$result = mysql_query ($query);

header( 'Location: quera.php' ) ;
//echo "Torna alla <a href=\"index.php\">Home</a>";

?>
