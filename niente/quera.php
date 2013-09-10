<?php session_start(); ?> <?php /*?>session_start DEVE STARE ALL'INIZIO DELLA PAGINA. COS^!!!!!!<?php */?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Amminstrazione sito</title>

<style type="text/css">
body,td,th {
	color: #006;
}
body {
}
</style>


<link href="stilequera.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
include("script.php");
connectdb();
 
$field = $_POST['campo'];
$value = $_POST['valore'];


$uid=$_SESSION['uid'];
$name=$_SESSION['name'];





if(!isset($query) || empty($query))
{$query = "select * from item";}
$query=stripslashes($query);

$result = mysql_query ($query);


$number_cols = mysql_num_fields($result);


echo "<h1>WELCOME $name</h1>";
echo "<br>";

print "<h2 id =\"titolo\">Lista elementi inseriti</h2>";

	echo "<div id=\"cpanel\">";
	echo "<h3>Dashboard</h3>";
	echo "<br><a href=\"quera.php\" title=\"HOME\"><img src = \"img/gohome.png\" id =\"cpanel\"/></a>";
	 echo "<a href=\"insert.php\" title=\"AGGIUNGI ELEMENTO\"><img src =\"img/edit_add.png\" id =\"cpanel\"/></a>";
	echo "<a href=\"logout.php\" title=\"ESCI\"><img src =\"img/logout.png\" id =\"cpanel\"/></a>";

echo "</div>";


echo "<table id=qtab> \n";
echo "<tr>\n";


echo "<th> Elemento</th><th>Categoria</th><th>Contenuto</th><th>Autore</th><th>Pubblicato</th>";
echo "</tr>\n";


while ($row = mysql_fetch_row($result))
{
echo "<tr align=center>\n";

echo "<td>";

echo $row[0];

echo "</td>\n";

echo "<td>";

echo $row[1];

echo "</td>\n";

echo "<td>";

echo teaserq($row[3]);

echo "</td>\n";

echo "<td>";

echo $row[6];

echo "</td>\n";

echo "<td>";

echo $row[7];

echo "</td>\n";

echo "<td>";     

echo "<a href =\"updateget.php?aid=$row[0]\" title =\"Modifica\"><img src = \"img/edit_ico.jpg\" alt =\"Modifica\" id = \"quera\" ></a>";
echo "<a href =\"deletion2.php?aid=$row[0]\" title = \"Cancella\"><img src = \"img/delete_ico.jpg\" id = \"quera\" ></a>";

echo "</td>\n";


echo "</tr>\n";
}

echo "</table>";


    echo "<br>
    Torna alla <a href=\"index.php\">Home</a>";
?>

</body>
</html>
