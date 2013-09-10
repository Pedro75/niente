<?php session_start(); ?>
<link href="style.css" rel="stylesheet" type="text/css" />
<?php
  $aid = $_SESSION['AID'];
  $categoria = $_POST['categoria'];
  $data = $_POST['data'];
  $contenuto = addslashes($_POST['contenuto']);
  $spiegazione = addslashes($_POST['spiegazione']);
  $foto = $_POST['foto'];
  $autore = addslashes($_POST['autore']);
  $pub = $_POST['pub'];


if(!isset($query) || empty($query))


{$query = "update item set categoria='$categoria', data='$data', contenuto='$contenuto', spiegazione='$spiegazione', foto='$foto' , autore='$autore', pub='$pub' where aid='$aid' ";}

mysql_connect("localhost","vivia_adm","neapolis") or die (mysql_error());
mysql_select_db("nientedb") or die (mysql_error());
$result = mysql_query ($query);


echo '<script language="javascript">window.location.replace("quera.php");</script>';

// echo "Inserimento avvenuto con successo.<br>
//    torna alla <a href=\"update.php\">schermata di aggiornamento</a>";

 ?>
 
