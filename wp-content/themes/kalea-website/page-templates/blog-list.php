<?php

/*Template Name: Blog List*/

get_header(); ?>


<!-- blog post filter section -->
<section class="blog-post-section">
	<div class="container">
		<div class="blog-post-inner">
			<h2><?php echo get_field('main_title');?></h2>
			<!-- filter option goes here -->
			<ul class="blog-filter-option">
				<?php 
				$term    = get_queried_object();
				$term_id = ( isset( $term->term_id ) ) ? (int) $term->term_id : 0;
				$categories = get_categories( array(
					'taxonomy'   => 'category',
					'parent'     => 0,
					'hide_empty' => 0, 
				) );
				foreach ( $categories as $category ) {
					$cat_ID        = (int) $category->term_id;
					$category_name = $category->name;
					$cat_class = ( $cat_ID == $term_id ) ? 'active' : 'not-active';
					?>
					<li class="<?php echo $cat_class; ?>">
						<a href="javascript:void(0);" title="<?php echo $category->name; ?>" class="blog-fil" data-term_id = "<?php echo $cat_ID;?>" onClick="filter_posts_by_category('<?php echo $category->slug;?>', 1)"><?php echo $category->name; ?></a>
					</li>
				<?php } ?>
			</ul>

			<div class="blog-filter-result">
				<h1><?php echo get_field('blog_title');?></h1>
				<div class="row">
					<?php $the_query = new WP_Query(array(
						'post_type'=>'post', 
						'post_status'=>'publish', 
						'posts_per_page'=>9,
					)); 
					$tpost = $the_query->found_posts; 
                    $total_pages = ceil($tpost / 9);
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) : $the_query->the_post(); 
							$featured_img = get_the_post_thumbnail_url();
							$categories = get_the_category();
							?>

							<div class="col-4">
								<div class="three-grid-inner">
									<div class="treatments-img">
										<a href="<?php the_permalink(); ?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img; ?>);"></a>
									</div>
									<span class="cat-date"><?php echo $categories[0]->name; ?> / <?php echo get_the_date('d.m.Y');?></span>
									<h2 class="treatment-title"><?php echo the_title(); ?></h2>
									<a href="<?php the_permalink(); ?>" title="Lees meer" class="link-rel">Lees meer</a>
								</div>
							</div>
						<?php endwhile; endif; wp_reset_postdata(); 
						$total_pages = $the_query->max_num_pages;
			            if($paged==null){
			                $paged = 1;
			            }
						?>
					</div>
					 
				</div>
			</div>
		</div>
	</section>
	<!-- blog post filter section -->

	<?php 
	$newsletter_title 	= get_field('newsletter_title');
	$newsletter_form	= get_field('newsletter_form');
	if(!empty($newsletter_title) || !empty($newsletter_form)):
		?>
	<!-- newsletter section -->
	<section class="newsletter-sec">
		<div class="container">
			<div class="row">
				<?php if(!empty($newsletter_title)){ ?>
					<div class="col-4">
						<div class="newsletter-title">
							<h2><?php echo $newsletter_title; ?></h2>
						</div>
					</div>
				<?php } if(!empty($newsletter_form)){ ?>
					<div class="col-8">
						<!-- newsletter form goes here -->
						<div class="newsletter-form-outer">
							<?php echo do_shortcode($newsletter_form);?>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- newsletter section -->

	<?php endif;  get_footer(); ?>


<script type="text/javascript">

jQuery(document).ready(function(){
	
	filter_posts_by_category('all', 1);
	
});
var filter_posts_by_category = function(cat_slug, paged){
	var ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
	var total_posts = 9; // -1 for show all posts
	var data = {
		'action'    : 'filter_posts_by_category',
		'cat_slug'    : cat_slug,
		'posts'        : total_posts,
		'paged'        : paged,
	};
	jQuery.ajax({
		method:"POST",
		url: ajax_url,
		data: data,
		success: function(result){
			jQuery('.blog-filter-result .row').html(result);
		},
		error: function(xhr,status,error){
			// console.log(error);
		}
	});
}
</script>