<?php session_start(); ?>
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
<?php include("script.php");?>

</head>

<body>



<h1 id="titleins" >Modifica elemento</h1>


<?php 
$aid = $_GET['aid'];

if(!isset($query) || empty($query))


$query = "select * from item where aid = '$aid'";


$query=stripslashes($query);
connectdb();


$result = mysql_query ($query);
$number_cols = mysql_num_fields($result);

echo "<table id=qtab border=1> \n";
echo "<tr>\n";




while ($row = mysql_fetch_row($result))
{
echo "<tr align=center>\n";
$_SESSION['AID']=$row[0];
$c0 = $row[0];
$c1 = $row[1];
$c2 = $row[2];
$c3 = stripslashes($row[3]);
$c4 = stripslashes($row[4]);
$c5 = $row[5];
$c6 = stripslashes($row[6]);
$c7 = $row[7];


echo "</tr>\n";
}

?>




<div id="cpanel">
<h3>Dashboard</h3>





<br>
    <a href="quera.php" title="HOME"><img src ="img/gohome.png" id ="cpanel"/></a>
   <a href="insert.php" title="ADD"><img src ="img/edit_add.png" id ="cpanel"/></a>
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
<?php if(isset($_REQUEST['show_image']) and $_REQUEST['show_image']!=''){?>
		<input name="foto" type="hidden" size="20" maxlength="20" value="<?php echo $_REQUEST['show_image']; ?>" />

<?php }
else{?>
<input name="foto" type="hidden" size="20" maxlength="20" value="<?php echo $c5; ?>" />
<?php }?>



<br />
    <input name="submit" type="submit" value="inserisci">
  </p>
<h2> Immagine attuale </h2>
	<img src="image_files/<?php echo $c5; ?>" />
</p>
</form>


<form action="submitupd.php" method="post" enctype="multipart/form-data" name="image_upload_form" id="image_upload_form" style="margin-bottom:0px;">
<label>Cambia immagine. Il file deve essre jpeg,gif,png minore di 4Mb:</label><br /><br />
          <input name="image_upload_box" type="file" id="image_upload_box" value="<?php echo $c5; ?>" size="40"  />
          <input type="submit" name="submit" value="Upload immagine" />     
     <br />
	<br />


<input name="submitted_form" type="hidden" id="submitted_form" value="image_upload_form" />
          </form>

<?php if(isset($_REQUEST['show_image']) and $_REQUEST['show_image']!=''){?>
<p>
<h2> Immagine pre-caricata </h2>
	<img src="image_files/<?php echo $_REQUEST['show_image'];?>" />
</p>
<?php }?>



</td>

</tr></table>

</body>
</html>
