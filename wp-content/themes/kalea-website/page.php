<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */

get_header(); ?>

<div id="main" class="wrapper">
	
	<?php 
		/*======================================================
		 *       PAGE HEADER OR BANNER SECTION 
		 *====================================================== */
			
		get_template_part( 'page-templates/page/page', 'header' ); 
			
	?>
	<!---  .page-content-section Start -->
	<div class="page-content-section pt-5 pb-5">
		<div class="container">
			<div class="full-width">						
				<div class="row">
					<div class="col-sm-12">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php
							get_template_part( 'page-templates/page/content/content', 'page' ); 
							echo do_shortcode( '[flexlayout name=page_blocks]' );
						?>
					<?php endwhile; // end of the loop. ?>
					</div>
				</div>						
			</div><!-- #primary -->			
		</div>
	</div>
	<!---  .page-content-section END -->

</div><!-- #main .wrapper -->
<?php get_footer(); ?>
