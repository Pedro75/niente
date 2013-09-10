<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>REVERSE AUCTION</title>

<link href="stile.css" rel="stylesheet" type="text/css" />
</head>

<body>



<h1 id="titleins" >AUCTION </h1>


<?php 
$id = $_GET['id'];

/*if($piano <> "tutti")

{
*/

if(!isset($query) || empty($query))


{$query = "select * from auction where aid = '$id' ";}


/*}
 else 
 
 {
*//*if(!isset($query) || empty($query))


{$query = "select piano, posizione,verticale, fila, nome, cognome, indirizzo,citta, dat_nasc, dat_con, confratello, telefono, cellulare, note from anagrafica where $field = '$value' order by piano desc";}
*/
/*}
*/
$query=stripslashes($query);

mysql_connect("localhost","admin","admin") or die (mysql_error());
mysql_select_db("congrega") or die (mysql_error());
/*$query = "select * from anagrafica";*/

$result = mysql_query ($query);

/*print $result ;
*/
$number_cols = mysql_num_fields($result);

/*echo "<b>query : $query</b>";
*/
echo "<table id=qtab border=1> \n";
echo "<tr>\n";


while ($row = mysql_fetch_row($result))
{



echo $row[10];

echo "<tr align=center>\n";





$c0 = $row[0];
$c1 = $row[1];
$c2 = $row[2];
$c3 = $row[3];
$c4 = $row[4];
$c5 = $row[5];
$c6 = $row[6];
$c7 = $row[7];
$c8 = $row[8];
$c9 = $row[9];
$c10 = $row[10];
$c11 = $row[11];
$c12 = $row[12];
$c13 = $row[13];


/*echo $c13;
*//*for ($i=0 ; $i<$number_cols ; $i++)
{

echo "<td>";

echo $row[$i];
echo "</td>\n";

}
*/echo "</tr>\n";
}

/*echo "</table>";
    echo "<br>
    Torna alla <a href=\"index.php\">Home</a>";
*/?>

<div id="cpanel">
<h3>Dashboard</h3>
<br>
    <a href="index.php" title="HOME"><img src ="img/gohome.png" id ="cpanel"/></a>
<br />
</div>

<table  border="1" id = "tabins">
  <tr>
 
   <td>


<form action="update_on.php" method="post">
 Posizione:  <input name="posizione" type="int" size="5" maxlength="4" border="10" value="<?php echo $c1; ?>" />        
<!-- Verticale:  <input name="verticale" type="text" size="4" maxlength="3" value="<?php echo $c2; ?>" />
 Fila:  <input name="fila" type="text" size="4" maxlength="3" value="<?php echo $c3; ?>" />
 Piano: <input name="piano" type="text" size="15" maxlength="14" value="<?php echo $c0; ?>">
--> <br /><br /><br />
 TITLE:    <input name="nome" type="text" size="20" maxlength="14" value="<?php echo $c4; ?>" /> 
 SUBJECT: <input name="cognome" type="text" size="20" maxlength="19" value="<?php echo $c5; ?>">
 <br /><br />
 START DATE: <input name="dat_nasc" type="text" size="12" maxlength="11" value="<?php echo $c8; ?>" /> 
 END DATE: <input name="dat_con" type="text" size="12" maxlength="11" value="<?php echo $c9; ?>" />

  <p>ADDRESS:
    <input name="indirizzo" type="text" size="35" value="<?php echo $c6; ?>"> 
    CITY:
    <input name="citta" type="text" size="15" value="<?php echo $c7; ?>">
    <br />
  </p>
  <p>PHONE:
    <input name="telefono" type="text" size="12" value="<?php echo $c11; ?>">
  PRICE:
    <input name="cellulare" type="text" size="12" value="<?php echo $c12; ?>">
  </p>
<!--  <p>
	Confratello:
      <input name="confratello" type="text" size="3" value="<?php echo $c10; ?>">
  </p>
-->  <p>
  </p>
  <p>EXPLAIN:
    <textarea name="note" cols="55" rows="7" ><?php echo $c13; ?></textarea>
    <br />
    <br /><br />
<!--    <input name="submit" type="submit" value="inserisci">
-->  </p>
</form>

</td>

</tr></table>

</body>
</html>
