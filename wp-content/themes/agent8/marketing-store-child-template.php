<?php
/**
 * Template Name:Marketing store child Pages
 *
 */
get_header(); ?>
<div class="breadcrumbs">
		<div class="lk-container">
		
				<ul>
					<li><a href="index.html">Home</a> > </li>
					<li><a href="marketing-store.html">Marketing Store</a> > </li>
					<li>EZ Blogging + Content Sharing
</li>
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
					<h1><?php the_title(); ?></h1>
					<a onclick="showpopUpA();" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/vd2.jpg"/></a>
				</div>
				<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); 
			 $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium-thumbnail' );
			
			?>
				<div class="item-detail">
					<div class="item">
					
						<figure>
							<a href="#"><img src="<?php echo $src[0]; ?>"/></a>
						</figure>
						<div class="item-content">
							
							<?php the_content(); ?>
							
						</div>
					</div>
					
					<div class="item">
						<div class="item-content">
							<h3>Who Is This Product Right For?</h3>
							<ul class="my-list">
						<?php echo do_shortcode("[types field='who-is-this-product-right-for'][/types]");?>
							</ul>
						</div>
					</div>
					
					
					<div class="item">
						<div class="item-content">
							<h3>How to Order It</h3>
							<p>To order any product join Agent 8 <p>
							<p><a href="https://www.agent8.ca/Account/Register" class="lk-btn">Join Now</a><p>
							<br>
							<p><span class="stps">Step 1.</span> Click the Add to Cart button at the bottom of the page.</p>
							<p><span class="stps">Step 2.</span> Fill in your company information and process your credit card. If you've already filled in your Agent8 Profile, the fields will be pre-populated for you.</p>
							<p><span class="stps">Step 3.</span> Answer some questions that will assist us in fulfilling your order.</p>
							<p><span class="stps">Step 4.</span> We'll reach out to you within 3 business days to get the ball rolling.</p>
						</div>
					</div>
					<?php $cancellation =  do_shortcode("[types field='cancellation'][/types]");?>
					<?php if(!empty($cancellation)) {  ?>
					<div class="item">
						<div class="item-content">
							<h3>Cancellation</h3>
							<div class="infobar">
								<?php echo $cancellation; ?>								
							</div>
						</div>
					</div>
					<?php } ?>
					<div class="item">
						<div class="item-content">
							<h3>Price</h3>
							<div class="infobar">
								<span class="rs"><?php echo do_shortcode("[types field='price'][/types]");?></span>								
							</div>
						</div>
					</div>
					
					<div class="item">
						<div class="item-content bought ">
							<h3>Frequently Bought with…</h3>
							<div class="lk-row">
							<?php
                                            global $post;
                                    
                                            $args = array(
                                            
                                            'post_type'      => 'page',
											'posts_per_page' => 3,
											'post_parent'    => 36,
                                            'post_status' => 'publish',
                                            'order' => 'ASC',
                                            
                                        );
                                        
                                        $gp_query = new WP_Query($args);
										
                                        while ($gp_query->have_posts()) { 
                                                    $gp_query->the_post(); 
												
													$thumbnail_id    = get_post_thumbnail_id(get_the_ID());
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium-thumbnail' );
					
					$slug = $post->post_name;
													?>
								<div class="lk-md-4">
									<div class="ito">
										<img src="<?php echo $src[0];?>"/>
										<p><strong><?php the_title();  ?></strong></p>
										<?php $only_conent_url = add_query_arg( array( '' => '' ), get_permalink( $post->ID ) ); ?>
										<a href="<?php echo esc_url( $only_conent_url ); ?>">learn More</a>
									</div>
								</div>
										<?php } ?>
								
							</div>
						</div>
					</div>
					
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer();?>