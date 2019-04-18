<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
					<li>Blog</li>
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
					<div class="lk-md-12">
						<div class="blog-header">
							<h1>Insights, ideas & inspiration to help your business</h1>
							<p>Real Estate blogs are a great way to keep up to date on the latest marketing trends and new product releases. Agent8’s blog is filled with marketing content and interviews with agents who are making a difference with their innovative approach to real estate marketing.  
							</p>
							<br>
							<p>If you’ve got a real estate blog idea or would like to be featured on Agent8, <a href="https://www.agent8.ca/contact-us">let us know!</a> </p>
						</div>
					</div>
				</div>
				<div class="lk-row">
					<div class="lk-md-12">
						<div class="blog-listing">
							<div class="lk-row">
								<?php
global $post;
                                    $custom_post_type = 'post';
                                            $args = array(
                                            'post_type' => $custom_post_type,
                                            
                                            'post_status' => 'publish',
                                            'order' => 'ASC',
                                            
                                        );
                                        
                                        $gp_query = new WP_Query($args);
										
                                        while ($gp_query->have_posts()) { 
                                                    $gp_query->the_post(); 
													
													$thumbnail_id    = get_post_thumbnail_id(get_the_ID());
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium-thumbnail' );
													?>
								<div class="lk-md-4">
									<div class="blog-item">
										<figure>
											<a href="blog-single.html"><img src="<?php echo $src[0]; ?>"/></a>
										</figure>
										<div class="blog-category">
											
										</div>
										<div class="item-content">
											<h2><a href="blog-single.html"><?php the_title(); ?><a></h2>
											<a href="<?php the_permalink(); ?>" class="lk-btn">Read More</a>
										</div>
									</div>							
								</div>
										<?php } ?>
							</div>							
						</div>
					</div>					
				</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer();
