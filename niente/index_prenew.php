<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<title>Il dolce far niente</title>


<!-- cascading style sheets -->

<link rel="stylesheet" href="css/carousel.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/light2.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/pirobox.css" type="text/css" media="all" />

<!-- google web fonts -->

<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css' />

<!-- external javascript -->

<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="js/jquery.jscroll-1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/jquery.roundabout.min.js"></script>
<script type="text/javascript" src="js/jquery.topscroll.js"></script>
<script type="text/javascript" src="js/jquery.tweetable.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/pirobox.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/styleswitcher.jquery.js"></script>
<?php include("script.php");
 ?>
</head>

<body>

 
<div id="top"></div>

<div id="white-main">

	<div id="white-wrap">

		<div id="white-wrap-inside">
		
			<!-- start main left sidebar -->
<?php
$left = sideleft();
echo $left;
?>		
<!-- end main left sidebar -->	
			<div id="right720">
			
				
				<!-- start roundabout -->
			
				<div class="col720">
				
					<h1 class="alignc"><?php $top = frasetop(); echo $top; ?></h1>
				
					<br />
	  			
	  				<div class="dotted720"></div>
					<!--  ADVERTISEMENT TAG 728 x 90, DO NOT MODIFY THIS CODE -->
<script type="text/javascript" src="http://performance-by.simply.com/simply.js?code=42665;1;0&amp;v=2"></script>
<script type="text/javascript">
<!--
document.write('<iframe marginheight="0px" marginwidth="0px" frameborder="0" scrolling="no" width="728" height="90" src="http://optimized-by.simply.com/play.html?code=102819;42523;43813;0&from='+escape(document.referrer)+'"></iframe>');
// -->
</script>
					<?php 
					connectdb();
					$query = "select aid,foto from item where foto is not null and foto != '' order by rand() limit 5";
					$query=stripslashes($query);
					$result = mysql_query ($query);
					$number_cols = mysql_num_fields($result);
					$vettore = array();
					$i = 0;
					$k = 10;
					while ($riga=mysql_fetch_array($result)) {
					/* echo $riga[0];
					 echo $riga[1];
					*/ 
					$vettore[$i++] = $riga[0];
					$vettore[$k++] = $riga[1];
					}
					
					echo "<ul id=\"myRoundabout\">";
					
					echo "<li><a href=\"single.php?id=$vettore[0]\"><img src=\"image_files/$vettore[10]\" alt=\"Roundabout\" /></a></li>";
					echo "<li><a href=\"single.php?id=$vettore[1]\"><img src=\"image_files/$vettore[11]\" alt=\"Roundabout\" /></a></li>";
					echo "<li><a href=\"single.php?id=$vettore[2]\"><img src=\"image_files/$vettore[12]\" alt=\"Roundabout\" /></a></li>";
					echo "<li><a href=\"single.php?id=$vettore[3]\"><img src=\"image_files/$vettore[13]\" alt=\"Roundabout\" /></a></li>";
					echo "<li><a href=\"single.php?id=$vettore[4]\"><img src=\"image_files/$vettore[14]\" alt=\"Roundabout\" /></a></li>";
					echo "</ul>";
					
					echo "<div id=\"roundabout-nav\">";
					echo "<a href=\"#\" id=\"roundNext\"><img src=\"images/arrow-left.png\" alt=\"Previous\" /></a><a href=\"#\" id=\"roundPrev\"><img src=\"images/arrow-right.png\" alt=\"Next\" /></a>";
/*					echo "<div class=\"clr\"></div>";
*/					echo "</div>";
					?>
					
					
					<script type="text/javascript">
					$(document).ready(function() {
						$('ul#myRoundabout').roundabout({
							easing: 'easeInOutSine',
							duration: 1000,
							btnNext: '#roundNext',
						    btnPrev: '#roundPrev'
							});
					});
					</script>
				
				</div>
				
<?php /*?>				<div class="clr"></div>
<?php */?>	  			
	  			<div class="dotted-top"></div>
	  			
	  			<!-- end roundabout -->
	  			
	  			<!-- start blog post previews -->
				
				<div class="col720">
				
					<h2>Gli ultimi arrivi</h2>
				
				</div>
				
				<div class="clr"></div>
				
				<!-- start blog post preview -->
				
				
				 <?php

						
						{$query = "select * from item order by rand() limit 6";}
