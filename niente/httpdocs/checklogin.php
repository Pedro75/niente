<?php
include("script.php");
connectdb();
$tbl_name="members";
$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$row = mysql_fetch_row($result); //metto i risultati della query in un array $row[]

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
session_start();
if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
/*session_register("$myusername");
session_register("$mypassword");
*/
$_SESSION['uid']=$row[0];
$_SESSION['name']=$row[3];

/*	if($myusername==giuseppe){
	header( 'Location: quera.php?username=$myusername' ) ;
	}
	else {
	header( 'Location: quera.php' ) ;
	}
*/
	header( 'Location: quera.php') ;

}
if($count<>1){
echo "Username o Password errati !";

}
?>
