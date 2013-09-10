<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento senza titolo</title>
</head>

<body>


<form action="../search.php" method="get">

<table><tr><td>
	<div align="left"> 
<input type="text" name="query" id="query" size="40" value="<?php   print quote_replace($query);?>" action="include/js_suggest/suggest.php" columns="2" autocomplete="off" delay="1500">	
</div> 
<td>
<input type="submit" value="<?php print $sph_messages['Search']?>">
</td></tr></table>

<input type="hidden" name="search" value="1"> 
</form>



</body>
</html>
