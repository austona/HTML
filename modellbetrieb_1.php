<?php
require('Persistence.php');
$comment_post_ID = 1;
$db = new Persistence();
$comments = $db->get_comments($comment_post_ID);
$has_comments = (count($comments) > 0);
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="de">
<!--<![endif]-->
<head>

<!-- Basic Page Needs ================================================== 
================================================== -->

<meta charset="utf-8">
<title>EIP Projekt Schwein</title>
<meta name="description" content="Place to put your description text">
<meta name="author" content="">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas ================================================== 
================================================== -->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS ==================================================
================================================== -->

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/skeleton.css">
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />

<!-- Favicons ==================================================
================================================== -->

<link rel="shortcut icon" href="images/favicon.png">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- Google Fonts ==================================================
================================================== -->

<link href='http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<body>

<!-- Home - Content Part ==================================================
================================================== -->
<div id="header">
  <div class="container header" style = "width: 90%";> 
    <!-- Header | Logo, Menu
		================================================== -->
    <header>
      <div class="logo"><a href="index.html"><img src="images/logo_1.png" alt=""/></a></div>
      <div class="mainmenu">
        <div id="mainmenu">
          <ul class="sf-menu">
            <li><a href="index.html" id="visited"><span class="home"><img src="images/home.png" alt="" /></span>HOME</a></li>
			 <li><a href="portfolio.html"><span class="home"><img src="images/portfolio.png" alt="" /></span>BAUPROJEKTE</a>
              <ul>
                <li><a href="mastbetriebe.html">Maststall</a></li>
				<li><a href="mastbetriebe.html">Ferkelaufzucht</a></li>
				<li><a href="gallery.html">Abferkelställe</a></li>
				<li><a href="gallery.html">Wartesauen/<br>Deckzentrum</a></li>
				<li><a href="gallery.html">Andere</a></li>
              </ul>
            </li>
            <li><a href="about.html"><span class="home"><img src="images/about.png" alt="" /></span>INNOVATIVE MAßNAHMEN</a>
			<ul>
                <li><a href="gallery.html">Tierwohl/<br>Beschäftigung/<br>Fütterung</a></li>
				<li><a href="gallery.html">Schaffung<br>betrieblicher<br>Funktionsbereiche</a></li>
				<li><a href="gallery.html">Öffentlichkeitsarbeit/<br>Verbraucherakzeptanz</a></li>
				<li><a href="gallery.html">Reduktion von<br>Emmissionen</a></li>
              </ul>
			  </li>
           <li><a href="features.html"><span class="home"><img src="images/features.png" alt="" /></span>FÜR DEN VERBRAUCHER</a></li>
            <li><a href="blog.html"><span class="home"><img src="images/blog.png" alt="" /></span>NEWS</a>
            </li>
            
            <li><a href="contact.html"><span class="home"><img src="images/contact.png" alt="" /></span>KONTAKT</a>
			 <ul>
			  <li><a href = "">Kontaktformular</a></li>
			  <li><a href = ""> Ihr Ansprechpartner</li>
			 </ul>
			</li>
			
          </ul>
        </div>
        
        <!-- Responsive Menu -->
        
        <form id="responsive-menu" action="#" method="post">
          <select>
            <option value="">Navigation</option>
            <option value="index.html">Home</option>
            <option value="about.html">Über uns</option>
            <option value="portfolio.html">Bauprojekte</option>
            <option value="gallery.html">Portfolio Gallery</option>
            <option value="blog.html">News</option>
            <option value="singleblog.html">Single Post</option>
            <option value="features.html">FAQs</option>
            <option value="contact.html">Kontakt</option>
          </select>
        </form>
      </div>
    </header>
  </div>
</div>

<div id = "main" style = "background: #E1FBEA;">
<div class = "container">
<div class = "blankSeparator"> </div>
<div class = "blankSeparator"> </div>
<!-- <div class = "sepContainer"> </div> -->
<h1> Modellbetrieb 1 </h1>
<div class = "sepContainer"> </div>
<!-- Home Content Part - Slider ==================================================
================================================== -->

<div class="flexslider">
  <ul class="slides">
    <li> <a href="#"><img src="images/maststall_2.jpg" alt=""/></a> 
	 <p class="flex-caption">Hier steht irgendetwas passend zum Bild.</p>
	</li>
    <li> <img src="images/modellbetrieb_2.jpg" alt="" /> <p class="flex-caption">Hier steht irgendetwas passend zum Bild.</p></li>
    <li> <a href="#"><img src="images/modellbetrieb_1.JPG" alt="" /></a>
     <p class="flex-caption">Hier steht irgendetwas passend zum Bild.</p>
    </li>
  </ul>
