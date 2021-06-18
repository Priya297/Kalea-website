<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage kaleawebsite
 * @since kaleawebsite 1.0
 */

get_header(); ?>

<div id="main" class="wrapper">

<?php if(have_rows('flexible_content')):
	while(have_rows('flexible_content')): the_row();
		if( get_row_layout() == 'banner_section'):
			$banner_background_image = get_sub_field('banner_background_image');
			$title 		 =  get_sub_field('title');
			$content 	 =  get_sub_field('content');
			$detail_link =  get_sub_field('detail_link');
			$link_target = $detail_link['target'] ? $detail_link['target'] : '_self';
if(!empty($banner_background_image) || !empty($title) || !empty($content) || !empty($detail_link)): 
?>	
<!-- inner banner 2 -->
<section class="inner-page-banner set-back" style="background-image: url('<?php echo $banner_background_image['url']; ?>');">
	<div class="container">
		<div class="banner-content">
			<div class="banner-heading"><?php echo $title; ?></div>
			<p><?php echo $content; ?></p>
			<?php if(!empty($detail_link)){ ?>
				<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" target="<?php echo esc_attr( $link_target ); ?>" class="transperent-btn-w"><?php echo $detail_link['title'];?></a>
			<?php } ?>
		</div>
	</div>
</section>
<!-- inner banner 2 -->

<!-- breadcrumb section -->
<div class="breadcrumb-section">
	<div class="container">
		<?php echo get_breadcrumb(); ?>
	</div>
</div>
<!-- breadcrumb section -->
<?php endif; 
elseif( get_row_layout() == 'content_section' ):
	$content 			=	get_sub_field('content');
	$side_image 		=	get_sub_field('side_image');
	$bottom_content 	=	get_sub_field('bottom_content');
if(!empty($content) || !empty($side_image) || !empty($bottom_content)): 
?>
<!-- small container section -->
<section class="small-container-outer">
	<div class="small-container-inner">
		<div class="inner-container">
			<?php echo $content; ?>
		</div>
	</div>
	<div class="small-container-inner">
		<div class="inner-container">
			<?php echo $bottom_content; ?>
		</div>
	</div>
	<?php if(!empty($side_image)){ ?>
		<figure class="inject-img">
			<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>">
		</figure>
	<?php } ?>
</section>
<!-- small container section -->

<?php endif; 
elseif( get_row_layout() == 'fractional_section' ):
	$content 			=	get_sub_field('content');
	$fractional_title 		=	get_sub_field('fractional_title');
	$bottom_content 	=	get_sub_field('bottom_content');
	$fractional_details =	get_sub_field('fractional_details');
if(!empty($content) || !empty($fractional_title) || !empty($bottom_content)): 
?>
<!-- fractional microneedling section -->
<section class="fractional-microneedling-outer">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="fractional-left">
					<div class="fractional-left-top">
						<?php echo $content; ?>
					</div>
					<div class="fractional-left-bottom">
						<?php echo $bottom_content; ?>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="fractional-right">
					<div class="fractional-right-inn">
						<h3><?php echo $fractional_title; ?></h3>
						<div class="table">
							<?php if(have_rows('fractional_details')):
								while(have_rows('fractional_details')): the_row();
									$table_left_data = get_sub_field('table_left_data');
									$table_right_data = get_sub_field('table_right_data');
							?>
								<div class="table-row">
									<div class="tbl-lft"><?php echo $table_left_data; ?></div>
									<div class="tbl-right"><?php echo $table_right_data; ?></div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fractional microneedling section -->
<?php endif; 
elseif( get_row_layout() == 'ontdesk_street_section' ):
	$background_image 	=	get_sub_field('background_image');
	$top_image 			=	get_sub_field('top_image');
	$title 				=	get_sub_field('title');
	$detail_link		=	get_sub_field('detail_link');
if(!empty($background_image) || !empty($top_image) || !empty($title)): 
?>
<!-- Ontdek Street section -->
<section class="ontdek-street-section set-back" style="background-image: url('<?php echo $background_image['url'];?>');">
	<div class="container">
		<?php if(!empty($top_image)){ ?>
			<figure class="kalea-shine-img">
				<img src="<?php echo $top_image['url'];?>" alt="<?php echo $top_image['alt'];?>">
			</figure>
		<?php } ?>
		<h2><?php echo $title; ?></h2>
		<?php if(!empty($detail_link)){ ?>
			<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="transperent-btn-w"><?php echo $detail_link['title'];?></a>
		<?php } ?>
	</div>
</section>
<!-- Ontdek Street section -->

<?php endif; 
elseif( get_row_layout() == 'fractional_specialization_section' ):
	$title 	=	get_sub_field('title');
	$treatment_specialization 	=	get_sub_field('treatment_specialization');
if(!empty($title) || !empty($treatment_specialization) ): 
?>

