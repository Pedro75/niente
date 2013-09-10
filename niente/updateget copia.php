<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Amministrazione</title>
<link href="stile.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js" ></script >
<script type="text/javascript" >
tinyMCE.init({
        mode : "textareas",
        theme : "simple"   //(n.b. no trailing comma, this will be critical as you experiment later)
});
</script >

</head>

<body>



<h1 id="titleins" >Modifica elemento</h1>


<?php 
$aid = $_GET['aid'];
/*$piano = $_GET['piano'];
$field2 = $_POST['campo2'];
$value2 = $_POST['valore2'];
*/
/*if($piano <> "tutti")

{
*/

if(!isset($query) || empty($query))


{$query = "select * from item where aid = '$aid'";}


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
mysql_select_db("nientedb") or die (mysql_error());
/*$query = "select * from anagrafica";*/

$result = mysql_query ($query);

/*print $result ;
*/
$number_cols = mysql_num_fields($result);

/*echo "<b>query : $query</b>";
*/
echo "<table id=qtab border=1> \n";
echo "<tr>\n";

/*for ($i=0 ; $i<$number_cols ; $i++)
{
echo "<th>". mysql_field_name($result, $i)."</th>\n";
}
*/



/*echo "<th> Piano</th><th>Posizione</th><th>Verticale</th><th>Fila</th><th>Nome</th><th>Cognome</th><th>Indirizzo</th><th>Citta'</th><th>Data di nascita</th><th>Data contratto</th><th>Confratello</th><th>Telefono</th><th>Cellulare</th>";
echo "</tr>\n";
*/


while ($row = mysql_fetch_row($result))
{
echo "<tr align=center>\n";

$c0 = $row[0];
$c1 = $row[1];
$c2 = $row[2];
$c3 = $row[3];
$c4 = $row[4];
$c5 = $row[5];
$c6 = $row[6];
$c7 = $row[7];


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
    <a href="quera.php" title="HOME"><img src ="img/gohome.png" id ="cpanel"/></a>
   <a href="insert.php" title="ADD"><img src ="img/edit_add.png" id ="cpanel"/></a>
<!--   <a href="schedapdf3.php?piano=<?php echo $c0;?>&amp;posizione=<?php echo $c1;?>" title = " Stampa questo record"><img src="img/acroread.png" id="cpanel" /></a>
--> <a href="deletion2.php?aid=<?php echo $c0;?>" title =" DELETE"><img src ="img/edit_remove.png" id ="cpanel"/></a>

<!--   <br> <a href="ricerca_bis.php" title="Ricerca"><img src ="img/find.png" id ="cpanel"/></a>
-->
<a href="updateget.php?aid=<?php echo ($c0-1);?>" title = "PREV"><img src="img/back.png" id="cpanel" /></a>
 <a href="updateget.php?aid=<?php echo ($c0+1);?>" title = "NEXT"><img src="img/forward.png"  id ="cpanel" /></a>
<br />
</div>

<table  border="1" id = "tabins">
  <tr>
 
   <td>


<form action="update_on.php" method="post">
 Elemento:  <input name="aid" type="int" size="5" maxlength="5" border="10" value="<?php echo $c0; ?>" />
 
 
 Categoria:  <input name="categoria" type="int" size="15" maxlength="25" border="10" value="<?php echo $c1; ?>" />  
 
 
 
       
 Autore:  <input name="autore" type="text" size="20" maxlength="20" value="<?php echo $c6; ?>" />
 <br /><br />
 Data:  <input name="data" type="text" size="10" maxlength="10" value="<?php echo $c2; ?>" />
 Pubblicato: <input name="pub" type="text" size="2" maxlength="1" value="<?php echo $c7; ?>">
 <br /><br /><br />
 <p>
  <p>Contenuto:
    <textarea name="contenuto" cols="57" rows="15" ><?php echo $c3; ?></textarea>
    <br />
    <br /><br />

  
  
  </p>
  <p>Spiegazione:
    <textarea name="spiegazione" cols="57" rows="15" ><?php echo $c4; ?></textarea>
    <br />
    <br /><br />
    <input name="submit" type="submit" value="inserisci">
  </p>
</form>

</td>

</tr></table>

</body>
</html>
