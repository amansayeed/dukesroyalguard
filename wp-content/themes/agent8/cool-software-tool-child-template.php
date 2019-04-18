<?php
/**
 * Template Name:Cool software tool child Page
 *
 */
get_header(); ?>
<div class="breadcrumbs">
		<div class="lk-container">
		
				<ul>
					<li><a href="index.html">Home</a> > </li>
					<li><a href="find-a-vendor.html">Find a Vendor</a> > </li>
					<li><a href="cool-software-tools.html">Cool Software Tools</a> > </li>
					<li>TripLog</li>
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
					<h1><?php the_title();  ?></h1>
					
				</div>
				
				<div class="item-detail">
				<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 
			  $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium-thumbnail' );
			?>
					<div class="item">
						
						<div class="item-content">
						<figure>
							<a href="#"><img class="thumb" src="<?php echo $src[0]; ?>"/></a>
							
						</figure>
						<?php the_content(); ?>
							
						</div>
					</div>
					<?php endwhile; ?>
					<div class="item">
						<div class="item-content">
							<h3>Who Is This Product Right For?</h3>
							<ul class="my-list">
						<?php echo do_shortcode("[types field='who-is-this-product-right'][/types]"); ?>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="item-content">
							<h3>Price</h3>
							<div class="infobar">
								<?php echo do_shortcode("[types field='prices'][/types]"); ?>
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="item-content">
							<h3>Ratings and Reviews</h3>
							<ul class="unstyle">
								<?php echo do_shortcode("[types field='ratings-and-reviews'][/types]"); ?>
							</ul>
						</div>
					</div>
					
					
					<div class="item">
						<div class="item-content bought ">
							<h3>Customers who viewed this item also viewed</h3>
							<div class="lk-row">
							<?php
 global $post;
                                    
                                            $args = array(
                                            
                                            'post_type'      => 'page',
											'posts_per_page' => 3,
											'post_parent'    => 106,
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
									<div class="ito">
										<img src="<?php echo $src [0]; ?>"/>
										<p><strong><?php the_title(); ?></strong></p>
										<?php $only_conent_url = add_query_arg( array( '' => '' ), get_permalink( $post->ID ) ); ?>
										<a href="<?php echo esc_url( $only_conent_url ); ?>">learn More</a>
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
<?php get_footer();?>