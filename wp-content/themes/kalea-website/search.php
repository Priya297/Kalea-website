<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */

get_header(); 

$top_image 				=	get_field('top_image','option');
$content 				=	get_field('content','option');
$detail_link 			=	get_field('detail_link','option');
$hello_text 			=	get_field('hello_text','option');
$author_name 			=	get_field('author_name','option');
$author_position 		=	get_field('author_position','option');
$instagram_link 		=	get_field('instagram_link','option');
$link_target 			= $instagram_link['target'] ? $instagram_link['target'] : '_self';
$instagram_top_images 	=	get_field('instagram_top_images','option');
$instagram_bottom_images =	get_field('instagram_bottom_images','option');
$instagram_title 		=	get_field('instagram_title','option');
?>


<!-- search page top section -->
<section class="search-page-top">
	<?php if(have_posts()): ?>
		<div class="container">
			<h1>Zoek resultaten voor “<?php printf( __( '%s', 'kaleawebsite' ), get_search_query()); ?>”</h1>

			<!-- links -->
			<ul class="search-links">
				<li><a href="#" title="All">All</a></li>
			</ul>

			<div class="result-count"><?php echo count($posts); ?> results found</div>

			<div class="search-result-section">
				<?php while(have_posts()): the_post(); ?>
					<div class="search-result">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<a href="<?php the_permalink();?>" class="read-more-link" title="Read More">Read More</a>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="pagination">
				<?php wp_numeric_posts_nav(); ?>
			</div>
			
			
		</div>
	<?php endif; ?>
</section>
<!-- search page top section -->
<?php if(!empty($detail_link) || !empty($top_image) || !empty($content)){ ?>
	<!-- new treatments section -->
	<div class="new-treatment-section">
		<div class="new-treatment-inner">
			<div class="container">
				<?php if(!empty($top_image)){ ?>
					<figure class="kalea-shine-img">
						<img src="<?php echo $top_image['url'];?>" alt="<?php echo $top_image['alt'];?>">
					</figure>
				<?php } ?>
				<?php echo $content; ?>
				<?php if(!empty($detail_link)){ ?>
					<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="transperent-btn-blue"><?php echo $detail_link['title'];?></a>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- new treatments section -->
<?php } if(!empty($hello_text) || !empty($author_name) || !empty($author_position)){ ?>
<!-- hello section -->
<section class="hello-section">
	<div class="container">
		<div class="hello-inner">
			<span class="hello-txt"><?php echo $hello_text; ?></span>
			<span class="author-name"><?php echo $author_name; ?></span>
			<span class="author-pos"><?php echo $author_position; ?></span>
		</div>
	</div>
</section>
<!-- hello section -->
<?php } if(!empty($instagram_title) || !empty($instagram_link) || !empty($instagram_top_images) || !empty($instagram_bottom_images)){ ?>
	<!-- instagram section -->
	<section class="instagram-section">
		<div class="container">
			<span class="instagram-txt"><?php echo $instagram_title;?></span>
			<div class="row">
				<?php if(!empty($instagram_link)){ ?>
					<div class="col-3">
						<a href="<?php echo $instagram_link['url'];?>" title="<?php echo $instagram_link['title'];?>" class="insta-btn" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $instagram_link['title'];?></a>
					</div>
				<?php } ?>
				<div class="col-9">
					<div class="insta-top">
						<?php if(have_rows('instagram_top_images','option')):
							while(have_rows('instagram_top_images','option')): the_row();
								$instagram_image = get_sub_field('instagram_image');
						?>
							<figure class="insta-image-link">
								<img src="<?php echo $instagram_image['url'];?>" alt="">
							</figure>
						<?php endwhile; endif; ?>
					</div>
					<div class="insta-bottom">
						<?php if(have_rows('instagram_bottom_images','option')):
							while(have_rows('instagram_bottom_images','option')): the_row();
								$image 	= get_sub_field('image');

						?>
							<figure class="insta-image-link">
								<img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>">
							</figure>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- instagram section -->
<?php } ?>
<?php get_footer(); ?>
