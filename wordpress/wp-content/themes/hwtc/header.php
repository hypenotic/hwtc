<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name') ?></title>	
<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
    <div id="sidebarMenu">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
    </div>

<header>
	<div class="container">
        <div class="logo nav">
            <a href="<?php bloginfo('url' ); ?>"><img src="<?php bloginfo('template_url');?>/images/logo.png" /></a>
        </div>
        <nav id="box">
        	<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '<ul>%3$s</ul>') ); ?>
        </nav>
        <div id="mobile-nav-button">
				<a href="#">Mobile Menu</a>
        </div>
    </div>
</header>
<div class="wrapper">    