	<footer>
	  
	  <div class="location_container" id="footer">
		  <div class="map_container"></div>
		  <div class="contact_container">
		  	<div class="contact_wrap">
		  		<ul>
			  		<?php  dynamic_sidebar( 'contact-widget-area' ); ?>
			  		<div class = "button_wrap">
			  			<p><?php dynamic_sidebar( 'button-widget-area' ); ?></p>
			  		</div>
			  	</ul>
		  	</div>
			  		
			  	
		  </div>

		  </div>
	  </div>

	  <div class="bottom_bar">
	  	   <div class="row">
			   <div class="footer_widget">
					<ul class="xoxo">
				   		<?php dynamic_sidebar( 'footer-widget-area' ); ?>
				   	</ul>
				</div>
		   </div>
	  </div>

	</footer>






	<script>

	/* Google Analytics! */
	 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
	 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
	 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
	 s.parentNode.insertBefore(g,s)}(document,"script"));
	</script>

	<?php wp_footer(); ?>
</body>
</html>