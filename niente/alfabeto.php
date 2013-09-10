<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Documento senza titolo</title>
<link rel="stylesheet" href="alpha.css">
<link rel="stylesheet" href="menu.css">

<link rel="stylesheet" href="css/carousel.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/light2.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/pirobox.css" type="text/css" media="all" />

<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>
</head>
<?php include('script.php'); ?>
<body>
<?php 
echo "<div class=\"alfabetiere\">";
$alfabeto = range (a,z);

$i=0;
while ($i !=26) {
$alfabeto[$i] = strtoupper($alfabeto[$i]);

echo   "<div class=\"lettera\"><a href=\"proverbi2.php?id=$alfabeto[$i]\">  $alfabeto[$i]<a></div>";
$i=$i+1;
}
echo "</div>";
?>
</html>
