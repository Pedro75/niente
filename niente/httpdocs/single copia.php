<?php session_start(); ?>
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
<?php include("script.php"); ?>

</head>

<body>

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
	  			
	  					echo "<h2>$row[3]</h2>";
	  				
	  					echo "<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date:\" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments:\" />$numcom commenti</h5>";
						

	  					
	  					if ($row[5]<>null){

						echo "<img class=\"post-img\" src=\"image_files/$row[5]\" alt=\"Entry\" />";
	  				}
	  					
	  					echo "<p>$row[4]</p>"; 
	}?>
						
						<!-- start comments area -->
						
						<div id="comments">
	  				
	  						<h2>12 Comments</h2>
	  						
	  						<ul>
	  						
	  							<!-- start comment -->
	  						
	  							<li>
	  							
	  								<div class="gravatar">
	  								
	  									<img src="images/avatar.png" alt="Gravatar" />
	  								
	  								</div>
	  							
	  								<h4>Themes Kingdom</h4>
	  								
	  								<h5>January 22, 2011 at 4.43pm</h5>
	  								
	  								<div class="clr"></div>
	  								
	  								<p>Donec sed odio dui. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
	  								
	  								<h5 class="floatr"><a href="#">Reply</a> <img src="images/arrow-sidebar.png" alt="Arrow" /></h5>
	  								
	  								<div class="clr"></div>
	  							
	  							</li>
	  						
	  							<!-- end comment -->
	  						
	  							<!-- start comment -->
	  							
	  							<li>
	  							
	  								<div class="gravatar">
	  								
	  									<img src="images/avatar.png" alt="Gravatar" />
	  								
	  								</div>
	  							
	  								<h4>Themes Kingdom</h4>
	  								
	  								<h5>January 22, 2011 at 4.43pm</h5>
	  								
	  								<div class="clr"></div>
	  								
	  								<p>Donec sed odio dui. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
	  								
	  								<h5 class="floatr"><a href="#">Reply</a> <img src="images/arrow-sidebar.png" alt="Arrow" /></h5>
	  								
	  								<div class="clr"></div>
	  							
	  							</li>
	  						
	  							<!-- end comment -->
	  						
	  							<!-- start comment -->
	  							
	  							<li>
	  							
	  								<div class="gravatar">
	  								
	  									<img src="images/avatar.png" alt="Gravatar" />
	  								
	  								</div>
	  							
	  								<h4>Themes Kingdom</h4>
	  								
	  								<h5>January 22, 2011 at 4.43pm</h5>
	  								
	  								<div class="clr"></div>
	  								
	  								<p>Donec sed odio dui. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper.</p>
	  								
	  								<h5 class="floatr"><a href="#">Reply</a> <img src="images/arrow-sidebar.png" alt="Arrow" /></h5>
	  								
	  								<div class="clr"></div>
	  							
	  							</li>
	  						
	  							<!-- end comment -->
	  						
	  						</ul>
	  						
	  						<h2>Leave a Comment</h2>
	  						
	  						<!-- start comments form -->
							<?php echo comment(); ?>
	  						
<!--	  						<form method="post" action="post.php" id="commentform">
				
								<div>
								
									<input type="text" size="50" name="contactname" id="contactname" value="Name *" class="required" onBlur="if (this.value == '') {this.value = 'Name *';}"  onfocus="if (this.value == 'Name *') {this.value = '';}" />
						
								</div>
				
								<div>
									
									<input type="text" size="50" name="email" id="email" value="Email *" class="required email" onBlur="if (this.value == '') {this.value = 'Email *';}"  onfocus="if (this.value == 'Email *') {this.value = '';}" />
						
								</div>
				
								<div>
							
									<textarea rows="5" cols="50" name="message" id="message" class="required" style="font-family: 'Droid Sans', sans-serif; padding: 5px"></textarea>
						
								</div>
					    
					    		<input type="submit" value="SUBMIT" name="submit" id="commentform-send" style="color: #686868; width: 60px;" />
				
							</form>
-->							
							<!-- end comments form -->
	  				
	  					</div>
	  					
	  					<!-- end comments area -->
	  					
	  					<h5 class="floatr"><a href="#top">Top <img src="images/arrow-small-up.png" alt="Arrow" /></a></h5>
	  					
	  					<div class="clr"></div>
	  			
	  				</div>
	  			
	  			</div>
			
				<!-- end blog entry -->
	  			
	  			<div class="col240">
	  			
	  				<!-- start widget -->
	  			
	  				<div class="widget">
	  				
	  				<form>
	  				
	  					<input id="search-text" type="text" name="search" value="Search.." onBlur="if (this.value == '') {this.value = 'Search..';}"  onfocus="if (this.value == 'Search..') {this.value = '';}" />
	  					
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
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>35 comments</h5>";
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
	  			
	  				<!-- end widget -->
	  	
	  			
	  				<!-- start widget -->
					
					<div class="widget">
					
						<h3>Advertising</h3>
	  					
	  					<img class="post-img" src="images/demo/advert.png" alt="Entry" />
	  					
	  					<img class="post-img" src="images/demo/advert.png" alt="Entry" />
	  					
	  				</div>
	  			
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
		
			<h3>Projects</h3>
			
			<p>Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
	
			<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.</p>
		
		</div>
		
		<!-- start footer blog posts -->
		
		<div class="col240">
		
			<h3>Dall'archivio</h3>
				 <?php

						
					{$query = "select * from item order by rand() limit 2";}
					$query=stripslashes($query);
					
					$result=mysql_query($query);
					while ($row = mysql_fetch_row($result))
					{
					echo "<h4><a href=\"single.php?id=$row[0]\">$row[1]</a></h4>";
					echo"	<h5><img class=\"calendar\" src=\"images/date.png\" alt=\"Date: \" />$row[2]<img class=\"bubble\" src=\"images/comments.png\" alt=\"Comments: \"/>35 comments</h5>";
					echo "<p>";
					echo teaser($row[3]);
					/*echo "<p>teaser($row[3])</p>";
					*/
					echo "</p>";
					}
				?>
		</div>
		<!-- end footer blog posts -->
		
		<!-- start twitter feed -->
		
		<div class="col240">
		
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
		
		<div class="col240">
		
			<h3>About Us</h3>
			
			<p>Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
	
			<p>Nulla vitae elit libero, a pharetra augue. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vestibulum id ligula porta felis euismod semper.</p>
		
		</div>
		
		<!-- end flickr photos -->
		
		<div class="clr"></div>
		
		<div class="divide"></div>
		
		<div id="footer">
		
			<!-- start footer social icons -->
		
			<div id="social-footer">
			
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
			
			</div>
			
			<!-- end footer social icons -->
		
			<img class="floatl" src="images/logo.png" alt="Logo" />
			
			<p id="copyright">Copyright Information Goes Here &copy; 2010. Awesome graphics by <a href="http://brain.marconi.nu/index2.html">Marconi</a>.<br />
			Designed by <a href="http://www.themeskingdom.com">Themes Kingdom</a>. Developed by <a href="http://thelumberjack.com.au">The Lumberjack</a>.</p>
		
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