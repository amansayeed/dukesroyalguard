<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="breadcrumbs">
		<div class="lk-container">
		
				<ul>
					<li><a href="index.html">Home</a> > </li>
					<li><a href="blog.html">Blog</a> > </li>
					<li>Real estate Lorem Ipsum</li>
				</ul>
			
		</div>
	</div>
<div class="main-inner">
		<div class="lk-container">
			<div class="newblog">
	<div class="sidemenu">
				<div class="sidebox">
					<?php dynamic_sidebar('sidebar-7');?>
				</div>
				
				<div class="sidebox cont">
						<ul>
						<li>
							<a href="tel:1-844-4-Agent8 (424-3688)">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/call-us-icon.png"/>
								<p>
									<strong>Call Us:</strong>
									<span>1-844-4-Agent8 (424-3688)</span>
								</p>
							</a>
						</li>
						<li>
							<a href="mailto:inquiries@agent8.ca">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/email-icon.png"/>
								<p>
									<strong>Email Us:</strong>
									<span>inquiries@agent8.ca</span>
								</p>
							</a>
						</li>
						
					</ul>
				</div>
				<div class="sidebox newsside">
					<?php dynamic_sidebar('sidebar-1');?>
				</div>	
			</div>
			<div class="content-area">
				<div class="lk-row">
					<div class="lk-md-9">
						<div class="blog-listing">
							<div class="lk-row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 
			$src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium-thumbnail' );
			
			?>
<div class="lk-md-12">
									<div class="blog-detail">
										
										<div class="blog-ttl">
										<h2><?php the_title(); ?></h2>
										</div>
										<figure>
											<a href="#"><img src="<?php echo $src[0]; ?>"/></a>
										</figure>
										
										<div class="item-content">
											
										<?php the_content(); ?>
										
										</div>
										
										<div class="footernewsletter">
											<p>To get more updates on Digital Marketing Trends, sign up for our Newsletter.</p>
											<form>
												<input type="text" placeholder="Your Email">
												<button>Subscribe</button>
											</form>
										</div>
										<div class="footersocial">
										<p>Enjoy this article? Dont forget to share</p>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/socialshare.jpg"/>
										</div>
											
									</div>							
								</div>
				

			<?php endwhile; // End of the loop.
			?>
                           </div>							
						</div>
					</div>
					<div class="lk-md-3">
						<div class="blog-sidebar">
						
							<div class="blog-side-col moreabout">
								<h2>Want to learn more about Agent 8</h2>
								<ul>
									<li>
										<a href=""> 
											<span class="resource-icon">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource-icon-1.png" style="width:34px;height:auto;">
											</span>
											<span class="resource-label"><span>Who we are</span></span>
										</a>
									</li>
									<li>
										<a href=""> 
											<span class="resource-icon">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource-icon-2.png" style="width:34px;height:auto;">
											</span>
											<span class="resource-label"><span>Why Join?</span></span>
										</a>
									</li>
									<li>
										<a href=""> 
											<span class="resource-icon">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource-icon-4.png" style="width:34px;height:auto;">
											</span>
											<span class="resource-label"><span>Write for Us</span></span>
										</a>
									</li>
									<li>
										<a href=""> 
											<span class="resource-icon">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/resource-icon-5.png" style="width:34px;height:auto;">
											</span>
											<span class="resource-label"><span>List Your Product or Service</span></span>
										</a>
									</li>
											
								</ul>
							</div>

						</div>
					</div>
				</div>
				</div>
		</div><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- .wrap -->

<?php get_footer();
