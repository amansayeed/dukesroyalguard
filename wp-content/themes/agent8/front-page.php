<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--================================Main Banner Start===================================-->
	<section id="first">
		<div class="lk-container">
			<div class="lk-row">
				<div class="lk-md-8">
					<div class="headervideo">
						<a href="#" onclick="showpopUpA();"><?php echo do_shortcode("[types field='home-banner-image-first' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?></a>
					</div>
				</div>
				<div class="lk-md-4">
						<a href="https://www.agent8.ca/Account/Register"><img src="<?php echo do_shortcode("[types field='home-page-second-banner' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?>"></a>
				</div>
			</div>
		</div>
	</section>
	<!--================================Main Banner End===================================-->

	
	<!--================================Overview Section Start===================================-->
	<section id="produts">
		<div class="lk-container">
			<div class="lk-row">
			<div class="owl-carousel owl-theme">
					<div class="item">
					<?php 
$id=7; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title; 
$slug = $post->post_name;
?>
						<?php echo do_shortcode("[types field='page-icon-image' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?>
						<h2><a href="blog.html"><?php echo $title; ?></a></h2>
						<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
						<a href="<?php echo $slug; ?>" class="more">View More</a>
					</div>

					<div class="item">
					<?php 
$id=14; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title; 
$slug = $post->post_name;
?>
						<?php echo do_shortcode("[types field='page-icon-image' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?>
						<h2><a href="blog.html"><?php echo $title; ?></a></h2>
						<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
						<a href="<?php echo $slug; ?>" class="more">View More</a>
						
					</div>

					<div class="item">
					<?php 
$id=16; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title;
$slug = $post->post_name; 
?>
						<?php echo do_shortcode("[types field='page-icon-image' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?>
						<h2><a href="blog.html"><?php echo $title; ?></a></h2>
						<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
						<a href="<?php echo $slug; ?>" class="more">View More</a>
					</div>
					<div class="item">
					<?php 
$id=21; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title;
$slug = $post->post_name; 
?>
						<?php echo do_shortcode("[types field='page-icon-image' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?>
						<h2><a href="blog.html"><?php echo $title; ?></a></h2>
						<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
						<a href="<?php echo $slug; ?>" class="more">View More</a>
					</div>
					<div class="item">
					<?php 
$id=18; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title;
$slug = $post->post_name; 
?>
						<?php echo do_shortcode("[types field='page-icon-image' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?>
						<h2><a href="blog.html"><?php echo $title; ?></a></h2>
						<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
						<a href="<?php echo $slug; ?>" class="more">View More</a>
					</div>
					
            </div>
            </div>
			  	
        </div>
	</section>
	<!--================================Overview Section End===================================-->
	
	
	
	
	
	
	
	<!--================================Overview Section Start===================================-->
	<section id="features" class="gray">
		<div class="lk-container">

			<div class="lk-row">
				<div class="lk-lg-4 lk-md-4 lk-sm-6 lk-xs-12">
					<div class="item">
					<?php 
$id=36; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title; 
$src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'medium-thumbnail' );
?>
						<img src="<?php echo $src[0]; ?>"/>
						<div class="text">
							<h2><a href="marketing-store.html"><?php echo $title; ?></a></h2>
							<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
							<a href="marketing-store.html" class="more">View More</a>
						</div>
					</div>
				</div>
				<div class="lk-lg-4 lk-md-4 lk-sm-6 lk-xs-12">
					<div class="item">
					<?php 
$id=39; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title; 
$src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'medium-thumbnail' );
?>
						<img src="<?php echo $src[0]; ?>"/>
						<div class="text">
							<h2><a href="find-a-vendor.html"><?php echo $title; ?></a></h2>
							<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
							<a href="find-a-vendor.html" class="more">View More</a>
							
						</div>
					</div>
				</div>
				<div class="lk-lg-4 lk-md-4 lk-sm-6 lk-xs-12">
					<div class="item">
					<?php 
$id=42; 
$post = get_page($id); 
$excerpt = $post->post_content;
$title = $post->post_title; 
$src = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'medium-thumbnail' );
?>
						<a href="online-newspaper-ads.html"><img src="<?php echo $src[0]; ?>"/></a>
						<div class="text">
							<h2><a href="online-newspaper-ads.html"><?php echo $title; ?></a></h2>
							<?php echo do_shortcode("[types field='short-description'][/types]"); ?>
							<a href="online-newspaper-ads.html" class="more">View More</a>
						</div>
					</div>
				</div>			
            </div>
				
        </div>
	</section>
	<!--================================Overview Section End===================================-->
	
	
	<!--================================Overview Section Start===================================-->
	<section id="bottomsection">
		<div class="lk-container">
			<div class="lk-row">
			<?php
global $post;
                                    $custom_post_type = 'footer-banner';
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
				<div class="lk-lg-3 lk-md-3 lk-sm-4 lk-xs-12">
					<a href="https://www.agent8.ca/Account/Register"><img  src="<?php echo $src[0]; ?>"/></a>
				</div>
				
				<?php } ?>
            </div> 	
        </div>
	</section>
	<!--================================Overview Section End===================================-->
	
	<div class="newsletter">
		<div class="lk-container">
			<div class="lk-lg-10 lk-md-10 lk-sm-12 lk-xs-12">
				<form>
					<label>Sign-up for our Newsletter</label>
					<input type="text" placeholder="Enter your email">
					<button>Subscribe Now</button>
				</form>
			</div>
		</div>
	</div>
	
<?php get_footer();
