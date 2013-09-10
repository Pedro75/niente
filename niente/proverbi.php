<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<meta name="keywords" content="Il dolce far niente, aforismi, news, proverbi, citazioni, curiosit&agrave, testi, canzoni, scuola, universit&agrave;, foto, dediche, classici, attori, woody allen, satira, amore, anima gemella" />
<meta name="description" content="Il dolce far niente: Vuoi una frase da dedicare al tuo amore? Vuoi conoscere il significato dei proverbi? Sei curioso o semplicemente ti va di passare un po' di tempo spensierato? Resta con noi e non te ne pentirai !" />





<title>il dolce far niente </title>


<!-- cascading style sheets -->
<link rel="stylesheet" href="menu.css">
<link rel="stylesheet" href="alpha.css">
<link rel="stylesheet" href="css/carousel.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/light2.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/pirobox.css" type="text/css" media="all" />

<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>


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
<?php include ("script.php");?>
</head>

<body>
<?php connectdb(); ?>
<!-- start main white page area -->

<div id="top"></div>

<div id="white-main">

	<div id="white-wrap">

		<div id="white-wrap-inside">
		
			<!-- start main left sidebar -->

			<?php echo sideleft2();?>			
			<!-- end main left sidebar -->
			
			<div id="right720">
				<div class="col720">
				
					<h1 class="alignc"><?php $top = frasetop(); echo $top; ?></h1>
				
				</div>
				
				<div class="clr"></div>
				
				<br />
	  			
	  			<div class="dotted720"></div>
				
					  			<div>	
				
									<?php 
									
									echo "<div class=\"alfabetiere\">";
									$alfabeto = range (a,z);
									
									$i=0;
									while ($i !=26) {
									$alfabeto[$i] = strtoupper($alfabeto[$i]);
									
									echo   "<div class=\"letterar\"><a href=\"proverbi.php?id=$alfabeto[$i]\">  $alfabeto[$i]<a></div>";
									$i=$i+1;
									}
									echo "</div>";
									?>
									
								</div>
<br />	  			

	  			
	  			<!-- start blog entries -->
	  			
	  			<div class="col480">
	  			
	  				<!-- start blog entry -->
				<?php
				connectdb();
				$letter = $_GET['id'];
				if (isset($letter)){
				$query = "select * from item where categoria = \"Proverbi\" and (contenuto like '$letter%' or contenuto like '<p>$letter%') order by \"contenuto\"";}
				else {
				$query = "select * from item where categoria = \"Proverbi\" order by \"contenuto\"";
				}
				$query = stripslashes($query);
				$result = mysql_query($query);
				while ($row = mysql_fetch_row($result))
{

					echo "<div class=\"entry\">";
					
					if ($row[5]<>null){

						echo "<a href=\"single.php?id=$row[0]\"><img class=\"post-img\" src=\"image_files/$row[5]\" alt=\"Entry\" /></a>";
	  				}

					if ($row[6] <> null) {
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />Pubblicato il: $row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"autore: \"/>Autore: $row[6]</h5>";
					} else {
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />Pubblicato il $row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"autore: \"/>Autore: Anonimo</h5>";
					}
	  			
	  				echo "<h2><a href=\"single.php?id=$row[0]\">$row[3]</a></h2>";
	  				
	  					
	  					echo "<p>$row[4]</p>"; 
	  				
	  				echo "<h5><a href=\"single.php?id=$row[0]\">Leggi ...</a> <img src=\"images/arrow-sidebar.png\" alt=\"Arrow\"/></h5>";
	  					
	  				echo"	<h5 class=\"floatr\"><a href=\"#top\">Top <img src=\"images/arrow-small-up.png\" alt=\"Arrow\" /></a></h5>";
	  					
	  				echo"	<div class=\"clr\"></div>";
	  			
	  				echo "</div>";
					
					}
					?>
	  				
	  				<!-- end blog entry -->
	  				
	  			
	  			</div>
	  			
	  			<!-- end blog entries -->
	  			
	  			<!-- start right sidebar -->
	  			
	  			<div class="col240">
	  			
	  				<!-- start widget -->
	  			
	  				<div class="widget">
	  				
	  				<form action="ricerca.php" method="post">
	  				
	  					<input id="search-text" type="text" name="search1" value="Search.." onBlur="if (this.value == '') {this.value = 'Search..';}"  onfocus="if (this.value == 'Search..') {this.value = '';}" />
	  					
	  					<input id="search-submit" type="image" src="images/search-submit.png" alt="Submit Form" />
	  					
	  					<div class="clr"></div>
	  				
	  				</form>
	  				
	  				</div>
	  				
	  				<!-- end widget -->
	  				
	  				<!-- start widget -->
	  			
	  				<div class="widget">
	  				
			<h3>Dall'archivio</h3>
				 <?php

						
					{$query = "select * from item order by rand() limit 2";}
					$query=stripslashes($query);
					
					$result=mysql_query($query);
					while ($row = mysql_fetch_row($result))
					{
					echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
					if ($row[6] <> null) {
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"autore: \"/>$row[6]</h5>";
					} else {
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"autore: \"/>Anonimo</h5>";
					}
					echo "<p>";
		$row[3] = teaser($row[3]);
		echo "<a href=\"single.php?id=$row[0]\">$row[3]</a>";
					/*echo "<p>teaser($row[3])</p>";
					*/
					echo "</p>";
					}
				?>
						
					</div>
					
					<!-- end widget -->
					
					<!-- start widget -->
					
					
					<!-- end widget -->
					
					
					<!-- start widget -->
					
					<div class="widget">
					
						<h3>Pubblicità </h3>
	  					
	  					<!--  ADVERTISEMENT TAG 120 x 600, DO NOT MODIFY THIS CODE -->
<script type="text/javascript" src="http://performance-by.simply.com/simply.js?code=42665;1;0&amp;v=2"></script>
<script type="text/javascript">
<!--
document.write('<iframe marginheight="0px" marginwidth="0px" frameborder="0" scrolling="no" width="120" height="600" src="http://optimized-by.simply.com/play.html?code=102817;42523;43813;0&from='+escape(document.referrer)+'"></iframe>');
// -->
</script>
	  				</div>
	  				
	  				<!-- end widget -->
	  			
	  			</div>
	  			
	  			<!-- end right sidebar -->
				
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
		
			<h3>Il dolce far niente</h3>
			
			<?php echo frasebtm(); ?>

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
<!--			Designed by <a href="http://www.themeskingdom.com">Themes Kingdom</a>. Developed by <a href="http://thelumberjack.com.au">The Lumberjack</a>.</p>
-->		
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