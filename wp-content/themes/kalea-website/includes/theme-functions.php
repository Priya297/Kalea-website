<?php 

/* Start Your Customization here*/
function register_my_menu() {
  register_nav_menu('policy-menu',__( 'Policy Menu' ));
 
}
add_action( 'init', 'register_my_menu' );
// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyAULG3jFYe2L10PLC-QX9Bqkm6qseS_yIs';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// Method 2: Setting.
function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAULG3jFYe2L10PLC-QX9Bqkm6qseS_yIs');
}
add_action('acf/init', 'my_acf_init');


// function new_submenu_class($menu) {    
//     $menu = preg_replace('/ class="sub-menu"/','/ class="menu-level-3" /',$menu);        
//     return $menu;      
// }

// add_filter('wp_nav_menu','new_submenu_class'); 


/**
 * ACF Load More Repeater
*/

// add action for logged in users
add_action('wp_ajax_my_repeater_show_more', 'my_repeater_show_more');
// add action for non logged in users
add_action('wp_ajax_nopriv_my_repeater_show_more', 'my_repeater_show_more');

function my_repeater_show_more() {
	// validate the nonce
	if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'my_repeater_field_nonce')) {
		exit;
	}
	// make sure we have the other values
	if (!isset($_POST['post_id']) || !isset($_POST['offset'])) {
		return;
	}
	$show = 3; // how many more to show
	$start = $_POST['offset'];
	$end = $start+$show;
	$post_id = $_POST['post_id'];
	// use an object buffer to capture the html output
	// alternately you could create a varaible like $html
	// and add the content to this string, but I find
	// object buffers make the code easier to work with
	ob_start();
	if(have_rows('flexible_content',$post_id)):
		while(have_rows('flexible_content',$post_id)): the_row();
			if( get_row_layout() == 'review_section'):

	if (have_rows('review_details', $post_id)) {
		$total = count(get_sub_field('review_details', $post_id));
		$count = 0;
		while (have_rows('review_details', $post_id)) {
			the_row();
				$image 			=	get_sub_field('image');
				$reviewer_name	=	get_sub_field('reviewer_name');
				$reviewer_date	=	get_sub_field('reviewer_date');
				$review_star	=	get_sub_field('review_star');
				$review			=	get_sub_field('review');
			if ($count < $start) {
				// we have not gotten to where
				// we need to start showing
				// increment count and continue
				$count++;
				continue;
			}
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
			$count++;
			if ($count == $end) {
				// we have shown the number, break out of loop
				break;
			}
		} // end while have rows
	} // end if have rows
endif; endwhile; endif; 
	$content = ob_get_clean();
	// check to see if we have shown the last item
	$more = false;
	if ($total > $count) {
		$more = true;
	}
	// output our 3 values as a json encoded array
	echo json_encode(array('content' => $content, 'more' => $more, 'offset' => $end));
	exit;
} // end function my_repeater_show_more


// Categories Custom txonomy filter ajax in charities
add_action('wp_ajax_nopriv_behandelingen_categories_filter', 'behandelingen_categories_filter');
add_action('wp_ajax_behandelingen_categories_filter', 'behandelingen_categories_filter');

function behandelingen_categories_filter(){
    $html = '';
    ob_start();
    $term_id = ($_POST['term_id']);
    $term_slug = $_POST['term_slug'];
    $parent_slug = $_POST['parent_slug'];
$taxonomy = 'behandelingen_types';
$postType = 'behandelingen';
$terms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => 0, 'hide_empty' => false]);
$childTerms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $term_id, 'hide_empty' => false]);
//foreach($terms as $term){
?>
<div class="treatment-result">
		<?php if(empty($parent_slug)){ ?>
			<h2><?php echo $term_slug; ?> Behandelingen</h2>
		<?php } ?>
	<?php 
	
	if(!empty($childTerms)){ 
	foreach($childTerms as $childTerm){
	?>
		<div class="treatment-result-inn">
			<h3><?php echo $childTerm->name; ?></h3>
			<div class="row">
				<?php $posts = new WP_Query(
                array(
                    'post_type'      => $postType,
                    'posts_per_page' => -1, // <-- Show all posts
                    'hide_empty'     => true,
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'terms'    => $childTerm->term_id,
                            'field'    => 'term_id'
                        )
                    )
                )
            );
             if ( $posts->have_posts() ):
             	while ( $posts->have_posts() ): $posts->the_post();
             	$featured_img = get_the_post_thumbnail_url(); 
             ?>
				<div class="treatments-inner">
					<div class="treatments-img">
						<a href="<?php the_permalink(); ?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img; ?>);"></a>
					</div>
					<h6><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
				</div>
				<?php endwhile; else:
	                echo 'No posts found';
	            endif; 
				 wp_reset_query();?>
			</div>
		</div>
	

	<?php } }else{  ?>
		<div class="treatment-result-inn">
			<?php if(!empty($parent_slug)){ ?>
				<h2><?php echo $parent_slug; ?> Behandelingen</h2>
				<h3><?php echo $term_slug; ?></h3>
			<?php } ?>
			<div class="row">
				<?php $posts = new WP_Query(
                array(
                    'post_type'      => $postType,
                    'posts_per_page' => -1, // <-- Show all posts
                    'hide_empty'     => true,
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'terms'    => $_POST['term_id'],
                            'field'    => $_POST['term_id'],
                        )
                    )
                )
            );
             if ( $posts->have_posts() ):
             	while ( $posts->have_posts() ): $posts->the_post();
             	$featured_img = get_the_post_thumbnail_url(); 
             ?>
				<div class="treatments-inner">
					<div class="treatments-img">
						<a href="<?php the_permalink();?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img; ?>);"></a>
					</div>
					<h6><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h6>
				</div>
			<?php endwhile; endif; ?>
			</div>
		</div>
		<?php }  ?>
