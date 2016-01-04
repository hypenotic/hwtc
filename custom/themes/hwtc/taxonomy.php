<?php get_header();?>
<?php 
$img= get_bloginfo('template_url').'/images/banner.jpg';
?>
<div class="banner">
		<img src="<?php echo $img;?>" />
        <div class="bannertext">
            <div class="bannertext-content">
                <div class="banner-title-big"></div>
            </div>
        </div>
</div>
<div class="container" style="max-width:100%;">
    <div class="columns-1 content">
        <h4>ERROR 404 NOT FOUND</h4>
        <h6>Oops. Fail. The page cannot be found.</h6>
    </div>
</div>
<?php get_footer();?>