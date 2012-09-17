<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title></title>
        <meta name="description" content="">
        <meta name="author" content="">
        
        <meta name="viewport" content="width=device-width">
	
        <title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php //
		echo $this->Html->meta('icon');

		echo $this->Html->css('style');

//		echo $this->fetch('meta');
		echo $this->fetch('css');
//		echo $this->fetch('script');
	?>
        
        <script src="js/libs/modernizr-2.5.3-respond-1.1.0.min.js"></script>
</head>
<body>
        <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

        <div id="header-container">
            <header class="wrapper clearfix">
                <h1 id="title">Patrick Ward</h1>
                
                <?php echo $this->element('nav_menu') ?>

            </header>
        </div>  
    
        <div id="main-container">
            <div id="main" class="wrapper clearfix">
                <?php echo $this->fetch('content'); ?>

            </div>
        </div>
    
        <div id="footer-container">
            <footer class="wrapper">
                <table style="width: 100%">
                    <tr>
                        <td>&copy; 2012 Patrick Ward</td>
<!--                        <td style="text-align: right">Website produced using CakePHP & Html5-Boilerplate</td>-->
                    </tr>
                </table>
            </footer>
        </div>
    
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>

        <script src="js/script.js"></script>
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
                g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
</body>
</html>