</div>

	
	<?php $html = ob_get_clean();
        $loaded_content = array(
            'loaded_content' => $html,
            //'paged' => $paged,
        );
        wp_send_json_success($loaded_content);
        wp_die();
}


// Categories Custom txonomy filter ajax in charities
add_action('wp_ajax_nopriv_all_categories_filter', 'all_categories_filter');
add_action('wp_ajax_all_categories_filter', 'all_categories_filter');
function all_categories_filter(){
$html = '';
ob_start();
$taxonomy = 'behandelingen_types';
$postType = 'behandelingen';
$terms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => 0, 'hide_empty' => false]);
foreach($terms as $term){
?>
<div class="treatment-result">
	<h2><?php echo $term->name; ?> Behandekingen</h2>
	<?php 
	$childTerms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => $term->term_id, 'hide_empty' => false]);
	if(!empty($childTerms)){ 
	foreach($childTerms as $childTerm){
	?>
		<div class="treatment-result-inn">
			<h3><?php echo $childTerm->name; ?></h3>
			<div class="row">
				<?php $posts = new WP_Query(
                array(
                    'post_type'      => $postType,
                    'posts_per_page' => -1, // <-- Show all posts
                    'hide_empty'     => true,
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'terms'    => $childTerm->term_id,
                            'field'    => 'term_id'
                        )
                    )
                )
            );
             if ( $posts->have_posts() ):
             	while ( $posts->have_posts() ): $posts->the_post();
             	$featured_img = get_the_post_thumbnail_url(); 
             ?>
				<div class="treatments-inner">
					<div class="treatments-img">
						<a href="<?php the_permalink(); ?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img; ?>);"></a>
					</div>
					<h6><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h6>
				</div>
				<?php endwhile; else:
	                echo 'No posts found';
	            endif; 
				 wp_reset_query();?>
			</div>
		</div>
	

	<?php } }else{ ?>
		<div class="treatment-result-inn">
			<div class="row">
				<?php $posts = new WP_Query(
                array(
                    'post_type'      => $postType,
                    'posts_per_page' => -1, // <-- Show all posts
                    'hide_empty'     => true,
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'terms'    => $term->term_id,
                            'field'    => 'term_id'
                        )
                    )
                )
            );
             if ( $posts->have_posts() ):
             	while ( $posts->have_posts() ): $posts->the_post();
             	$featured_img = get_the_post_thumbnail_url(); 
             ?>
				<div class="treatments-inner">
					<div class="treatments-img">
						<a href="<?php the_permalink();?>" class="treatment-link set-back" style="background-image: url(<?php echo $featured_img; ?>);"></a>
					</div>
					<h6><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h6>
				</div>
			<?php endwhile; endif; ?>
			</div>
		</div>
		<?php } } ?>
</div>

<?php $html = ob_get_clean();
        $loaded_content = array(
            'loaded_content' => $html,
            //'paged' => $paged,
        );
        wp_send_json_success($loaded_content);
        wp_die(); 
}



function get_breadcrumb() { ?>
	<ul>
		<li>
			<?php 
	    	echo '<a href="'.home_url().'" rel="nofollow">Home</a>'; ?>
	    </li>
	<li>  
	    <?php 
	     // If post is a custom post type
            $post_type = get_post_type();
            $separator          = '&gt;';
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a>';
                //echo '<li class="separator"> ' . $separator . ' </li>';
              
            } ?>
   
