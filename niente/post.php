
<?php 
/*This script insert into comments table value passed from comments section under single.php and then update item table with the value of total number of comments.
So the value is calculated few time , only when we add a new comment to an item, and then is recorded into the db.
*/
session_start();
$name = addslashes($_POST['contactname']);
$email = $_POST['email'];
$text = addslashes($_POST['message']);
$aid = $_SESSION['AID'];
$date = date("d-m-y");
$time = time();

include("script.php"); 
connectdb();
$query = "insert into comments (aid,name,email,text,date,time) values ('$aid','$name','$email','$text', '$date', '$time')"; 
$result = mysql_query($query);
$numcom = numcom();
$query2 = "update item set pub='$numcom' where aid='$aid'";
$result2 = mysql_query($query2);
 
echo "<script language=\"javascript\">window.location.replace(\"single.php?id=$aid\");</script>";

?>


