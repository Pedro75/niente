<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>REVERSE AUCTION</title>
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

<p>
  <?php

$host = 'localhost';
$user = 'admin';
$pass = 'admin';
$db = 'nientedb';
$con = @mysql_connect($host,$user,$pass) or die (mysql_error());
$sel = @mysql_select_db($db) or die (mysql_error());

/*print $con;*/

/*session_start();
*/$aid=$_SESSION['aid'];

if (isset($_POST['submit']) && $_POST['submit']=="inserisci")
{
  $categoria = $_POST['categoria'];
  $data = $_POST['data'];
  $contenuto = addslashes($_POST['contenuto']);
  $spiegazione = addslashes($_POST['spiegazione']);
/*  $foto = $_POST['foto'];
*/  
  $autore = $_POST['autore'];
  $pub = $_POST['pub'];
/*  $phone = $_POST['phone'];
  $price = $_POST['price'];
  $note = $_POST['note'];
*/
  
  
  $sql = "insert into item (aid,categoria,data,contenuto,spiegazione,autore,pub) values ('$aid', '$categoria','$data','$contenuto','$spiegazione', '$autore', '$pub')";

  if($result = @mysql_query($sql) or die (@mysql_error()))
  {   
echo '<script language="javascript">window.location.replace("quera.php");</script>';
    // echo "Inserimento avvenuto con successo.<br>
   // torna alla <a href=\"index.php\">Home</a>";

  }
/*  @mysql_close();
*/}else{

echo "<div id=\"cpanel\">";
	echo "<h3>Dashboard</h3>";
	echo "<br>
    <a href=\"quera.php\" title=\"HOME\"><img src = \"img/gohome.png\" id =\"cpanel\"/></a>";
/*    echo "<a href=\"dumpdf.php\" title=\"Stampa tutte le schede\" ><img src =\"img/kpdf.png\" id =\"cpanel\" /></a>";
*/    echo "<a href=\"insert.php\" title=\"ADD\"><img src =\"img/edit_add.png\" id =\"cpanel\"/></a>";
    echo "<a href=\"deletion2.php\" title=\"DELETE\"><img src =\"img/edit_remove.png\" id =\"cpanel\"/></a>";
/*    echo "<br> <a href=\"ricerca_bis.php\" title=\"Ricerca\"><img src =\"img/find.png\" id =\"cpanel\"/></a>";
*/
echo "</div>";


  ?>
</p>
<h1 id="titleins"><strong>Nuovo elemento</strong></h1>
<table border="1" id = "tabins">	
<tr><td>
<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="post">


 Elemento:  <input name="aid" type="text" size="5" maxlength="5" border="10" value="<?php echo $c0; ?>" />
 Categoria:  <!--/*<input name="categoria" type="text" size="15" maxlength="25" border="10" value="<?php echo $c1; ?>" /> */       
 
 /*<fieldset>
  <legend>Categoria</legend>*/-->

  <select name="categoria" value="<?php echo $c1; ?>">
   <option value="Proverbi" selected="selected">Proverbi</option>
   <option value="Aforismi">Aforismi</option>
   <option value="da Film">da Film</option>
   <option value="da Canzoni">da Canzoni</option>
   <option value="Curiosità">Curiosità</option>
  </select>
<!-- </fieldset>

--> 
 
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

<form action="submit.php" method="post" enctype="multipart/form-data" name="image_upload_form" id="image_upload_form" style="margin-bottom:0px;">
<label>Il file immagine deve essere un jpeg, gif o png minore di 4Mb:</label><br />
          <input name="image_upload_box" type="file" id="image_upload_box" size="40" />
          <input type="submit" name="submit" value="Upload immagine" />     
     
     <br />
	<br />

     
      <label>Scale down image? (2592 x 1944 px max):</label>
      <br />
      <input name="max_width_box" type="text" id="max_width_box" value="417" size="4">
      x      
      
      <input name="max_height_box" type="text" id="max_height_box" value="267" size="4">
      px.
      <br />
      <br />

      

<input name="submitted_form" type="hidden" id="submitted_form" value="image_upload_form" />
          </form>


</td></tr></table>
  <?php
}

	
?>

<?php if(isset($_REQUEST['show_image']) and $_REQUEST['show_image']!=''){?>
<p>
	<img src="image_files/<?php echo $_REQUEST['show_image'];?>" />
</p>
<?php }?>


</body>
</html>
