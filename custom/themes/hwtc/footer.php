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
        	<!-- <div id="map-canvas" style="width:100%; height:350px;"></div> -->
            <div class="footer-map" style="width:100%; height:350px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.7902562091294!2d-79.37839838481935!3d43.65253197912131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cb33eb639161%3A0x9298000f5a952990!2s60+Richmond+St+E%2C+Toronto%2C+ON+M5C+2G8!5e0!3m2!1sen!2sca!4v1550860149569" frameborder="0" style="border:0;width:100%;height: 350px;" allowfullscreen></iframe>
            </div>
        </div>
        
        <div class="columns-2">
            <h4 style="margin-bottom: 0;">Contact</h4>
    
            <ul class="social-media">
	            <li><a id="facebook" href="https://www.facebook.com/pages/Hospitality-Workers-Training-Centre/152350521594605" target="_blank">Facebook</a></li>
                <li><a id="twitter" href="https://twitter.com/Hospitalitywrks" target="_blank">Twitter</a></li>
            </ul>
            
            <h5 style="margin-bottom: 0; font-size: 20px;"><a style="text-decoration: none;border-bottom: 1px solid white;" href="https://goo.gl/maps/JkQgcuR2Ffz" target="_blank">Mailing Address</a></h5>
			<p>Hospitality Workers Training Centre<br />
            60 Richmond Street East<br />
            Toronto, Ontario, Canada M5C 1N8</p>
            
            <h5 style="margin-bottom: 0; font-size: 20px;"><a style="text-decoration: none;border-bottom: 1px solid white;" href="https://goo.gl/maps/vTFNDWMQfYB2" target="_blank">Information Session</a></h5>
            <p style="margin-bottom: 5px;">489 Queen Street East Suite 301<br />
            Toronto, Ontario, Canada M5A 1V1</p>
            <p style="margin-top: 0px;margin-bottom: 0px;"><a href="mailto:training@hospitalitytrainingcentre.com">training@hospitalitytrainingcentre.com</a></p>
            <p style="margin-top: 0px;"><a href="tel:6479309518">647 930 9518</a></p>
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