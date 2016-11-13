<?php
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;
$this->direction = $doc->direction;
$doc->addStyleSheet('templates/'.$this->template.'/css/reset.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/font.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/font-awesome.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/responcive.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
// Add current user information
$user = JFactory::getUser();
$this->setGenerator(null);
$headlink = $this->getHeadData();
$this->setHeadData($headlink);
?>
<!DOCTYPE html>
<html lang="ru" xml:lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0 , user-scalable=no" />
	<jdoc:include type="head" />
	<link rel="stylesheet" href="templates/elitegroup/js/fancybox/jquery.fancybox.css">
	<!--[if lt IE 9]>
		<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
	<![endif]-->
    <script>
    jQuery(document).ready(function($){

    /* toggle nav */
    $("#menu-icon").on("click", function(){
    $("#nav").slideToggle();
    });
    });
    </script>
</head>
<body>
	<header>
		<div class="container">
			<a class="logo" href="/">
				<img src="templates/elitegroup/images/logo.png"/>
			</a>
			<a class="number"href="tel:+74951234567">+7 (495) 123-45-67</a>
			<jdoc:include type="modules" name="main-menu" style="none" />
			
		</div>
		<a class="phone" href="tel:+74951234567">
			<img src="templates/elitegroup/images/telephone.png"/>
		</a>
			<div id="menu-icon">
    		    <button><img src="templates/elitegroup/images/burger_menu.png"/></button>
       		</div>
            <nav id="nav-wrap">
                <ul id="nav">
                    <li><a href="http://md.blocknote.org/">О СТУДИИ</a></li>
                    <li><a href="http://md.blocknote.org/gallery">ПОРТФОЛИО</a></li>
                    <li><a href="http://md.blocknote.org/styles">СТИЛИ</a></li>
                    <li><a href="http://md.blocknote.org/service">УСЛУГИ</a></li>
                    <li><a href="http://md.blocknote.org/prices">ЦЕНЫ</a></li>
                    <li><a href="http://md.blocknote.org/kontacts">КОНТАКТЫ</a></li>
                </ul>
            </nav>
	</header>
	<jdoc:include type="modules" name="slider" style="none" />
	<jdoc:include type="modules" name="breadcrumbs" style="none" />
	<jdoc:include type="message"/>
	<jdoc:include type="component"/>
	<jdoc:include type="modules" name="slogan-1" style="xhtml" />
	<div class="container">
		<jdoc:include type="modules" name="portfolio" style="none" />
	</div>
	<jdoc:include type="modules" name="feedback" style="xhtml" />
	<jdoc:include type="modules" name="service" style="none" />
	<div class="container">
    	<jdoc:include type="modules" name="services" style="none" />
    </div>
	<jdoc:include type="modules" name="maps" style="none" />
	<jdoc:include type="modules" name="interior_design" style="none" />
	<jdoc:include type="modules" name="information" style="none" />
    <jdoc:include type="modules" name="feedback2" style="none" />
	<jdoc:include type="modules" name="mounting" style="none" />
	<jdoc:include type="modules" name="above-footer" style="none" />
	<footer>
		<jdoc:include type="modules" name="main-menu" style="none" />
		<a class="logo_footer" href="/"><img src="templates/elitegroup/images/footer_logo.png"></a>
		<jdoc:include type="modules" name="footer-text" style="none" />
	</footer>
	<noindex><a class="elitegroup" href="https://elitegroup.company" target="blank" title="Разработка сайтов Elite Group Company">Разработано Elite Group</a></noindex>
	<jdoc:include type="modules" name="forms" style="none" />
<script>
	jQuery(document).ready(function() {
		jQuery("#menu-icon button").click(function(){
		jQuery("#nav").slideToggle();
	});
});
</script>
<script src="templates/elitegroup/js/fancybox/jquery.fancybox.pack.js"></script>
<script>
	jQuery(document).ready(function(){
		jQuery(".fancybox").fancybox();	
	});
</script>
</body>
</html>