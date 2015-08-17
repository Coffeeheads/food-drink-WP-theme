	<footer>
	  
	  <div class="location_container" id="footer">
	  	  <div class="contact_container">
		  	<div class="contact_wrap">
		  		<ul>
			  		<div>
			  			<?php  dynamic_sidebar( 'contact-widget-area' ); ?>
			  		</div>
			  		<a href="mailto:support@company.com"><div class = "button_wrap">
			  			<p><?php dynamic_sidebar( 'button-widget-area' ); ?></p>
			  		</div>
			  		</a>
			  	</ul>
		  	</div>
		  </div>
		  <div class="map_container">

		  		<?php dynamic_sidebar( 'map-widget-area'); ?>
		  </div>
	  </div>

	  <div class="bottom_bar">
	  	   <div class="row">
			   <div class="footer_widget">
					<ul class="xoxo">
						<li>
				   		<?php dynamic_sidebar( 'footer-widget-area' ); ?>
				   		</li>
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

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$(".fa-bars").on("click", function(){
					$(".dropdown").toggleClass("open");
				});
			});
		</script>

</html>