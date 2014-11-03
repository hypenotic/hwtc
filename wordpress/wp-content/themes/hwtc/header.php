<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>	
<?php wp_head(); ?>

<script type='text/javascript'>
(function (d, t) {
  var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
  bh.type = 'text/javascript';
  bh.src = '//www.bugherd.com/sidebarv2.js?apikey=f4bnlx3iejg4y87s4b3cww';
  s.parentNode.insertBefore(bh, s);
  })(document, 'script');
</script>

</head>
<body <?php body_class();?>>
    <div id="menu" class="menu-panel" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
    </div>

<!-- Site Overlay for Pushy offcanvas to work -->
<div class="site-overlay"></div>
<header class="wrap push">
	<div class="container">
        <?php /*<div class="logo nav">
            <a href="<?php bloginfo('url' ); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" /></a>
        </div> */?>
        <div class="logo second-nav show-for-desktop">
            <a href="<?php bloginfo('url' ); ?>" class="">HOSPITALITY WORKERS TRAINING CENTRE</a>
		</div>
		<div class="logo second-nav show-for-mobile">
            <a href="<?php bloginfo('url' ); ?>" class="mobile-title">HWTC</a>
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