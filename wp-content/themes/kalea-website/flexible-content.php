<?php

/*Template Name: Flexible Template*/

get_header();
if(have_rows('page_blocks')):
	while(have_rows('page_blocks')): the_row();
		if(get_row_layout() == 'home_banner_section'):
			$background_image = get_sub_field('background_image');
			$banner_title 	=	get_sub_field('banner_title');
			$journey_link	=	get_sub_field('journey_link');

	if(!empty($background_image) || !empty($banner_title) || !empty($journey_link)){ 
?>
<!-- home banner -->
<section class="home-banner set-back" style="background-image: url('<?php echo $background_image['url'];?>');">
	<div class="desk-show">
		<div class="container">
			<div class="home-banner-content">
				<div class="home-banner-title"><?php echo $banner_title; ?></div>
				<?php if(!empty($journey_link)){ ?>
					<a href="<?php echo $journey_link['url'];?>" title="<?php echo $journey_link['title'];?>" class="transperent-btn-w"><?php echo $journey_link['title'];?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php } ?>
<div class="home-banner mbl-show">
	<div class="container">
		<div class="home-banner-content">
			<div class="home-banner-title"><?php echo $banner_title; ?></div>
			<?php if(!empty($journey_link)){ ?>
				<a href="<?php echo $journey_link['url'];?>" title="<?php echo $journey_link['title'];?>" class="blue-btn">	<?php echo $journey_link['title'];?></a>
			<?php } ?>
		</div>
	</div>
</div>
<!-- home banner -->

<?php 
elseif( get_row_layout() == 'content_section'):
	$content 	=	get_sub_field('content');
if(!empty($content) ): 
?>
<!-- small container section -->
<section class="small-container-outer">
	<div class="small-container-inner">
		<div class="inner-container">
			<?php echo $content; ?>
		</div>
	</div>
</section>
	<!-- small container section -->

<!-- Over Ons intro section -->
<?php endif; 
elseif( get_row_layout() == 'over_ons_introduction'):
	$title 		=	get_sub_field('title');
	$content 	=	get_sub_field('content');
if(!empty($content) || !empty($title)): 
?>
<section class="over-ons-intro-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if(!empty($title)){ ?>
				<div class="col-4">
					<div class="over-ons-head">
						<h1><?php echo $title; ?></h1>
					</div>
				</div>
			<?php } if(!empty($content)){ ?>
				<div class="col-8">
					<div class="over-ons-detail">
						<?php echo $content; ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Over Ons intro section -->

<?php endif; 
elseif( get_row_layout() == 'over_ons_lees_meer_section'):
	$side_image = 	get_sub_field('side_image');
	$content 	=	get_sub_field('content');
	$detail_link =  get_sub_field('detail_link');
if(!empty($content) || !empty($side_image) || !empty($detail_link)): 
?>
<section class="two-column-grid-section gray-sec">
	<?php if(!empty($side_image)){ ?>
		<div class="col-6">
			<div class="two-column-grid-img set-back" style="background-image: url(<?php echo $side_image['url'];?>);"></div>
		</div>
	<?php } ?>
	<div class="col-6">
		<div class="two-column-grid-content">
			<?php echo $content; ?>
			<?php if(!empty($detail_link)){ ?>
				<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="transperent-btn-blue"><?php echo $detail_link['title'];?></a>
			<?php } ?>
		</div>
	</div>
</section>
<?php 
endif; 
elseif( get_row_layout() == 'consult_section'):
	$consult_side_image =	get_sub_field('consult_side_image');
	$consult_title 		= get_sub_field('consult_title');
	$consult_details 	=	get_sub_field('consult_details');
if(!empty($consult_side_image	) || !empty($consult_title) || !empty($consult_details)): 
?>
<!-- contact top section -->
<section class="contact-top-section">
	<div class="container">
		<div class="row">
			<?php if(!empty($consult_side_image)){ ?>
				<div class="col-6">
					<figure class="contact-image-sec">
						<img src="<?php echo $consult_side_image['url'];?>" alt="<?php echo $consult_side_image['alt'];?>">
					</figure>
				</div>
			<?php } if(!empty($consult_title) || !empty($consult_details)){ ?>
				<div class="col-6">
					<div class="contact-right-sec">
						<h1><?php echo $consult_title;?></h1>
						<!-- iframe goes here -->
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- contact top section -->

<?php endif;
elseif( get_row_layout() == 'testimonial_section'):
	$testimonial_text =	get_sub_field('testimonial_text');
	$testimonial_name = get_sub_field('testimonial_name');
	$designation 	=	get_sub_field('designation');
if(!empty($testimonial_name) || !empty($testimonial_text) || !empty($designation)): 
?>
<!-- hello section -->
<section class="hello-section">
	<div class="container">
		<div class="hello-inner">
			<span class="hello-txt"><?php echo $testimonial_text; ?></span>
			<span class="author-name"><?php echo $testimonial_name;?></span>
			<span class="author-pos"><?php echo $designation; ?></span>
		</div>
	</div>
</section>
<!-- hello section -->


<?php endif;
elseif( get_row_layout() == 'powerful_section'):
	$side_image 	=	get_sub_field('side_image');
	$title 			=	get_sub_field('title');
	$logo 			=	get_sub_field('logo');
if(!empty($side_image) || !empty($title) || !empty($logo)): 
?>
<!-- powerfull section -->
<section class="powerfull-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if(!empty($side_image) || isset($side_image)){ ?>
				<div class="col-5">
					<figure class="powerfull-img">
						<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>" />
					</figure>
				</div>
			<?php } if(!empty($title) || !empty($logo)){ ?>
				<div class="col-7">
					<div class="right-sec">
						<h1><?php echo $title; ?></h1>
						<?php if(!empty($logo)){ ?>
							<figure class="k-logo">
								<img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt'];?>" />
							</figure>
						<?php } ?>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- powerfull section -->

<?php endif;
elseif( get_row_layout() == 'book_consultant_section'):
	$side_image 		=	get_sub_field('side_image');
	$title 				=	get_sub_field('title');
	$content 			=	get_sub_field('content');
	$book_consult_link	=	get_sub_field('book_consult_link');
if(!empty($side_image) || !empty($title) || !empty($content) || !empty($book_consult_link)):
?>
<!-- book consultent section -->
<section class="book-consultent-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if(!empty($side_image)){ ?>
				<div class="col-6">
					<figure class="book-consultent-img">
						<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>" />
					</figure>
				</div>
			<?php } if(!empty($title) || !empty($content) || !empty($book_consult_link)){ ?>
			<div class="col-6">
				<div class="right-sec">
					<h2><?php echo $title; ?></h2>
					<p><?php echo $content; ?></p>
					<?php if(!empty($book_consult_link)){ ?>
						<a href="<?php echo $book_consult_link['url'];?>" title="<?php echo $book_consult_link['title'];?>" class="blue-btn"><?php echo $book_consult_link['title'];?></a>
					<?php } ?>
				</div>
			</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- book consultent section -->

<?php endif;
elseif( get_row_layout() == 'video_section'):
	$background_image 		=	get_sub_field('background_image');
	$heading_title 			=	get_sub_field('heading_title');
	$subheading 			=	get_sub_field('subheading');
	$video_id				=	get_sub_field('video_id');
if(!empty($background_image) || !empty($heading_title) || !empty($subheading) || !empty($video_id)):
?>
<!-- video section -->
<section class="video-section set-back" style="background-image: url('<?php echo $background_image['url'];?>');">
	<div class="container">
		<a class="popup-youtube play-icon" href="http://www.youtube.com/watch?v=<?php echo $video_id; ?>">
			<i class="fas fa-play"></i>
		</a>
		<span class="txt1"><?php echo $heading_title; ?></span>
		<span class="txt2"><?php echo $subheading; ?></span>
	</div>
</section>
<!-- video section -->

<?php endif; 
elseif( get_row_layout() == 'less_meer_section'):
	$side_image 		=	get_sub_field('side_image');
	$content 			=	get_sub_field('content');
	$detail_link 			=	get_sub_field('detail_link');
	$bottom_text				=	get_sub_field('bottom_text');
if(!empty($side_image) || !empty($content) || !empty($detail_link) || !empty($bottom_text)):
?>
<!-- Lees meer section -->
<section class="lees-meer-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-7">
				<div class="right-sec">
					<?php echo $content; ?>
					<?php if(!empty($detail_link)){ ?>
						<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="blue-btn"><?php echo $detail_link['title'];?></a>
					<?php } ?>
					<span class="looking-good-txt"><?php echo $bottom_text; ?></span>
				</div>
			</div>
			<?php if(!empty($side_image)){ ?>
				<div class="col-5">
					<figure class="lees-meer-img">
						<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>" />
					</figure>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Lees meer section -->

<?php endif; 
elseif( get_row_layout() == 'ultherapy_section'):
	$side_image 		=	get_sub_field('side_image');
	$content 			=	get_sub_field('content');
	$detail 			=	get_sub_field('detail');
	$book_consult_link	=	get_sub_field('book_consult_link');
if(!empty($side_image) || !empty($content) || !empty($detail) || !empty($book_consult_link)):
?>
<!-- Ultherapy section -->
<section class="ultherapy-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if(!empty($side_image)){ ?>
				<div class="col-5">
					<figure class="ultherapy-img">
						<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>">
					</figure>
				</div>
			<?php } ?>
			<div class="col-7">
				<div class="right-sec">
					<?php echo $content; ?>
					<?php if(!empty($detail)){ ?>
						 <a href="<?php echo $detail['url'];?>" class="blue-btn" title="<?php echo $detail['title'];?>"><?php echo $detail['title'];?></a>
					<?php } if(!empty($book_consult_link)){ ?>
						 <a href="<?php echo $book_consult_link['url'];?>" class="blue-btn" title="<?php echo $book_consult_link['title'];?>"><?php echo $book_consult_link['title'];?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Ultherapy section -->
<?php endif; 
elseif( get_row_layout() == 'cart_section'):
	$cart_details 	=	get_sub_field('cart_details');
if(!empty($cart_details)):
?>
<section class="cart-section">
	<div class="container">
		<div class="row">
			<?php if(have_rows('cart_details')):
				while(have_rows('cart_details')): the_row();
					$cart_title 	=	get_sub_field('cart_title');
					$price 			=	get_sub_field('price');
					$price_text 	=	get_sub_field('price_text');
					$cart_list 		=	get_sub_field('cart_list');
			?>
				<div class="col-3">
					<div class="cart-inner">
						<h2><?php echo $cart_title; ?></h2>
						<div class="price-sec"><span class="price"><?php echo $price; ?></span><span class="naand">/<?php echo $price_text; ?></span></div>
						<ul class="cart-list">
							<?php if(have_rows('cart_list')):
							while(have_rows('cart_list')): the_row();
								$detail =	get_sub_field('detail');
						?>
							<li><?php echo $detail; ?></li>
						<?php endwhile; endif; ?>
						</ul>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>

<?php endif; 
elseif( get_row_layout() == 'onze_pillaran_section'):
	$title 		=	get_sub_field('title');
	$content 	=	get_sub_field('content');
if(!empty($title) || !empty($content)):
?>
<!-- heading paragraph section -->
<section class="head-para-section">
	<div class="container">
		<div class="head-para-inner">
			<?php if(is_front_page()){ ?>
				<h2><?php echo $title; ?></h2>
			<?php }else{ ?>
				<h1><?php echo $title; ?></h1>
			<?php } ?>
			<p><?php echo $content; ?></p>
		</div>
	</div>
</section>
<!-- heading paragraph section -->

<?php endif; 
elseif( get_row_layout() == 'post_detail_section'):
	$post_details 		=	get_sub_field('post_details');
	
if(!empty($post_details)):
?>
<!-- title para link section -->
<section class="title-para-link-sec">
	<div class="title-para-link-outer">
		<?php if(have_rows('post_details')):
			while(have_rows('post_details')): the_row();
				$title 	=	get_sub_field('title');
				$content 	=	get_sub_field('content');
				$link 	=	get_sub_field('link');
		?>
			<div class="col-3">
				<div class="title-para-link-inn">
					<h3><a href="<?php echo $link['url'];?>" title=""><?php echo $title; ?></a></h3>
					<p><?php echo $content; ?></p>
					<a href="#" class="arrow-link" title="Lees meer"><i class="fas fa-arrow-right"></i></a>
					<a href="<?php echo $link['url'];?>" title="<?php echo $link['title'];?>" class="link-text"><?php echo $link['title'];?></a>
				</div>
			</div>	
		<?php endwhile; endif; ?>
	</div>
</section>
<!-- title para link section -->

<?php endif; 
elseif( get_row_layout() == 'kalea_voor_mannen_section'):
	$side_image 		=	get_sub_field('side_image');
	$content 			=	get_sub_field('content');
	$detail_link		=	get_sub_field('detail_link');

if(!empty($side_image) || !empty($content) || !empty($detail_link)):
?>

<!-- Kalea voor mannen section -->
<section  class="kalea-voor-mannen-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if(!empty($side_image)){ ?>
				<div class="col-5">
					<figure class="kalea-voor-mannen-img-sec">
						<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>">
					</figure>
				</div>
			<?php } ?>
			<div class="col-7">
				<div class="kalea-voor-mannen-detail">
					<?php echo $content; ?>
					<?php if(!empty($detail_link)){ ?>
						<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="blue-btn"><?php echo $detail_link['title'];?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Kalea voor mannen section -->

<?php endif; 
elseif( get_row_layout() == 'accordian_section'):
	$title 				=	get_sub_field('title');
	$content 			=	get_sub_field('content');
	$accordian_details	=	get_sub_field('accordian_details');

if(!empty($title) || !empty($content) || !empty($accordian_details)):
?>
<!-- accordion section -->
<section class="accordion-section">
	<div class="container">
		<div class="tab-head-section">
			<h2><?php echo $title; ?></h2>
			<p><?php echo $content; ?></p>
		</div>
		<ul id="top-accordian" class="accordion">
			<?php $i=1;
			if(have_rows('accordian_details')):
				while(have_rows('accordian_details')): the_row();
					$accordian_title = get_sub_field('accordian_title'
				);
					$accordian_content 	=	get_sub_field('accordian_content');
					$content 	=	get_sub_field('content');
					$form 		=	get_sub_field('form');
			?>
		        <li class="title"> 
		        	<a href="#" class="accordion-title"><?php echo $accordian_title; ?></a>
		            <div class="accordion-content">
		            	<?php if($accordian_content == 'form'){?>
		            		<div class="accordian-form">
		            			<?php echo do_shortcode($form); ?>
		            		</div>
		            	<?php } if($accordian_content == 'content'){ ?>
				            <p><?php echo $content; ?></p>
				        <?php } ?>
		            </div>
		        </li>
		    <?php $i++; endwhile; endif; ?>
	    </ul>
	</div>
</section>
<!-- accordion section -->

<?php endif; 
elseif( get_row_layout() == 'instagram_section'):
	$title 				=	get_sub_field('title');
	$intgram_link 			=	get_sub_field('intgram_link');
	$link_target 	= $intgram_link['target'] ? $intgram_link['target'] : '_self';
	$instagram_image		=	get_sub_field('instagram_image');
	$instagram_bottom_image	=	get_sub_field('instagram_bottom_image');

if(!empty($title) || !empty($intgram_link) || !empty($instagram_image) || !empty($instagram_bottom_image)):
?>
<!-- instagram section -->
<section class="instagram-section">
	<div class="container">
		<span class="instagram-txt"><?php echo $title; ?></span>
		<div class="row">
			<?php if(!empty($intgram_link)){ ?>
				<div class="col-3">
					<a href="<?php echo $intgram_link['url'];?>" title="<?php echo $intgram_link['title'];?>" class="insta-btn" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $intgram_link['title'];?></a>
				</div>
			<?php } ?>
			<div class="col-9">
				<div class="insta-top">
					<?php if(have_rows('instagram_image')): 
						while(have_rows('instagram_image')): the_row();
							$top_image =	get_sub_field('top_image');
							
					?>
						<figure class="insta-image-link">
							<img src="<?php echo $top_image['url'];?>" alt="<?php echo $top_image['alt'];?>">
						</figure>
					<?php endwhile; endif; ?>
				</div>
				<div class="insta-bottom">
					<?php if(have_rows('instagram_bottom_image')): 
						while(have_rows('instagram_bottom_image')): the_row();
							$bottom_image =	get_sub_field('bottom_image');
							
					?>
						<figure class="insta-image-link">
							<img src="<?php echo $bottom_image['url'];?>" alt="<?php echo $bottom_image['alt'];?>">
						</figure>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- instagram section -->


<?php endif; 
elseif( get_row_layout() == 'testimonial_with_image_section'):
	$side_image 		=	get_sub_field('side_image');
	$title 				=	get_sub_field('title');
	$content			=	get_sub_field('content');
	$link				=	get_sub_field('link');

if(!empty($side_image) || !empty($title) || !empty($content) || !empty($link)):
?>
<!-- testimonial section -->
<section class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="testimonial-detail">
					<h2><?php echo $title; ?></h2>
					<p><?php echo $content; ?></p>
					<?php if(!empty($side_image)){ ?>
						<a href="<?php echo $side_image['url'];?>" title="<?php echo $side_image['title'];?>" class="transperent-btn-blue"><?php echo $link['title'];?></a>
					<?php } ?>
				</div>
			</div>
			<?php if(!empty($side_image)){ ?>
				<div class="col-6 img-grid-outer">
					<figure class="testim-image">
						<img src="<?php echo $side_image['url'];?>" alt="<?php echo $side_image['alt'];?>">
					</figure>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- testimonial section -->

<?php endif; 
elseif( get_row_layout() == 'advice_section'):
	$video_cover_image 		=	get_sub_field('video_cover_image');
	$title 				=	get_sub_field('title');
	$content			=	get_sub_field('content');
	$video_id				=	get_sub_field('video_id');
	$detail 		=	get_sub_field('detail');

if(!empty($side_image) || !empty($title) || !empty($content) || !empty($detail) || !empty($video_id)):
?>

<!-- advice section -->
<section class="advice-section">
	<div class="container">
		<div class="row">
			<div class="col-7">
				<?php if(!empty($video_id) || !empty($video_cover_image)){ ?>
					<div class="advice-image">
						<div class="video-sec">
							<img id="video-cover" src="<?php echo $video_cover_image['url'];?>" alt="<?php echo $video_cover_image['alt']; ?>">
							<button id="play" class="play-btn"></button>
							<iframe id="player" src="https://www.youtube.com/embed/<?php echo $video_id; ?>" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="col-5">
				<div class="advice-detail">
					<h2><?php echo $title; ?></h2>
					<p><?php echo $content; ?></p>
					<?php if(!empty($detail)){ ?>
						<a href="<?php echo $detail['url'];?>" title="<?php echo $detail['title'];?>" class="transperent-btn-blue"><?php echo $detail['title'];?></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- advice section -->

<?php endif; 
elseif( get_row_layout() == 'treatment_section'):
	$top_image 			=	get_sub_field('top_image');
	$title 				=	get_sub_field('title');
	$content			=	get_sub_field('content');
	$detail_link		=	get_sub_field('detail_link');

if(!empty($top_image) || !empty($title) || !empty($content) || !empty($detail_link)):
?>

<!-- new treatments section -->
<div class="new-treatment-section">
	<div class="new-treatment-inner">
		<div class="container">
			<?php if(!empty($top_image)){ ?>
				<figure class="kalea-shine-img">
					<img src="<?php echo $top_image['url'];?>" alt="<?php echo $top_image['alt'];?>">
				</figure>
			<?php } ?>
			<h2><?php echo $title; ?></h2>
			<p><?php echo $content; ?></p>
			<?php if(!empty($detail_link)){ ?>
				<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="transperent-btn-blue"><?php echo $detail_link['title'];?></a>
			<?php } ?>
		</div>
	</div>
</div>
<!-- new treatments section -->

<?php endif;
elseif( get_row_layout() == 'behandelingen_details'):
?>
<section class="content-filter-section">
	<div class="container">
		<div class="content-filter-inner">
			<div class="content-left-menu">
				<ul class="content-filter-option">					
					<li class="active all-filter">
						<a href="#" title="Alle behandelingen">Alle behandelingen</a>
					</li>
					<?php 
					$parents = get_terms( 'behandelingen_types', array( 'parent' => 0 ) );
					$categories = get_the_terms( $post->ID, 'behandelingen_types' );
					foreach( $parents as $parent ){
						$term_name = $parent->name;
                        $term_slug = $parent->slug;
                        $term_id = $parent->term_id; ?>
						<li>
							<a href="javascript:void(0);" title="<?php echo $parent->name; ?>" data-term_id="<?php echo $term_id; ?>" data-term_slug="<?php echo $term_slug; ?>" class="cat-filter"><?php echo $parent->name; ?></a>
							<ul>
								<?php $wsubargs = array('hierarchical'=>1,'show_option_none'=>'','hide_empty'=>0,'parent'=>$parent->term_id,'taxonomy'=>'behandelingen_types');
								$wsubcats = get_categories($wsubargs); 
								foreach ($wsubcats as $wsc):
									$term_name = $wsc->name;
                        			$term_slug = $wsc->slug;
                        			$term_id = $wsc->term_id; 
									?>
									<li>
										<a href="javascript:void(0);" title="<?php echo $wsc->name;?>" data-term_id="<?php echo $term_id; ?>" data-term_slug="<?php echo $term_slug; ?>" data-parent_id = "<?php echo $parent->term_id; ?>"  data-parent_slug = "<?php echo  $parent->slug;  ?>" class="cat-filter"><?php echo $wsc->name;  ?></a>
									</li>
									<?php 
								endforeach; ?>
							</ul>
						</li>
						<?php } ?>	
				</ul>
			</div>
			<div class="content-right-result">
				<!-- result 1 -->
			<?php   
			    $taxonomy = 'behandelingen_types';
			    $postType = 'behandelingen';
			    $terms = get_terms(['taxonomy' => $taxonomy, 'orderby' => 'term_id', 'parent' => 0, 'hide_empty' => false]);
			    foreach($terms as $term){
			?>
				<div class="treatment-result">
					<h2><?php echo $term->name; ?> behandelingen</h2>
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
							<?php endwhile; endif; wp_reset_postdata();?>
							</div>
						</div>
						<?php } } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php 
elseif( get_row_layout() == 'quote_section'):
	$quote_content 	=	get_sub_field('quote_content');
	$quote_author 	=	get_sub_field('quote_author');
	if(!empty($quote_author) || !empty($quote_content)):
?>

<!-- quote text section -->
<section class="quote-section-outer">
	<div class="inner-container">
		<div class="quote-inner-section">
			<p><?php echo $quote_content; ?></p>
			<span class="quote-sec-author"><?php echo $quote_author; ?></span>
		</div>
	</div>
</section>
<!-- quote text section -->
<?php endif;
elseif( get_row_layout() == 'reserve_section'):
	$side_image 	=	get_sub_field('side_image');
	$content 		=	get_sub_field('content');
	$detail_link 	=	get_sub_field('detail_link');
	if(!empty($side_image) || !empty($content) || !empty($detail_link)):
?>
<!-- full grid 2 column reverse -->
<section class="two-column-grid-reverse-section gray-sec">
	<div class="col-6">
		<div class="two-column-grid-reverse-img set-back" style="background-image: url(<?php echo $side_image['url'];?>);"></div>
	</div>
	<div class="col-6">
		<div class="two-column-grid-reverse-content">
			<?php echo $content; ?>
			<?php if(!empty($detail_link)){ ?>
				<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="blue-btn"><?php echo $detail_link['title'];?></a>
			<?php } ?>
		</div>
	</div>
</section>
<!-- full grid 2 column reverse -->
<?php endif;
elseif( get_row_layout() == 'face_slider_section'):
	$main_title 	=	get_sub_field('main_title');
	$subheading 	=	get_sub_field('subheading');
	$face_slider 	=	get_sub_field('face_slider');
	if(!empty($main_title) || !empty($subheading) || !empty($face_slider)):
?>
<!-- face slider section -->
<section class="face-slider-section">
	<div class="container">
		<h2><?php echo $main_title; ?></h2>
		<h3><?php echo $subheading; ?></h3>
		<div class="face-slider">
			<?php if(have_rows('face_slider')):
				while(have_rows('face_slider')): the_row();
			?>
				<div class="face-slide">
					<div class="face-slde-img-sec">
						<?php $i=1;
						if(have_rows('slider_details')):
							while(have_rows('slider_details')): the_row();
								$image 	= get_sub_field('image');
								$title 	= get_sub_field('title');
						?>
						<div class="face-slide-<?php echo $i; ?>">
							<div class="face-slide-img set-back" style="background-image: url('<?php echo $image['url'];?>');"></div>
							<span><?php echo $title; ?></span>
						</div>
						<?php $i++; endwhile; endif; ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<!-- face slider section -->
<?php endif;
elseif( get_row_layout() == 'new_treatment_section'):
	$top_image 			=	get_sub_field('top_image');
	$title 				=	get_sub_field('title');
	$background_image 	=	get_sub_field('background_image');
	$detail_link		=	get_sub_field('detail_link');
	if(!empty($top_image) || !empty($title) || !empty($content)):
?>
<!-- Ontdek Street section -->
<section class="ontdek-street-section set-back" style="background-image: url('<?php echo $background_image['url'];?>');">
	<div class="container">
		<figure class="kalea-shine-img">
			<img src="<?php echo $top_image['url'];?>" alt="<?php echo $top_image['alt'];?>">
		</figure>
		<h2><?php echo $title; ?></h2>
		<?php if(!empty($detail_link)){	?>
			<a href="<?php echo $detail_link['url'];?>" title="<?php echo $detail_link['title'];?>" class="transperent-btn-w"><?php echo $detail_link['title'];?></a>
		<?php } ?>
	</div>
</section>
<!-- Ontdek Street section -->
<?php endif;
elseif( get_row_layout() == 'greatest_behandelingen'):
	$behandelingen_detail 	=	get_sub_field('behandelingen_detail');
	$title 	=	get_sub_field('title');
if(!empty($behandelingen_detail) ):
?>
<!-- three grid column section -->
<section class="three-grid-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row">
			<?php foreach( $behandelingen_detail as $post ): 
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
				wp_reset_postdata(); ?>	
		</div>
	</div>
</section>
<!-- three grid column section -->


<?php endif;
elseif( get_row_layout() == 'our_specialist_section'):
	$specialist_details 	=	get_sub_field('specialist_details');
	$title 	=	get_sub_field('title');
if(!empty($specialist_details) ):
?>
<!-- three grid column section -->
<section class="three-grid-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row">
			<?php foreach( $specialist_details as $post ): 
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
				wp_reset_postdata(); ?>	
		</div>
	</div>
</section>
<!-- three grid column section -->

<?php endif;
elseif( get_row_layout() == 'our_specialist_section'):
	$specialist_details 	=	get_sub_field('specialist_details');
	$title 	=	get_sub_field('title');
if(!empty($specialist_details) ):
?>
<!-- three grid column section -->
<section class="three-grid-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row">
			<?php foreach( $specialist_details as $post ): 
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
				wp_reset_postdata(); ?>	
		</div>
	</div>
</section>
<!-- three grid column section -->

<?php endif;
elseif( get_row_layout() == 'our_team_section'):
	$team_details 	=	get_sub_field('team_details');
	$title 	=	get_sub_field('title');
if(!empty($team_details) ):
?>
<!-- three grid column section -->
<section class="three-grid-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row">
			<?php foreach( $team_details as $post ): 
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
				wp_reset_postdata(); ?>	
		</div>
	</div>
</section>
<!-- three grid column section -->

<?php endif;
elseif( get_row_layout() == 'our_founders'):
	$founder_details 	=	get_sub_field('founder_details');
	$title 	=	get_sub_field('title');
if(!empty($founder_details) ):
?>
<!-- three grid column section -->
<section class="three-grid-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row">
			<?php foreach( $founder_details as $post ): 
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
				wp_reset_postdata(); ?>	
		</div>
	</div>
</section>
<!-- three grid column section -->

<?php endif;
elseif( get_row_layout() == 'working_kalea_section'):
	$work_details 	=	get_sub_field('work_details');
	$title 	=	get_sub_field('title');
if(!empty($work_details) ):
?>
<!-- three grid column section -->
<section class="three-grid-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<div class="row">
			<?php foreach( $work_details as $post ): 
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
				wp_reset_postdata(); ?>	
		</div>
	</div>
</section>
<!-- three grid column section -->

<?php endif;
elseif( get_row_layout() == 'interior_slider_section'):
	$slider_title 	=	get_sub_field('slider_title');
	$title 			=	get_sub_field('title');
	$slider_images  = 	get_sub_field('slider_images');
if(!empty($work_details) || !empty($title) || !empty($slider_images)):
?>
<!-- interior slider section -->
<section class="interior-slider-section">
	<div class="container">
		<h2><?php echo $title; ?></h2>
		<h3><?php echo $slider_title; ?></h3>
	</div>
	<div class="interior-slider">
		<?php if(have_rows('slider_images')):
			while(have_rows('slider_images')): the_row();
				$image 	=	get_sub_field('image');
		?>
			<div class="interior-slide">
				<div class="interior-slide-img-sec set-back" style="background-image: url('<?php echo $image['url']; ?>');">
				</div>
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>
<!-- interior slider section -->

<?php endif;
elseif( get_row_layout() == 'contact_section'):
	$contact_top_image 	=	get_sub_field('contact_top_image');
	$contact_title 			=	get_sub_field('contact_title');
	$contact_form  = 	get_sub_field('contact_form');
if(!empty($contact_top_image) || !empty($contact_title) || !empty($contact_form)):
?>
<!-- contact top section -->
<section class="contact-top-section">
	<div class="container">
		<div class="row align-items-center">
			<?php if(!empty($contact_top_image)){ ?>
				<div class="col-6">
					<figure class="contact-image-sec">
						<img src="<?php echo $contact_top_image['url'];?>" alt="<?php echo $contact_top_image['alt'];?>">
					</figure>
				</div>
			<?php } ?>
			<div class="col-6">
				<div class="contact-right-sec">
					<h1><?php echo $contact_title; ?></h1>
					<!-- form goes here -->
					<div class="form-sec">
						<?php echo do_shortcode($contact_form);?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- contact top section -->
<?php endif;
elseif( get_row_layout() == 'contact_info_section'):
	$contact_info 			=	get_sub_field('contact_info');
	$contact_details  = 	get_sub_field('contact_details');
if(!empty($contact_info) || !empty($contact_details)):
?>
<!-- contact info section -->
<section class="contact-info-section">
	<div class="container">
		<div class="contact-info-top">
			<?php echo $contact_info; ?>
		</div>
		<div class="row">
			<?php if(have_rows('contact_details')):
				while(have_rows('contact_details')): the_row();
					$contact_detail = get_sub_field('contact_detail');
			?>
				<div class="col-4">
					<div class="contact-detail-inner">
						<?php echo $contact_detail; ?>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<!-- contact info section -->
<?php endif;
elseif( get_row_layout() == 'map_section'):
	$map_api_key 	=	get_sub_field('map_api_key');
if(!empty($map_api_key)):
?>
<!-- map section -->
<section class="map-section">
	<div class="map-outer">
		
        <div class="acf-map">
            <div class="marker" data-lat="<?php echo $map_api_key['lat']; ?>" data-lng="<?php echo $map_api_key['lng']; ?>">
            </div>
        </div>
	</div>
</section>
<!-- map section -->
<?php 
endif; 
endif; endwhile; endif;?>

<?php get_footer(); ?>
