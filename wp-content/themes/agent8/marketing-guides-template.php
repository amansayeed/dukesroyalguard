<?php
/**
 * Template Name:Marketing Guides Page
 *
 */
get_header(); ?>
<div class="breadcrumbs">
		<div class="lk-container">
		
				<ul>
					<li><a href="index.html">Home</a> > </li>
					<li>Marketing Guides</li>
				</ul>
			
		</div>
	</div>
	<div class="main-inner">
		<div class="lk-container">
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
				<div class="pageheader">
				<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 
			
			
			?>
					<h1><?php the_title();  ?></h1>
					<?php the_content(); ?>
					
					<?php endwhile; ?>
				</div>
				
				<div class="item-listing">
				<?php
global $post;
                                    
                                            $args = array(
                                            
                                            'post_type'      => 'page',
											'posts_per_page' => 4,
											'post_parent'    => $post->ID,
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
					<div class="item">
						<figure>
							<a href="<?php echo $post->post_name; ?>"><img src="<?php echo $src[0]; ?>"/></a>
						</figure>
						<div class="item-content">
							<h2><a href="<?php echo $post->post_name; ?>"><?php the_title(); ?><a></h2>
							<?php echo do_shortcode("[types field='short-description'][/types]"); ?><a href="<?php echo $post->post_name; ?>" class="more">Read More</a>
						</div>
					</div>
										<?php } ?>					
					<div class="item readall">
						<p><strong>Join Agent 8 to Read All Marketing Guides</strong></p>
							
							<a href="https://www.agent8.ca/Account/Register">Join Now</a>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
<?php get_footer();?>