$query=stripslashes($query);

$result=mysql_query($query);
while ($row = mysql_fetch_row($result))
{
/*echo "<a href=\"getauc.php?id=$row[11]\" >";
echo $row[0];
echo $row[1];
echo $row[2];
echo $row[4];
echo $row[9];
echo $row[10];
echo "</a>";
echo "<br/>";*/
echo "<div class=\"col240\">";
echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>$row[7] commenti</h5>";
echo "<p>";
echo teaser($row[3]);
/*echo "<p>teaser($row[3])</p>";
*/
echo "</p>";
echo "	  <h5><a href=\"single.php?id=$row[0]\">Leggi</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\" /></h5>";
echo "	</div>";
}
?>
				
			<!--	<div class="col240">
			
					<h4><a href="single.html">Titolo 1</a></h4>
					
					<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011<img class="bubble" src="images/comments.png" alt="Comments: " />35 comments</h5>
					
					<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
	  				
	  				<h5><a href="single.html">Read more</a> <img src="images/arrow-sidebar.png" alt="Arrow" /></h5>
				
				</div>-->
				
				<!-- end blog post preview -->
				
				
				
				<div class="clr"></div>
	  			
	  			<!-- start projects scroller -->
	  			
<!--	  			<div class="dotted720"></div>
				
				<div class="col720">
				
					<h2>Projects / Gallery</h2>
				
				</div>
				
				<div class="clr"></div>
				
				<script type="text/javascript">
				jQuery(document).ready(function() {
				    jQuery('#mycarousel').jcarousel();
				});
				</script>
				
				<ul id="mycarousel" class="jcarousel-skin-tango">
				
				<li>
				
					<div class="col240">
				
						<img class="post-img" src="images/demo/gallery-branding1.png" alt="Project" />
				
						<h4>Etiam egestas bibendum pharetra</h4>
						
						<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011</h5>
					
					</div>
				
				</li>
				
				<li>
				
					<div class="col240">
				
						<img class="post-img" src="images/demo/gallery-branding5.png" alt="Project" />
				
						<h4>Bibendum venenatis ullamcorper ridiculus</h4>
						
						<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011</h5>
					
					</div>
				
				</li>
				
				<li>
				
					<div class="col240">
				
						<img class="post-img" src="images/demo/gallery-illustration3.png" alt="Project" />
				
						<h4>Justo nibh ullamcorper dolor</h4>
						
						<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011</h5>
					
					</div>
				
				</li>
				
				<li>
				
					<div class="col240">
				
						<img class="post-img" src="images/demo/gallery-illustration1.png" alt="Project" />
				
						<h4>Bibendum consectetur amet aenean</h4>
						
						<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011</h5>
					
					</div>
				
				</li>
				
				<li>
				
					<div class="col240">
				
						<img class="post-img" src="images/demo/gallery-architecture3.png" alt="Project" />
				
						<h4>Ultricies ligula ipsum venenatis</h4>
						
						<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011</h5>
					
					</div>
				
				</li>
				
				<li>
				
					<div class="col240">
				
						<img class="post-img" src="images/demo/gallery-branding4.png" alt="Project" />
				
						<h4>Mollis cursus nullam purus</h4>
						
						<h5><img class="calendar" src="images/date.png" alt="Date: " />28.03.2011</h5>
					
					</div>
				
				</li>
				
	  			</ul>
	  			
	  			<div class="dotted-top"></div>
				
				<div class="clr"></div>
				
				<!-- end projects scroller -->
				
					  				<!-- start widget -->
					
					<div class="widget">
					</div>
						<h3>Pubblicita'</h3>
	  					<script type="text/javascript"><!--
google_ad_client = "ca-pub-6143593355305195";
/* blocco1 */
google_ad_slot = "8617276295";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<!--	  					<img class="post-img" src="images/demo/advert.png" alt="Entry" />
	  					
	  					<img class="post-img" src="images/demo/advert.png" alt="Entry" />
