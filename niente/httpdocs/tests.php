<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento senza titolo</title>
</head>

<body>



	<form action="search.php" method="get">

<table><tr><td>
	<div align="left"> 
<input type="text" name="query" id="query" size="40" value="<?php   print quote_replace($query);?>" action="include/js_suggest/suggest.php" columns="2" autocomplete="off" delay="1500">	
</div> 
<td>
<input type="submit" value="<?php print $sph_messages['Search']?>">
</td></tr></table>

	   
<?php  if ($adv==1 || $advanced_search==1) {
?>
	<table width = "100%">
	<tr>
		<td width="40%"><input type="radio" name="type" value="and" <?php print $type=='and'?'checked':''?>><?php print $sph_messages['andSearch']?></td>
		<td><input type="radio" name="type" value="or" <?php print $_REQUEST['type']=='or'?'checked':''?>><?php print $sph_messages['orSearch']?></td></tr>
	<tr>
		<td><input type="radio" name="type" value="phrase" <?php print $_REQUEST['type']=='phrase'?'checked':''?>><?php print $sph_messages['phraseSearch']?></td>
		<td><?php print $sph_messages['show']?>
			<select name='results'>
		      <option <?php  if ($results_per_page==10) echo "selected";?>>10</option>
			  <option <?php  if ($results_per_page==20) echo "selected";?>>20</option>
		      <option <?php  if ($results_per_page==50) echo "selected";?>>50</option>
		      <option <?php  if ($results_per_page==100) echo "selected";?>>100</option>
			</select>
				
	  		<?php print $sph_messages['resultsPerPage']?>   
	  	</td>
	</tr>
	</table>
<?php }?>


	
<?php if ($catid<>0){?>     
	<center><b><?php print $sph_messages['Search']?></b>: <input type="radio" name="category" value="<?php print $catid?>"><?php print $sph_messages['Only in category']?> "<?php print $tpl_['category'][0]['category']?>'" <input type="radio" name="category" value="-1" checked><?php print $sph_messages['All sites']?></center>
<?php  }?>
	<input type="hidden" name="search" value="1"> 
	</form>



</body>
</html>