<!-- Fractional Microneedling Specialisten -->
<section class="fractional-specialisten-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row align-item-center">
			<?php foreach( $treatment_specialization as $post ): 
        		setup_postdata($post); 
        		$featured_img_url = get_the_post_thumbnail_url($post->ID); 
        		?>
				<div class="col-4">
					<div class="fractional-specialisten-inner">
						<div class="treatments-img">
							<a href="<?php the_permalink(); ?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img_url; ?>);"></a>
						</div>
						<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" class="specialisten-title"><?php the_title();?></a>
					</div>
				</div>
			<?php endforeach; wp_reset_postdata(); ?>
		</div>
	</div>
</section>
<!-- Fractional Microneedling Specialisten -->
<?php endif; 
elseif( get_row_layout() == 'our_device_section' ):
	$title 	=	get_sub_field('title');
	$content 	=	get_sub_field('content');
if(!empty($title) || !empty($content) ): 
?>
<!-- our devices section -->
<section class="small-container-outer gray-sec">
	<div class="inner-container">
		<h2><?php echo $title; ?></h2>
		<p><?php echo $content; ?></p>
	</div>
</section>
<!-- our devices section -->

<?php endif; 
elseif( get_row_layout() == 'latest_technologies_section' ):
	$select_latest_technologies 	=	get_sub_field('select_latest_technologies');
if(!empty($select_latest_technologies) ): 
?>
<!-- three grid column section -->
<section class="three-grid-section gray-sec">
	<div class="container">
		<div class="row">
			<?php foreach( $select_latest_technologies as $post ): 
        		setup_postdata($post); 
        		$featured_img_url = get_the_post_thumbnail_url($post->ID); 
        		?>
				<div class="col-4">
					<div class="three-grid-inner">
						<div class="treatments-img">
							<a href="<?php the_permalink(); ?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img_url; ?>);"></a>
						</div>
						<div class="treatment-title"><?php the_title(); ?></div>
						<a href="<?php the_permalink(); ?>" title="Lees meer" class="link-rel">Lees meer</a>
					</div>
				</div>
			<?php endforeach; 
			wp_reset_postdata(); 
			?>
		</div>
	</div>
</section>
<!-- three grid column section -->

<?php endif; 
elseif( get_row_layout() == 'video_section' ):
	$video_background_image 	=	get_sub_field('video_background_image');
	$video_id 		=	get_sub_field('video_id');
	$heading_text 		=	get_sub_field('heading_text');
	$subheading_text 	=	get_sub_field('subheading_text');
if(!empty($video_background_image) || !empty($heading_text) || !empty($subheading_text)): 
?>

<!-- video section -->
<section class="video-section set-back" style="background-image: url('<?php echo $video_background_image['url'];?>');">
	<div class="container">
		<a class="popup-youtube play-icon" href="http://www.youtube.com/watch?v=<?php echo $video_id; ?>">
			<i class="fas fa-play"></i>
		</a>
		<span class="txt1"><?php echo $heading_text; ?></span>
		<span class="txt2"><?php echo $subheading_text; ?></span>
	</div>
</section>
<!-- video section -->

<?php endif; 
elseif( get_row_layout() == 'about_section' ):
	$about_content 	=	get_sub_field('about_content');
if(!empty($about_content) ): 
?>
<!-- about treatment section -->
<section class="small-container-outer">
	<div class="inner-container">
		<?php echo $about_content; ?>
	</div>
</section>
<!-- about treatment section -->

<?php endif; 
elseif( get_row_layout() == 'accordion_section' ):
	$accordion_title 	=	get_sub_field('accordion_title');
	$accordian_content 	=	get_sub_field('accordian_content');
	$accordion_details 	=	get_sub_field('accordion_details');
if(!empty($accordion_title) || !empty($accordian_content) || !empty($accordion_details)): 
?>
<!-- accordion section -->
<section class="accordion-section">
	<div class="container">
		<div class="tab-head-section">
			<h2><?php echo $accordion_title; ?></h2>
			<p><?php echo $accordian_content; ?></p>
		</div>

		<ul id="top-accordian" class="accordion">
			<?php if(have_rows('accordion_details')):
				while(have_rows('accordion_details')): the_row();
					$title 		=	get_sub_field('title');
					$content 	=	get_sub_field('content');
			?>
				<li class="title"> 
					<a href="#" class="accordion-title"><?php echo $title; ?></a>
					<div class="accordion-content">
						<p><?php echo $content; ?></p>
					</div>
				</li>
			<?php endwhile; endif; ?>
		</ul>
	</div>
</section>
<!-- accordion section -->

<?php endif; 
elseif( get_row_layout() == 'review_section' ):
	$title 				=	get_sub_field('title');
	$review_details 	=	get_sub_field('review_details');
	$more_review 		=	get_sub_field('more_review');
