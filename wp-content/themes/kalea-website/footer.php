<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */

$copyright_details = get_field('copyright_details','option');
$social_links 	=	get_field('social_links','option');
?>	
</div>
		<footer id="colophon" role="contentinfo">
			<div class="footer-upper">
				<div class="footer-container">
					<div class="row">
						<?php $footer_logo = get_field('footer_logo','option');
						if(!empty($footer_logo)){ ?>
							<div class="col-3">
								<a href="<?php echo site_url();?>" class="footer-logo">
									<img src="<?php echo $footer_logo['url'];?>" alt="<?php echo $footer_logo['alt'];?>">
								</a>
							</div>
						<?php } ?>
						<div class="col-3">
							<?php wp_nav_menu( array( 
								'menu' => 'Footer Menu' ,
								'theme_location' => 'footer-menu', 
								'container'      => '',
								'menu_class'     => 'footer-menu', 
							) );
							?>
						</div>
						<div class="col-3">
							<?php wp_nav_menu( array( 
								'theme_location' => 'policy-menu', 
								'container'      => '',
								'menu_class'     => 'footer-menu', 
							) );
							?>
						</div>
						<?php if(!empty(get_field('address_details','option'))){ ?>
							<div class="col-3">
								<?php echo get_field('address_details','option')?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>

			<?php if(!empty($copyright_details) || !empty($social_links)){ ?>
				<div class="footer-bottom">
					<div class="footer-container">
						<div class="row">
							<div class="col-6">
								<div class="copyright-text">&copy; <?php echo date('Y').' '.$copyright_details; ?></div>
							</div>
							<div class="col-6">
								<ul class="footer-social">
									<?php if(have_rows('social_links','option')):
										while(have_rows('social_links','option')): the_row();
											$icon_class_name = get_sub_field('icon_class_name');
											$link = get_sub_field('link');
											$link_target = $link['target'] ? $link['target'] : '_self';
									?>
										<li>
											<a href="<?php echo $link['url'];?>" target="<?php echo esc_attr( $link_target ); ?>" title="<?php echo $link['title'];?>">
												<span class="<?php echo $icon_class_name; ?>"></span>
											</a>
										</li>
									<?php endwhile; endif; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</footer><!-- #colophon -->
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
	
	<?php wp_footer(); ?>
	</body>
</html>