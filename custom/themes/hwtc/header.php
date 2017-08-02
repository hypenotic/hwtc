<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<title><?php echo wp_title( '|', true, 'right' ) . bloginfo('name'); ?></title>	
<?php wp_head(); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = '//www.bugherd.com/sidebarv2.js?apikey=f4bnlx3iejg4y87s4b3cww';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57707922-1', 'auto');
  ga('send', 'pageview');
</script>

</head>
<body <?php body_class();?>>
    <div id="menu" class="menu-panel" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
    </div>

<!-- Site Overlay for Pushy offcanvas to work -->
<div class="site-overlay"></div>
<header class="wrap push" id="push-mobile">
	<div class="container">
      <!-- <div class="logo nav">
            <a href="<?php bloginfo('url' ); ?>"><img src="<?php bloginfo('template_url');?>/images/HWTC_Logo_white.png" /></a>
      </div>  -->
    <div class="logo second-nav show-for-desktop">
    <div class="logo-wrapper">
      <div id="logo-tab">
        <a href="<?php bloginfo('url' ); ?>"><img src="<?php bloginfo('template_url');?>/images/HWTC_squarelogo.png" alt="HOSPITALITY WORKERS TRAINING CENTRE"></a>
      </div>
    </div>
           <!--  <a href="<?php// bloginfo('url' ); ?>" class="">HOSPITALITY WORKERS TRAINING CENTRE</a> -->
		</div>
		<div class="logo second-nav show-for-mobile">
            <div class="mobile-logo-wrap">
              <a href="<?php bloginfo('url' ); ?>"><img id="mobile-logo" src="<?php bloginfo('template_url');?>/images/HWTC_Logo_2c_blue.png" alt="HOSPITALITY WORKERS TRAINING CENTRE"></a>
            </div>
        </div>
        <nav id="box">
        	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
        </nav>
        <div id="mobile-nav-button">
				<a id="nav-toggle" href="#menu">Mobile Menu</a>
        </div>
    </div>
</header>
<div class="wrapper wrap push">    