-->	  					
	  				
	  			
	  				<!-- end widget -->

				
				
				
			</div>
				
			<div class="clr"></div>

		</div>

	</div>

</div>

<!-- end main white page area -->

<!-- start footer -->

<div class="wrap960">

	<div id="four-columns">

		<div class="col240">
		
			<h3>Progetto</h3>
			
			<p>Il progetto "Il Dolce Far Niente" vuole raccogliere Poesie, Aforismi, Frasi, Cuorisità, per coservarle nel tempo e metterle a disposizione di chiunque voglia passare un po' di tempo a leggerle e commentarle .</p>

		</div>
		<div class="col720">
					<!--  ADVERTISEMENT TAG 728 x 90, DO NOT MODIFY THIS CODE -->
<script type="text/javascript" src="http://performance-by.simply.com/simply.js?code=42665;1;0&amp;v=2"></script>
<script type="text/javascript">
<!--
document.write('<iframe marginheight="0px" marginwidth="0px" frameborder="0" scrolling="no" width="728" height="90" src="http://optimized-by.simply.com/play.html?code=102819;42523;43813;0&from='+escape(document.referrer)+'"></iframe>');
// -->
</script>

</div>

		
		<!-- start footer blog posts -->
		
<!--		<div class="col240">
		
			<h3>Dall'archivio</h3>
		</div>
		<!-- end footer blog posts -->
		
		<!-- start twitter feed -->
		
<!--		<div class="col240">
		
			<h3>Latest Tweets</h3>
			
			<div id="twitter_div">
			
            <ul class="tweetList">
			
            <li class="tweet_content_0">
			
            <p class="tweet_link_0">
			The official website for the 1996 film, Space Jam, starring MJ23.
			<a href="http://bit.ly/jOwbY1">http://bit.ly/jOwbY1</a>
			<span class="hash">#vintage </span>
			</p>
			
            </li>
            
            <li class="tweet_content_1">
            <p class="tweet_link_1">
            Last.FM is so flipping awesome. Definitely in my top five favourite websites at the mo.
            <span class="hash">#lastfm </span>
            </p>
            </li>
            
            <li class="tweet_content_2">
            <p class="tweet_link_2">
            WordPress 3.2 is now available. Remember to update!
            <a href="http://bit.ly/jAoxsp">http://bit.ly/jAoxsp</a>
            </p>
            </li>
			
            </ul>
			
            </div>
			
		</div>
		
		<!-- end twitter feed -->
		
		<!-- start flickr photos -->
		
<!--		<div class="col240">
		
			<h3>About Us</h3>
			
			<p>Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
	
			<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.</p>
		
		</div>-->
		
		<!-- end flickr photos -->
		
		<div class="clr"></div>
		
		<div class="divide"></div>
		
		<div id="footer">
		
			<!-- start footer social icons -->
		
			<div id="social-footer">
			
				<div class="socfacebook">
				
					<a href="#"><img src="images/icon-blank.png" alt="Facebook" /></a>
				
				</div>
				
				
				<div class="soctwitter">
				
					<a href="#"><img src="images/icon-blank.png" alt="Twitter" /></a>
				
				</div>
				
			
			</div>
			
			<!-- end footer social icons -->
		
			
			<p id="copyright">IL DOLCE FAR NIENTE All rights reserved &copy; 2011. <br />
<!--			Designed by <a href="http://www.themeskingdom.com">Themes Kingdom</a>. Developed by <a href="http://thelumberjack.com.au">The Lumberjack</a>.-->	
</p>
	
		</div>
	
	</div>
	
</div>

<!-- end footer -->

<!-- smooth scrolling menu -->

<script type="text/javascript" src="js/control/smooth.js"></script>

<!-- tabs widget -->

<script type="text/javascript" src="js/control/tabs-widget.js"></script>

<!-- pirobox controller -->

<script type="text/javascript" src="js/control/pirobox.js"></script>

<!-- twitter controller -->

<script type="text/javascript" src="js/control/tweets.js"></script>

<!-- style switcher -->

<script type="text/javascript">  
$('#style-switcher a').styleSwitcher();
</script>
</body>
</html>
