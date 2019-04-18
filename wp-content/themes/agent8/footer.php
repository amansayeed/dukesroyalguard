<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		<footer>
		<div class="lk-container center">
			<div class="lk-row">
				<div class="lk-md-12">
					<div class="footer-menu">
						<ul>
							<li><a href="https://www.agent8.ca/about-us">About Us</a></li>
							<li><a href="https://www.agent8.ca/why-join">Why Join?</a></li>
							<li><a href="list-your-product.html">List Your Product or Service</a></li>
							<li><a href="advertise-your-sponsorship.html">Advertise Your Sponsorship Opportunity</a></li>
							<li><a href="write-for-us.html">Write for Us</a></li>								
							<li><a href="https://www.agent8.ca/user-agreement">User Agreement</a></li>								
							<li><a href="https://www.agent8.ca/privacy-policy">Privacy Policy</a></li>								
							<li><a href="https://www.agent8.ca/customer-support">Customer Support</a></li>								
							<li><a href="https://www.agent8.ca/contact-us">Contact Us</a></li>								
															
						</ul>
						<p>Copyright © 2018 Agent8<p/>
					</div>
					<div class="social-menu">
						<ul>
							<li><a target="_blank" href="https://www.facebook.com/Agent8.Realtor/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-icon.png"/></a></li>
							<li><a target="_blank" href="https://twitter.com/Agent8Realtor"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/twitter-icon.png"/></a></li>						
						</ul>
					</div>
				</div>
            </div> 		
		</div>
	</footer>
	
	<div id="myModalA" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <span class="close">&times;</span>
          <strong>Contact Now </strong>
        </div>
        <div class="modal-body">
		<p>Hi Agent 8,</p>
		<p>I'm interested to know more about Power Listings.</p>
			<form>
				<div class="formgroup"><input type="text" placeholder="Name"/></div>
				<div class="formgroup"><input type="text" placeholder="Phone Number"/></div>
				<div class="formgroup"><input type="text" placeholder="Email"/></div>
				<div class="formgroup"><button>Send</button></div>
			</form>
		<p></p>	
		<p></p>	
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
	
	<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
	<script>
		function showpopUpA(){
      	var modal = document.getElementById('myModalA');
      	modal.style.display = "block";
      	
		 var modal = document.getElementById('myModalA');
      var span = document.getElementsByClassName("close")[0]
      	// When the user clicks on <span> (x), close the modal
      	span.onclick = function() {
      		modal.style.display = "none";
      	}
      	// When the user clicks anywhere outside of the modal, close it
      	window.onclick = function(event) {
      		if (event.target == modal) {
      			modal.style.display = "none";
      		}
      	}
      }	
	</script>
<?php wp_footer(); ?>

</body>
</html>