</li>
<li>
	<span>
		<?php 
		if (is_single()) {
			if (is_single('behandelingen')) { 
				echo'<a href="'.home_url().'/behandelingen-overzicht/">Behandelingen</a>';
			}
		}elseif (is_category() || is_single()) {
	        //echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
	       // the_category(' &bull; '); 
	            if (is_single()) {
	             the_title();
	            }

	    } elseif (is_page()) {
	        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
	        echo the_title();
	    } elseif (is_search()) {
	        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
	        echo '"<em>';
	        echo the_search_query();
	        echo '</em>"';
	    } ?>
	</span>
 </li>
</ul>
<?php }



//subcategories filter
add_action('wp_ajax_nopriv_blog_categories_filter', 'blog_categories_filter');
add_action('wp_ajax_blog_categories_filter', 'blog_categories_filter');
function blog_categories_filter(){ 
$html = '';
ob_start(); 
$term_id = ($_POST['term_id']);
$the_query = new WP_Query(array(
	'post_type'=>'post', 
	'post_status'=>'publish', 
	'posts_per_page'=>9,
	'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'terms' => $term_id,
            'field' => 'term_id',
        )
    ),
)); 

if ( $the_query -> have_posts() ) :
	while ( $the_query -> have_posts() ) : $the_query -> the_post(); 
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
	<?php endwhile; endif;
	  $html = ob_get_clean();
        $loaded_content = array(
            'loaded_content' => $html,
            //'paged' => $paged,
        );
        wp_send_json_success($loaded_content);
        wp_die(); 
}


/*********************************************/
// Filter Category for Custum Posttype /
/*********************************************/

add_action('wp_ajax_filter_posts_by_category', 'ajax_filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'ajax_filter_posts_by_category');   
function ajax_filter_posts_by_category(){
	
    $terms = isset($_POST['cat_slug']) && !empty($_POST['cat_slug']) ? $_POST['cat_slug'] : 'all';
    $paged = $_POST['paged'];
    $posts = $_POST['posts'];
    $wp_query = null;
    $wp_query = new WP_Query();
    
    if($terms != 'all'){
      $args = array(
              'post_type' => 'post',
              'showposts'=>$posts,
              'paged'=>$paged,
			  'tax_query' => array(
                  array(
                      'taxonomy' => 'category',
                      'field'    => 'slug',
                      'terms'    => $terms
                  )
              ),
			  'order'=>'asc',
			  'orderby'=>'title',
          );
    }
    else{
        
        $args = array(
              'post_type' => 'post',
              'showposts'=>$posts,
			  'paged'=>$paged,
			  'order'=>'asc',
			  'orderby'=>'title',
			  'posts_per_page'=>9,
			);
    }
    
	$wp_query->query($args);
	$tpost = $wp_query->found_posts;
	$counter = 1;
	while ($wp_query->have_posts()) : $wp_query->the_post();
	global $post;
	
	$post_ID = $wp_query->post->ID;
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
	  
	<?php endwhile;
	// Set up next and prev links
	$this_page = $wp_query->get('paged');
	//echo $this_page;
	$max_page = $wp_query->max_num_pages;

	if($tpost > 9){
	echo '<div class="pagination">';
	
	if ($this_page != 1) 
	{
	  echo '<a class="text-link prev-nav" href="javascript:void(0);" onClick="filter_posts_by_category(\''.$terms.'\','.($this_page - 1).');"> Perv</a>';
	}
	echo '<ul class="page-nav">';
	for($i=1;$i<=$max_page;$i++)
	{
		echo '<li><a class="filtered-posts-newer page_a num-link" href="javascript:void(0);" onClick="filter_posts_by_category(\''.$terms.'\','.($i).');">'.$i.'</a></li>';
		
	}
	echo '</ul>';
	if ($this_page < $max_page) {
	  echo '<a class="text-link next-nav" href="javascript:void(0);" onClick="filter_posts_by_category(\''.$terms.'\','.($this_page + 1).');"> Next </a></li>';
	}
	echo '</div>';
    }
    die();
}

function wp_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="prev-nav">%s</li>' . "\n", get_previous_posts_link('Perv') );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="next-nav">%s</li>' . "\n", get_next_posts_link('Next') );
 
    echo '</ul>' . "\n";
 
}


// search page post display
function myprefix_search_posts_per_page($query) {
    if ( $query->is_search ) {
        $query->set( 'posts_per_page', '5' );
    }
    return $query;
}
add_filter( 'pre_get_posts','myprefix_search_posts_per_page' );


