<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
<?php include("script.php"); ?>

<?php 
connectdb();
$id2=$_GET['id'];
$query2 ="select contenuto from item where aid='$id2'";
$result2 = mysql_query($query2);
$row2 = mysql_fetch_row($result2);
$row2[0] = strip_tags ($row2[0]);
echo "<title>$row2[0]</title>"; 
?>



<!-- cascading style sheets -->

<link rel="stylesheet" href="css/carousel.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/light2.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/pirobox.css" type="text/css" media="all" />

<!-- google web fonts -->
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Paytone+One' rel='stylesheet' type='text/css'>

<!--<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css' />-->

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

</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- start main white page area -->

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
			
				<div class="col720">
				
					<h1 class="alignc"><?php $top = frasetop(); echo $top; ?></h1>
				
				</div>
				
				<div class="clr"></div>
				
				<br />
	  			
	  			<div class="dotted720"></div>
			
				<!-- start blog entry -->
	  			
				
				
				
				<?php 
				connectdb();
                  $id = $_GET['id'];
				  $_SESSION['AID']=$id;
				  $numcom = numcom();
                  if(!isset($query) || empty($query))

     
                  {$query = "select * from item where aid = '$id' ";}
				  

$result = mysql_query ($query);
$number_cols = mysql_num_fields($result);
while ($row = mysql_fetch_row($result))
{


	  			echo "<div class=\"col480\">";
	  				
	  			echo "<div class=\"single\">";
				
				
				
				switch ($row[1]) {
				
								case "Proverbi":
											echo "<div class=\"bordored\">";
									break;
								case "Aforismi":
											echo "<div class=\"bordogre\">";

									break;
								case "da Canzoni":
											echo "<div class=\"bordoblu\">";
									break;
								case "Poesie":
											echo "<div class=\"bordovio\">";
									break;
								case "da Film":
											echo "<div class=\"bordoorg\">";
									break;
								case "Curiosit�":
											echo "<div class=\"bordoyel\">";
									break;
									
									
									
								}
				
				
				
				$tit= strip_tags($row[3]);
	  			
	  					echo "<h2 class=\"vio\">$tit</h2>";
						
			if ($row[4]==null) {
						echo"<div class=\"fb-like\" data-href=\"http://www.ildolcefarniente.it/single.php?id=$id\" data-send=\"true\" data-layout=\"button_count\" data-width=\"400\" data-show-faces=\"true\" data-font=\"arial\"></div>";
						}
echo "<br />";echo "<br />";

	  				
//	 echo "<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date:\" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments:\" />$numcom commenti</h5>";
					if ($row[6] <> null) {
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />Pubblicato il: $row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"autore: \"/>Autore: $row[6]</h5>";
					} else {
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />Pubblicato il $row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"autore: \"/>Autore: Anonimo</h5>";
					}
						

	  					
	  					if ($row[5]<>null){

						echo "<img class=\"post-img\" src=\"image_files/$row[5]\" alt=\"Entry\" />";
	  				}
					
					if ($row[4]<>null){
	  					echo "<p>$row[4]</p>"; 
						echo"<div class=\"fb-like\" data-href=\"http://www.ildolcefarniente.it/single.php?id=$id\" data-send=\"true\" data-layout=\"button_count\" data-width=\"400\" data-show-faces=\"true\" data-font=\"arial\"></div>";
						}
	echo "</div>";
	
	
	}?>
						
			<?php /*?>									
						<?php 
						connectdb ();
						$queryc = "select * from comments where aid = $id";
						$resultc = mysql_query ($queryc);
						?>
						<div id="comments">
	  				
	  						<ul>
														<li>
							</li>

							<h2><?php echo $numcom; ?> Commenti</h2>
	  						
	  						
							
							<li><?php */?>
							<br/>
							<h2 class="gre">Lascia un commento</h2>
							
							
							
							<?php echo "<div class=\"fb-comments\" data-href=\"http://www.ildolcefarniente.it/single.php?id=$id\" data-num-posts=\"100\" data-width=\"450\"></div>"; ?>
	  						
<?php /*?>	  						<!-- start comments form -->
							<?php echo comment(); ?>
	  						
							<!-- end comments form -->
</li>
	  						
<?php while ($rowc = mysql_fetch_row($resultc))
{						
					echo "	<!-- start comments area -->";
	  							echo "<!-- start comment -->";
	  						
	  						echo"	<li>";
	  							
	  							echo "	<div class=\"gravatar\">";
	  								
	  									echo "<img src=\"images/avatar.png\" alt=\"Gravatar\" />";
	  								
	  								echo "</div>";
	  							
	  							echo "	<h4>"; echo stripslashes ($rowc[2]); echo"</h4>";
	  								
	  								echo "<h5>$rowc[5] at $rowc[6]</h5>";
	  								
	  								echo "<div class=\"clr\"></div>";
	  								
	  								echo "<p>"; echo stripslashes($rowc[4]); echo"</p>";
	  								
	  								echo "<h5 class=\"floatr\"><a href=\"#top\">Torna su <img src=\"images/arrow-small-up.png\" alt=\"Arrow\" /></a></h5>";
	  								
	  							echo	"<div class=\"clr\"></div>";
								
	  							
	  							echo "</li>";
								}
								?>
	  						
	  							<!-- end comment -->
	  						
	  						
	  						</ul>
	  						
	  				
	  					</div><?php */?>
	  					
	  					<!-- end comments area -->
	  					
	  					<h5 class="floatr"><a href="#top">Torna su <img src="images/arrow-small-up.png" alt="Arrow" /></a></h5>
	  					
	  					<div class="clr"></div>
	  			
	  				</div>
	  			
	  			</div>
			
				<!-- end blog entry -->
	  			
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
					echo teaser($row[3]);
					/*echo "<p>teaser($row[3])</p>";
					*/
					echo "</p>";
					}
				?>
					</div>
	  			
	  				<!-- end widget -->
	  			
	  	
	  			
	  				<!-- start widget -->
					
					<div class="widget">
					
						<h3>Pubblicit�</h3>
	  					
	  					<!--  ADVERTISEMENT TAG 120 x 600, DO NOT MODIFY THIS CODE -->
<script type="text/javascript" src="http://performance-by.simply.com/simply.js?code=42665;1;0&amp;v=2"></script>
<script type="text/javascript">
<!--
document.write('');
// -->
</script>
	  				</div>
	  			
	  				<!-- end widget -->
	  				  				<!-- start widget -->
					
<!--					<div class="widget">
					
						<h3>Blogroll</h3>
			
						<ul>
							<li><a href="http://codex.wordpress.org/">Documentation</a></li>
							<li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
							<li><a href="http://wordpress.org/extend/ideas/">Suggest Ideas</a></li>
							<li><a href="http://wordpress.org/support/">Support Forum</a></li>
							<li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
							<li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
							<li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
						</ul>
						
						<div class="clr"></div>
						
					</div>
-->	  			
	  				<!-- end widget -->

	  			</div>
				
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
			
			<p>Vuoi una frase da dedicare al tuo amore? Vuoi conoscere il significato dei porverbi? Sei curioso o semplicemente ti va di passare un po' di tempo spensierato? Resta con noi e non te ne pentirai ! </p>

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

</body>

</html>