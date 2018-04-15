			<!-- footer -->
			<!-- 
				Element name: Footer
				Awailable options:
					CSS:
						width:    full-width, narrow-width						
						padding:  padding-fat, padding-normal, padding-small, padding-tiny
						text:     text-left, text-center, text-right
						background-color
						columns: column-width-16 -> 16.667%
								 column-width-16x2 -> 33.334% - row-inner -> column-width-50
								 column-width-33
								 column-width-50
								 column-width-100	
					HTML:
						h1, h2, h3, h4, strong, b, i, a
					a:
						target="_blank" ***** To open link on a new tab *****
			-->

			<footer class="footer" role="contentinfo">
				<div class="footer-top full-width padding-normal">
					<div class="container" style="background-color: #2E4051">
						<div class="container-inner">
							<div class="column-width-16 text-left">
								<h3>Product</h3>
								<ul>
									<li><a href="#">Tour</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Integrations</a></li>
									<li><a href="#">What's new</a></li>
									<li><a href="#">Pricing</a></li>
								</ul>
							</div>
							<div class="column-width-16 text-left">
								<h3>Uses</h3>
								<ul>
									<li><a href="">Web Hosting</a></li>
									<li><a href="">Domain Registrars</a></li>
									<li><a href="">Software Developers</a></li>
									<li><a href="">Cloud Hosting</a></li>
									<li><a href="">Web Designers</a></li>
									<li><a href="">ISP Billing</a></li>
								</ul>
							</div>
							<div class="column-width-16 text-left">
								<h3>Support</h3>
								<ul>
									<li><a href="">Technical Support</a></li>
									<li><a href="">Community Forums</a></li>
									<li><a href="">Tutorials & Guides</a></li>
									<li><a href="">Documentation</a></li>
									<li><a href="">Contact Us</a></li>									
								</ul>
							</div>
							<div class="column-width-16x2">
								<h3>Resources</h3>
								<div class="row-inner">
									<div class="column-width-50 text-left">
										<ul>
											<li><a href="">Free Tools</a></li>
											<li><a href="">Marketplace</a></li>
											<li><a href="">Partners</a></li>
											<li><a href="">Download</a></li>
											<li><a href="">Feature Requests</a></li>
											<li><a href="">Developer Portal</a></li>
										</ul>
									</div>
									<div class="column-width-50 text-left">
										<ul>
											<li><a href="">License Verification</a></li>
											<li><a href="">Media Resources</a></li>
											<li><a href="">Affiliate Program</a></li>
											<li><a href="">Reseller Program</a></li>
											<li><a href="">Responsible Disclosure</a></li>												
										</ul>
									</div>									
								</div>
							</div>
							<div class="column-width-16 text-left">
								<h3>Company</h3>
								<ul>
									<li><a href="">About Us</a></li>
									<li><a href="">Blog</a></li>
									<li><a href="">Customers</a></li>
									<li><a href="">Jobs</a></li>
									<li><a href="">Contact</a></li>									
								</ul>
							</div>								
						</div>						
					</div>				
				</div>

				<div class="footer-bottom full-width padding-small" style="background-color:#283544">
					<div class="container">
						<div class="container-inner">
							<div class="column-left">
								<div class="logo">
									<a href="<?php echo esc_url( home_url() ); ?>">
										<!--<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.svg" alt="Logo" class="logo-img"> -->
										<i class="fas fa-rocket"></i> Budi<span>Online</span>
									</a>								
								</div>
								<div class="text text-left">
									<p>The World's Leading Web Hosting Automation Platform <br class="hidden-br" />Registered in England & Wales #6265962 (VAT GB 927 774 676)</p>
								</div>

							</div>
							<div class="column-right">
								<div class="cards">
									<img src="<?php echo get_template_directory_uri() ?>/img/icons/visa.svg" alt="">
									<img src="<?php echo get_template_directory_uri() ?>/img/icons/mastercard.svg" alt="">
									<img src="<?php echo get_template_directory_uri() ?>/img/icons/amex.svg" alt="">
									<img src="<?php echo get_template_directory_uri() ?>/img/icons/norton.svg" alt="">
								</div>

								<div class="links">
									<ul class="footer-nav">
										<li class="link"><a href="">About</a></li>
										<li class="link"><a href="">Privacy Policy</a></li>
										<li class="link"><a href="">Terms of Service</a></li>
										<li class="link"><a href="">Legal</a></li>
										<li class="link"><a href="">Contact</a></li>
									</ul>
									<p>Copyright © <?php echo date('Y'); ?> BudiOnline. All rights reserved</p>
								</div>
							</div>
						</div>
					</div>
			</footer>
			<!-- /footer -->
<!--
		</div>
		 /wrapper -->
		<?php wp_footer(); ?>

	</body>
</html>