</div>
</div>
<!-- Home Content Part - Box One ==================================================
================================================== -->
<div class="blankSeparator">
</div>
<div class="container">
  <div class="info">
    <div class="one_third">
	<section class = "infoleft"/>
      <h2>Betriebsspiegel</h2>
     <p><ul>
	 <li>-Hier stehen dann</li>
	 <li>-Einige Details</li>
	 <li>-Zu dem vorgestellen</li>
	 <li>-Modellbetrieb</li>
	  <li>-Hier stehen dann</li>
	 <li>-Einige Details</li>
	 <li>-Zu dem vorgestellen</li>
	 <li>-Modellbetrieb</li>
	  <li>-Hier stehen dann</li>
	 <li>-Einige Details</li>
	 <li>-Zu dem vorgestellen</li>
	 <li>-Modellbetrieb</li>
	  <li>-Hier stehen dann</li>
	 <li>-Einige Details</li>
	 <li>-Zu dem vorgestellen</li>
	 <li>-Modellbetrieb</li>
	 
	 
	 </ul></p>
	 </div>
	
    <div class="one_third">
	<section class = "infocenter" />
        <h2>Bauplan</h2>
        <p>Wird ein Bild vom Bauplan hochgeladen? Wenn ja, dann könnte man das ja in die Slideshow oben einfügen. <br> Lorem ipsum dolor sit amet, consetetur 
		sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
		justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, 
		consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
		accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
	</div>	
      <div class="one_third lastcolumn">
	  <section class = "inforight" />
        <h2>Beschreibung der Innovation</h2>
       <p>Hier kommt also eine Beschreibung der Innovation hin. <br> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
	   sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam e
	   t justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum 
	   dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed 
	   diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet</p>
	   </div>
    
  </div>
</div>

    <!-- Blog Comments ==================================================
================================================== -->
<div class = "container">
    <!-- <section class="comments">-->
	<!--<section id = "comments">-->
      <div class="blankSeparator"></div>
      <div class="sepContainer2"></div>
      <h2>Kommentare</h2>
      <div class="sepContainer2"></div>
      <div class="blankSeparator"></div>
      <div class="boxtwosep"></div>
 
	  <!-- <div id="comments"> -->
		<ol id="posts-list" class="hfeed<?php echo($has_comments?' has-comments':''); ?>">
      <li class="no-comments" style = "color: #414550; font-size: 14px">Schreiben Sie den ersten Kommentar!</li>
      <?php
        foreach ($comments as &$comment) {
          ?>
          <li><article id="comment_<?php echo($comment['id']); ?>" class="hentry">	
    				<div class="commentMeta">
    					
    						<p><?php echo( date('d.m.Y', strtotime($comment['date']) ) ); ?></p>
    				</div>

    				<div class="commentBody">
					
					<h3><a class="url fn" href="#"><?php echo($comment['name']); ?></a> </h3>
    					<p><?php echo($comment['message']); ?></p>
    				</div>
    			</article></li>
          <?php
        }
      ?>
		</ol>
		
		
      <!-- </div> -->
      <!-- end Comments --> 
    
    <!-- Blog Contact ==================================================
================================================== -->
    <div id="contactForm">
      <h2>Hinterlassen Sie einen Kommentar</h2>
      <form action="post_comment.php" method="post" id="contact_form">
        <div class="name">
          <label for="name">Name:</label>
          <p>Bitte geben Sie Ihren ganzen Namen ein</p>
          <input id=name name=name type=text placeholder="z.B Max Mustermann" required />
        </div>
        <div class="email">
          <label for="email">Ihre E-Mail Adresse</label>
          <p> Bitte geben Sie Ihre E-Mail Adresse ein </p>
          <input id=email name=email type=email placeholder="beispiel@domain.de" required />
        </div>
        <div class="message">
          <label for="message">Ihre Nachricht</label>
          <p> Bitte geben Sie hier Ihren Kommentar ein.</p>
          <textarea id=message name=message placeholder = "Bitte geben Sie mindestens 5 Zeichen ein." rows=6 cols=10 required></textarea>
        </div>
        <div id="loader">
			<input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" />
          <input name = "submit" type="submit" value="Absenden" />
        </div>
		<!-- comment_post_ID value hard-coded as 1 -->
   <!--  <input type="hidden" name="comment_post_ID" value="<?php echo($comment_post_ID); ?>" id="comment_post_ID" /> -->


      </form>
    </div>
	<!--</section>-->
    <!-- end contactForm --> 
  </div>
  <div class="blankSeparator"></div>
  </div>
  


