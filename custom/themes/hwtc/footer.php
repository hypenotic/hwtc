<footer>

<?php if(!is_page('find-work')) { ?>
	<div class="footer-top">
    	<div class="container">
            <div class="columns-2">
                <h4>Sign up to get the latest news from HWTC</h4>
            </div>
            <div class="columns-2">
                <?php dynamic_sidebar( 'sign-up-form' ); ?>
                <?php //echo do_shortcode('[mc4wp_form id="1149"]');?>
           </div>       	
        </div>   
    </div>
<?php } ?>
    <div class="footer-bottom">
        <div class="columns-2">
            <a href="javascript:void(0)" onclick="return toggleStreetView();" id="panel">Street View</a>
        	<div id="map-canvas" style="width:100%; height:350px;"></div>
        </div>
        
        <div class="columns-2">
            <h4 style="margin-bottom: 0;">Contact</h4>
    
            <ul class="social-media">
	            <li><a id="facebook" href="https://www.facebook.com/pages/Hospitality-Workers-Training-Centre/152350521594605" target="_blank">Facebook</a></li>
                <li><a id="twitter" href="https://twitter.com/Hospitalitywrks" target="_blank">Twitter</a></li>
            </ul>

            <p style="margin-top: 0px;"><a href="tel:6479309518">647 930 9518</a></p>
            
            <h5 style="margin-bottom: 0; font-size: 20px;">Mailing Address</h5>
			<p>Hospitality Workers Training Centre<br />
            60 Richmond Street East<br />
            Toronto, Ontario, Canada M5C 1N8</p>
            
            <h5 style="margin-bottom: 0; font-size: 20px;"><a href="http://hospitalitytrainingcentre.com/find-skilled-talent/new-to-hospitality/">Information Sessions</a></h5>
            <p>489 Queen Street East Suite 301<br />
            Toronto, Ontario, Canada M5A 1V1</p>
            <p><a href="mailto:training@hospitalitytrainingcentre.com">training@hospitalitytrainingcentre.com</a></p>
        </div>
    </div>
    <div class="footer-copyright">
    	<div class="container">
            <div class="columns-2">
                <p>Copyright © 2014. All Rights Reserved.</p>
            </div>
            <div class="columns-2">
                <p class="text-right">Made with purpose by B Corp Certified <a href="http://www.hypenotic.com" target="_blank">Hypenotic</a></p>
            </div>
         </div>   
    </div>
</footer>
</div>
<?php wp_footer();?>
</body>
</html>