if(!empty($title) || !empty($review_details	) || !empty($more_review)): 
?>
<!-- review section -->
<section class="review-section">
	<div class="container">
		<h3><?php echo $title; ?></h3>
		<?php 
		    $total = count(get_sub_field('review_details'));
			$count = 0;
			$number = 2;	
		if(have_rows('review_details')):
			while(have_rows('review_details')): the_row();
				$image 			=	get_sub_field('image');
				$reviewer_name	=	get_sub_field('reviewer_name');
				$reviewer_date	=	get_sub_field('reviewer_date');
				$review_star	=	get_sub_field('review_star');
				$review			=	get_sub_field('review');
		?>
			<div class="review-inner">
				<div class="review-img set-back" style="background-image: url('<?php echo $image['url'];?>');">
				</div>
				<div class="review-detail">
					<div class="review-upper">
						<div class="review-upper-left">
							<div class="review-author"><?php echo $reviewer_name; ?></div>
							<div class="review-date"><?php echo $reviewer_date; ?></div>
						</div>
						<div class="star-rating">
							<?php if( $review_star == 'one' ) {?>
							<!-- full star rating -->
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							<?php } if( $review_star == 'one-half'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							<?php } if( $review_star == 'two'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							<?php } if( $review_star == 'two-half'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							
							<?php } if( $review_star == 'three'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>
								<i class="far fa-star"></i>
							
							<?php } if( $review_star == 'three-half'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<i class="far fa-star"></i>
							
							<?php } if( $review_star == 'four'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="far fa-star"></i>

							<?php } if( $review_star == 'four-half'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>		
							
							<?php } if( $review_star == 'five'){ ?>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
							<?php } ?>
							
						</div>
					</div>
					<p><?php echo $review; ?></p>
				</div>
			</div>
			<?php
				if ($count == $number) {
					// we've shown the number, break out of loop
					break;
				} ?>					
			<?php $count++; endwhile;
		else : endif;
		?>
		<?php if ($total > $number) { ?> 
			<div class="text-center">
				<a href="javascript: my_repeater_show_more();"  class="blue-btn load-more" title="<?php echo $more_review['title'];?>"><?php echo $more_review['title'];?></a>
			</div>
		<?php } ?>
	</div>
</section>
<!-- review section -->

<?php endif; 
elseif( get_row_layout() == 'two_column_section' ):
	$side_image 		=	get_sub_field('side_image');
	$title 				=	get_sub_field('title');
	$content 			=	get_sub_field('content');
	$detail_link 		=	get_sub_field('detail_link');
if(!empty($side_image) || !empty($detail_link) || !empty($content) || !empty($content)): 
?>

<section class="two-column-grid-section gray-sec">
	<div class="col-6">
		<div class="two-column-grid-img set-back" style="background-image: url(<?php echo $side_image['url'];?>);"></div>
	</div>
	<div class="col-6">
		<div class="two-column-grid-content">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $content; ?></p>
			<?php if(!empty($detail_link)){ ?>
				<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="transperent-btn-blue"><?php echo $detail_link['title'];?></a>
			<?php } ?>
		</div>
	</div>
</section>

<?php endif; 
elseif( get_row_layout() == 'quote_section' ):
	$quote_content 		=	get_sub_field('quote_content');
	$quote_author 		=	get_sub_field('quote_author');
if(!empty($quote_content) || !empty($quote_author)): 
?>

<section class="quote-section">
	<div class="inner-container">
		<p><?php echo $quote_content; ?></p>
		<div class="quote-author"><?php echo $quote_author; ?></div>
	</div>
</section>
<?php endif; 
endif; endwhile; endif; ?>
</div><!-- #main .wrapper -->

<script type="text/javascript">
	var my_repeater_field_post_id = <?php echo $post->ID; ?>;
	var my_repeater_field_offset = <?php echo $number + 1; ?>;
	var my_repeater_field_nonce = '<?php echo wp_create_nonce('my_repeater_field_nonce'); ?>';
	var my_repeater_ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
	var my_repeater_more = true;
	
	function my_repeater_show_more() {
		
		// make ajax request
		jQuery.post(
			my_repeater_ajax_url, {
				// this is the AJAX action we set up in PHP
				'action': 'my_repeater_show_more',
				'post_id': my_repeater_field_post_id,
				'offset': my_repeater_field_offset,
				'nonce': my_repeater_field_nonce
			},
			function (json) {
				// add content to container
				// this ID must match the containter 
				// you want to append content to
				jQuery('.review-section .container').append(json['content']);
				// update offset
				my_repeater_field_offset = json['offset'];
				// see if there is more, if not then hide the more link
				if (!json['more']) {
					// this ID must match the id of the show more link
					jQuery('.load-more').css('display', 'none');
				}
			},
			'json'
		);
	}
	
</script>

<?php get_footer(); ?>