<!-- container ends here -->



<!--Footer ==================================================
================================================== -->
<!-- <div id="footer"> -->
  <!-- <div class="container footer"> -->
    <!-- <div class="one_fourth"> -->
      <!-- <h3>Latest Tweets</h3> -->
      <!-- <div id="tweets"></div> -->
    <!-- </div> -->
    <!-- <div class="one_fourth"> -->
      <!-- <h3>Blogroll</h3> -->
      <!-- <ul> -->
        <!-- <li class="lines"><a href="#" title="">Development Blog</a></li> -->
        <!-- <li class="lines"><a href="#" class="">New Freebies</a></li> -->
        <!-- <li class="lines"><a href="#" class="">Themeforest Theme</a></li> -->
        <!-- <li class="lines"><a href="#" class=""> Design News</a></li> -->
        <!-- <li class="lines"><a href="#" class="">WordPress Theme</a></li> -->
      <!-- </ul> -->
    <!-- </div> -->
    <!-- <div class="one_fourth"> -->
      <!-- <h3>Archive</h3> -->
      <!-- <ul> -->
        <!-- <li class="lines"><a href="#" class=""> August 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class="">July 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class="">Juny 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class=""> May 2012</a></li> -->
        <!-- <li class="lines"><a href="#" class="">April 2012</a></li> -->
      <!-- </ul> -->
    <!-- </div> -->
    <!-- <div class="one_fourth lastcolumn"> -->
      <!-- <h3>About</h3> -->
      <!-- <p>Proximet is responsive, simple and clean template with a lot attention to detail. Get it now!</p> -->
      <!-- <p>Visit <a href="http://anarieldesign.com/" rel="nofollow">Anariel Design</a> and find more interesting things.</p> -->
    <!-- </div> -->
  <!-- </div> -->
  <!-- <!-- container ends here --> 
<!-- </div> -->
<!-- footer ends here --> 
<!-- </div> -->
<!-- Copyright ==================================================
================================================== -->
<div id="copyright">
  <div class="container">
    <div class="eleven columns alpha">
      <p class="copyright">Konzept von der <a href="http://www.agriconcept.de/content/inhalte/startseite/index.html" rel="nofollow">AgriConcept Beratungsgesellschaft mbH</a>. 
	  Design inspiriert von <a href="http://www.anarieldesign.com/" rel="nofollow">Anariel Design</a>.</p>
    </div>
    <!-- <div class="five columns omega"> -->
      <!-- <section class="socials"> -->
        <!-- <ul class="socials fr"> -->
          <!-- <li><a href="#"><img src="images/socials/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li> -->
          <!-- <li><a href="#"><img src="images/socials/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li> -->
          <!-- <li><a href="#"><img src="images/socials/google.png" class="poshytip" title="Google" alt="" /></a></li> -->
          <!-- <li><a href="#"><img src="images/socials/dribbble.png" class="poshytip" title="Dribbble" alt="" /></a></li> -->
        <!-- </ul> -->
      <!-- </section> -->
    <!-- </div> -->
  </div>
  <!-- container ends here --> 
</div>
<!-- copyright ends here --> 
<!-- End Document
================================================== --> 
<!-- Scripts ==================================================
================================================== --> 
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script> 
<!-- Main js files --> 
<script src="js/screen.js" type="text/javascript"></script> 
<!-- Tooltip --> 
<script src="js/poshytip-1.0/src/jquery.poshytip.min.js" type="text/javascript"></script> 
<!-- Tabs --> 
<script src="js/tabs.js" type="text/javascript"></script> 
<!-- Tweets --> 
<script src="js/jquery.tweetable.js" type="text/javascript"></script> 
<!-- Include prettyPhoto --> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<!-- Include Superfish --> 
<script src="js/superfish.js" type="text/javascript"></script> 
<script src="js/hoverIntent.js" type="text/javascript"></script> 
<!-- Flexslider --> 
<script src="js/jquery.flexslider-min.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/modernizr.custom.29473.js"></script>
</head>
</body>
</html>