<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */

get_header(); ?>

<div class="page-content-section d-flex flex-wrap justify-content-center align-center align-items-center">
	<div class="bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/404-bg.jpg)"></div>
	<div class="container">
		<div id="content">
			<div class="main-con-sec error-main">

				<?php  logo_header(); 	?>

				<h1 class="title-404 fadeInUp"><?php _e( '404', 'kaleawebsite' ); ?></h1>
				
				<div class="content-404">
					<h3><?php _e( 'Page Not Found!', 'kaleawebsite' ); ?></h3>
					<?php 
						if(!empty(options('msg_404_page'))):
							echo '<p>'.options('msg_404_page').'</p>'; 
						endif;
					?>
					<div class="orange-link">
						<a href="<?php echo site_url(); ?>" class="cta-button">Back to Home</a>
					</div>
				</div><!-- .entry-content -->
				
			</div>
		</div><!-- #content -->
	</div><!-- .container -->
</div>
<?php get_footer(); ?>
