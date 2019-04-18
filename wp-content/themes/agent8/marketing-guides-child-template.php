<?php
/**
 * Template Name:Marketing Guides child Pages
 *
 */
get_header(); ?>
<div class="breadcrumbs">
		<div class="lk-container">
		
				<ul>
					<li><a href="index.html">Home</a> > </li>
					<li><a href="marketing-guide.html">Marketing Guides</a> > </li>
					<li>Free Content Planning Template</li>
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
					
				</div>
				
				<div class="item-detail">
					<div class="item">
						<div class="item-content">
							<div class="lk-row">
								<div class="lk-md-8">
									<?php the_content(); ?>
									
								</div>
								<div class="lk-md-4">
									<a href="https://www.agent8.ca/Account/Register"><?php echo do_shortcode("[types field='home-banner-image-first' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?></a>
									<a href="https://www.agent8.ca/Account/Register"><?php echo do_shortcode("[types field='home-page-second-banner' alt='%%ALT%%' title='%%TITLE%%' size='full' align='none'][/types]"); ?></a>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php get_footer();?>