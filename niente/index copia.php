<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
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

</head>

<body>

 
<div id="top"></div>

<div id="white-main">

	<div id="white-wrap">

		<div id="white-wrap-inside">
		
			<!-- start main left sidebar -->

			<div id="sidebar">
			
				<center><img src="images/logo.png" alt="Logo" /></center>
				
				<p>Sed ut perspiciatis unde omnis iste natus error sit.</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
					<div class="socfacebook">
					
						<a href="http://facebook.com/themeskingdom"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					<div class="socrss">
					
						<a href="#"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/th3lumberjack"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					<div class="socvimeo">
					
						<a href="#"><img src="images/icon-blank.png" alt="Vimeo" /></a>
					
					</div>
					
					<div class="socflickr">
					
						<a href="#"><img src="images/icon-blank.png" alt="Flickr" /></a>
					
					</div>
					
					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				
				<ul id="navmenu">
					<li class="selectedpage"><a href="index.php">Home</a></li>
					<li><a href="about.html">Citazioni</a>
						<ul>
					    	<!--<li><a href="#">Various Pages</a>
				          		<ul>
				          			<li><a href="404.html">404 Page</a></li>
				          			<li><a href="buttons.html">Buttons &amp; Styling</a></li>
				          			<li><a href="columns.html">Columns</a></li>
				          		</ul>
					    	</li>-->
					        <li><a href="#">Aforismi</a></li>
					        <li><a href="#">da film</a></li>
					        <li><a href="#">da canzoni</a></li>
						</ul>
				  	</li>
				  	<li><a href="gallery.html">Proverbi</a></li>
				  	<li><a href="portfolio.html">Poesie</a></li>
<!--					<li><a href="blog.html">Citazioni</a></li>
-->					<li><a href="contact.html">Scrivici</a></li>
				</ul>
				
				<!-- end main menu -->
			
			</div>
			
			<!-- end main left sidebar -->
			
			<div id="right720">
				
				<!-- start roundabout -->
			
				<div class="col720">
				
					<h1 class="alignc">Aenean lacinia suscipit ligula vel sagittis. Morbi diam lorem, aliquet a varius ac, ultricies id eros. In felis risus, varius commodo pretium eu.</h1>
				
					<br />
	  			
	  				<div class="dotted720"></div>
					
					<ul id="myRoundabout">
						
						<li><img src="images/demo/round1.png" alt="Roundabout" /></li>
						<li><img src="images/demo/round2.png" alt="Roundabout" /></li>
						<li><img src="images/demo/round3.png" alt="Roundabout" /></li>
						<li><img src="images/demo/round3.png" alt="Roundabout" /></li>
						<li><img src="images/demo/round3.png" alt="Roundabout" /></li>
					
					</ul>
					
					<div id="roundabout-nav">
					
						<a href="#" id="roundNext"><img src="images/arrow-left.png" alt="Previous" /></a><a href="#" id="roundPrev"><img src="images/arrow-right.png" alt="Next" /></a>
						
						<div class="clr"></div>
						
					</div>
					
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
				
				<div class="clr"></div>
	  			
	  			<div class="dotted-top"></div>
	  			
	  			<!-- end roundabout -->
	  			
	  			<!-- start blog post previews -->
				
				<div class="col720">
				
					<h2>Gli ultimi arrivi</h2>
				
				</div>
				
				<div class="clr"></div>
				
				<!-- start blog post preview -->
				
				
				 <?php
					include("script.php"); 

						connectdb();
						
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
echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />28.03.2011<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>35 comments</h5>";

echo "<p>$row[3]</p>";
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
				
			</div>
				
			<div class="clr"></div>

		</div>

	</div>

</div>

--><!-- end main white page area -->

<!-- start footer -->

<div class="wrap960">

	<div id="four-columns">

		<div class="col240">
		
<!--			<h3>Projects</h3>
			
			<p>Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
	
			<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.</p>
		
		</div>
-->		
		<!-- start footer blog posts -->
		
<!--		<div class="col240">
		
			<h3>From The Blog</h3>
			
			<h4><a href="single.html">Tellus ipsum justo inceptos</a></h4>
			
			<h5><img class="calendar" src="images/date-grey.png" alt="Date: " />28.03.2011<img class="bubble" src="images/comments-grey.png" alt="Comments: " />35 comments</h5>
			
			<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
			
			<h4><a href="single.html">Dapibus sem elit porta</a></h4>
			
			<h5><img class="calendar" src="images/date-grey.png" alt="Date: " />28.03.2011<img class="bubble" src="images/comments-grey.png" alt="Comments: " />35 comments</h5>
			
			<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
		
		</div>
-->		
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
-->		
		<!-- end twitter feed -->
		
		<!-- start flickr photos -->
		
<!--		<div class="col240">
		
			<h3>About Us</h3>
			
			<p>Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
	
			<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.</p>
		
		</div>
		
-->		<!-- end flickr photos -->
		
		<div class="clr"></div>
		
		<div class="divide"></div>
		
		<div id="footer">
		
			<!-- start footer social icons -->
		
			<!--<div id="social-footer">
			
				<div class="socfacebook">
				
					<a href="http://facebook.com/themeskingdom"><img src="images/icon-blank.png" alt="Facebook" /></a>
				
				</div>
				
				<div class="socrss">
				
					<a href="#"><img src="images/icon-blank.png" alt="Facebook" /></a>
				
				</div>
				
				<div class="soctwitter">
				
					<a href="http://twitter.com/th3lumberjack"><img src="images/icon-blank.png" alt="Twitter" /></a>
				
				</div>
				
				<div class="socvimeo">
				
					<a href="#"><img src="images/icon-blank.png" alt="Vimeo" /></a>
				
				</div>
				
				<div class="socflickr">
				
					<a href="#"><img src="images/icon-blank.png" alt="Flickr" /></a>
				
				</div>
			
			</div>-->
			
			<!-- end footer social icons -->
		
<!--			<img class="floatl" src="images/logo.png" alt="Logo" />
			
			<p id="copyright">Copyright Information Goes Here &copy; 2010. Awesome graphics by <a href="http://brain.marconi.nu/index2.html">Marconi</a>.<br />
			Designed by <a href="http://www.themeskingdom.com">Themes Kingdom</a>. Developed by <a href="http://thelumberjack.com.au">The Lumberjack</a>.</p>
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
