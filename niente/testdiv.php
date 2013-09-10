<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title>Documento senza titolo</title>
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/boxstyle.css" type="text/css" media="all" />
<style>

body {
	font:14px 'Comfortaa', cursive;
}
h1 {
	color:#56A0D3;
	font-family: 'Paytone One', sans-serif;
	font-size:23px;
	font-weight:300;
	line-height:30px;
}

h2 {
	color:#56A0D3;
	font-family: 'Paytone One', sans-serif;
	font-size:21px;
	font-weight:300;
	padding:0 0 10px;
}

h3 {
	color:#56A0D3;
	font-family: 'Paytone One', sans-serif;
	font-size:19px;
	font-weight:300;
	padding:0 0 15px;
}

h4 {
	color:#565555;
	font-size:13px;
	font-weight:bold;
	padding:0 0 5px;
}

h5 {
	color:#B3B3B3;
	font-family:'Droid Serif', Georgia, serif;
	font-size:11px;
	padding:0 0 15px;
}

h5 a:link,h5 a:active,h5 a:visited {
	color:#B3B3B3;
	text-decoration:none;
}

h5 a:hover {
	color:#7f7e7e;
	text-decoration:none;
}

h6 {
	color:#565555;
	font-size:13px;
	font-weight:bold;
	padding:0 0 15px;
}
	

	
	</style>

<?php include('script.php'); ?>
</head>

<body>
<div class="table">
		<?php
		connectdb();
		
		echo "<div class=\"bl\"><div class=\"br\"><div class=\"tl\"><div class=\"tr\">";  
		echo "<div class=\"entryred\">";		
		$query = "select * from item where categoria = \"proverbi\" order by rand() limit 1";
		$query=stripslashes($query);
		
		$result=mysql_query($query);
		while ($row = mysql_fetch_row($result))
		{
		echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
		echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
		echo "<p>";
		echo teaser($row[3]);
		echo "</p>";
		echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
		} 
      echo" </div>";
	echo"</div></div></div></div>";  
echo"<div class=\"clear\">&nbsp;</div>";
  
	  
	  		echo "<div class=\"entrygreen\">";		
		$query = "select * from item where categoria = \"aforismi\" order by rand() limit 1";
		$query=stripslashes($query);
		
		$result=mysql_query($query);
		while ($row = mysql_fetch_row($result))
		{
		echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
		echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
		echo "<p>";
		echo teaser($row[3]);
		echo "</p>";
		echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
		} 
      echo" </div>";




	  		echo "<div class=\"entryvio\">";		
		$query = "select * from item where categoria = \"poesie\" order by rand() limit 1";
		$query=stripslashes($query);
		
		$result=mysql_query($query);
		while ($row = mysql_fetch_row($result))
		{
		echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
		echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
		echo "<p>";
		echo teaser($row[3]);
		echo "</p>";
		echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
		} 
      echo" </div>";

	  		echo "<div class=\"entryblu\">";		
		$query = "select * from item where categoria = \"da canzoni\" order by rand() limit 1";
		$query=stripslashes($query);
		
		$result=mysql_query($query);
		while ($row = mysql_fetch_row($result))
		{
		echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
		echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
		echo "<p>";
		echo teaser($row[3]);
		echo "</p>";
		echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
		} 
      echo" </div>";


	  		echo "<div class=\"entryyel\">";		
		$query = "select * from item where categoria = \"curiosita\" order by rand() limit 1";
		$query=stripslashes($query);
		
		$result=mysql_query($query);
		while ($row = mysql_fetch_row($result))
		{
		echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
		echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
		echo "<p>";
		echo teaser($row[3]);
		echo "</p>";
		echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
		} 
      echo" </div>";

	  	
		
		
		
		
		echo "<div class=\"entryorange\">";	
				echo "<div class=\"bl\"><div class=\"br\"><div class=\"tl\"><div class=\"tr\">";  
		$query = "select * from item where categoria = \"da film\" order by rand() limit 1";
		$query=stripslashes($query);
		
		$result=mysql_query($query);
		while ($row = mysql_fetch_row($result))
		{
		echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
		echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
		echo "<p>";
		echo teaser($row[3]);
		echo "</p>";
		echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
		} 
			echo"</div></div></div></div>";  

		
        echo" </div>";

		
		
		
		
		?>



</div>

</body>
</html>
