<?php

function connectdb()
{
mysql_connect("localhost" , "vivia_adm" , "neapolis") or die ("connection error");
mysql_select_db("nientedb") or die ("missed db");
}


function teaser($frase) {
        // massima lunghezza della frase
        $numero_caratteri=77;
        // aggiungo uno spazio alla fine di $frase in quanto
        // se abbiamo una parola unica essa non viene stampata
        $frase = strip_tags($frase." ");
        // tolgo tutti i caratteri dopo il $numero_caratteri
        $frase = substr($frase,0,$numero_caratteri);
        // identifico l'ultimo spazio ' ' e tolgo tutti i caratteri oltre ad esso
        $frase = substr($frase,0,strrpos($frase,' '));
        // aggiungo i puntini alla frase tagliata
        $frase = $frase."...";
        // esco dalla funzione e restituisco il valore di $frase
        return $frase;
}





function teaserq($frase) {
        // massima lunghezza della frase
        $numero_caratteri=40;
        // aggiungo uno spazio alla fine di $frase in quanto
        // se abbiamo una parola unica essa non viene stampata
        $frase = strip_tags($frase." ");
        // tolgo tutti i caratteri dopo il $numero_caratteri
        $frase = substr($frase,0,$numero_caratteri);
        // identifico l'ultimo spazio ' ' e tolgo tutti i caratteri oltre ad esso
        $frase = substr($frase,0,strrpos($frase,' '));
        // aggiungo i puntini alla frase tagliata
        $frase = $frase."...";
        // esco dalla funzione e restituisco il valore di $frase
        return $frase;
}


function feedback()
{
}

function menuk($menu)
{

$output = '<div class="header">
  <div class="cont"><a href="index.html"><img src="photos/logob.png" alt="Bertolni" title="Bertolini" class="logo" /></a>
    <div class="navbar"><a href="index.html" class="sel">Home</a><a href="storia.html">Storia</a><a href="portfolio.html">Fotogallery</a><a href="#">I menu di mattia dAngelo</a><a href="contact.html">Contatti</a><a href="#">Dove siamo</a></div>
  </div>
</div>';

return $output;



}

function frasetop ($top)
{

$top = 'Cos� tra questa immensit� s\'annega il pensier mio: <br /> e il naufragar m\'� dolce in questo mare';

return $top;



}

function frasebtm ($btm) {
$btm = "<p>Vuoi una frase da dedicare al tuo amore? Vuoi conoscere il significato dei proverbi? Sei curioso o semplicemente ti va di passare un po' di tempo spensierato? Resta con noi e non te ne pentirai ! </p>";

return $btm;
}

function sideleft ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				
				<ul id="navmenu">
					<li class="selectedpage"><a href="index.php">Home</a></li>
					<li><a href="#">Citazioni</a>
						<ul>
					        <li><a href="aforismi.php">Aforismi</a></li>
					        <li><a href="dafilm.php">da film</a></li>
					        <li><a href="dacanzoni.php">da canzoni</a></li>
						</ul>
				  	</li>
				  	<li><a href="proverbi.php">Proverbi</a></li>
				  	<li><a href="poesie.php">Poesie</a></li>
<!--<li><a href="#">Citazioni</a></li>-->	
				  	<li><a href="curiosita.php">Curiosita\'</a></li>

<!--				<li><a href="#">Scrivici</a></li>
-->				</ul>
				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}

function sideleft1 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li ><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li ><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li ><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>






                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}

function sideleft2 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li class="active"><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li ><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li ><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>






                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}


function sideleft3 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li ><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li class="active" ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li ><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li ><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>





                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}


function sideleft4 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li ><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li class="active"><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li ><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li ><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>





                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}



function sideleft5 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li ><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li ><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li class="active"><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li ><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>





                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}


function sideleft6 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li ><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li ><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li ><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li class="active" ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li ><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>





                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}

function sideleft7 ($output)
{

$output ='			<div id="sidebar">
			
				<center><img src="images/nientelogo.png" alt="Logo" /></center>
				
				<p>iucundum nihil agere</p>
				
				<!-- start social media icons -->
				
				<div id="social-networks">
				
				
			
					<div class="sochome">
					
						<a href="index.php"><img src="images/icon-blank.png" alt="Home" /></a>
					
					</div>

				
					<div class="socfacebook">
					
						<a href="http://www.facebook.com/pages/il-dolce-far-niente/205428522860618"><img src="images/icon-blank.png" alt="Facebook" /></a>
					
					</div>
					
					
					<div class="soctwitter">
					
						<a href="http://twitter.com/ildolcefarnien"><img src="images/icon-blank.png" alt="Twitter" /></a>
					
					</div>
					
					
					
					<div class="socrss">
					
					
					<!-- Inserisci questo tag nel punto in cui vuoi che venga visualizzato il pulsante +1 -->
<g:plusone size="small" count="false"></g:plusone>
					
					
										</div>

					<div class="clr"></div>
					
				</div>
				
				<!-- end social media icons -->
				
				<!-- start main menu -->
				

<div class="navmenu">

            <nav role="navigation">

                <ul class="main-nav">

                    <li ><h1><a href="proverbi.php" title="Primo piano" class="menucolor-3">Proverbi</a></h1></li>

                    <li ><h1><a href="aforismi.php" title="Politica" class="menucolor-2">Aforismi</a></h1></li>

                	<li ><h1><a href="poesie.php" title="Sport" class="menucolor-6">Poesie</a></h1></li>
	
                    <li ><h1><a href="curiosita.php" title="Economia" class="menucolor-7">Curiosit�</a></h1></li>
				
                    <li  ><h1><a href="canzoni.php" title="Cronaca" class="menucolor-5">Canzoni</a></h1></li>
	
					<li class="active"><h1><a href="film.php" title="Mondo" class="menucolor-4">Film</a></h1></li>





                </ul>      
</nav>		
			</div>


				
				<!-- end main menu -->
			
			</div>';
				
return $output;

}




function comment ($comment)
{

$comment = '<form method="post" action="post.php" id="commentform">
<div>
<input type="text" size="50" name="contactname" id="contactname" value="Nome" />
						
								</div>
				
								<div>
									
									<input type="text" size="50" name="email" id="email" value="Email" />
						
								</div>
				
								<div>
							
									<textarea rows="5" cols="50" name="message" id="message" class="required" style="font-family: \'Droid Sans\', sans-serif; padding: 5px"></textarea>
						
								</div>
					    
					    		<input type="submit" value="INVIA" name="submit" id="commentform-send" style="color: #686868; width: 60px;" />
				
							</form>';

return $comment;



}




function theme_box($title, $content, $region = 'main') {
  $output = '<h2 class="title">'. $title .'</h2><div>'. $content .'</div>';
  return $output;
}


function numcom($num) {
$aid = $_SESSION['AID'];
connectdb();
$query = "select * from comments where aid = $aid";
$result = mysql_query($query);
$num = 0;
while ($row = mysql_fetch_row($result))
{
$num++;

}

return $num;


}


?>

