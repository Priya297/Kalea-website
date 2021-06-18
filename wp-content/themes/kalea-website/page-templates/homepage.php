<?php
/**
 * Template Name: Home Page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


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
			<span class="hello-txt"><span class="quote-start">"</span><?php echo $testimonial_text; ?><span class="quote-close">"</span></span>
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
elseif( get_row_layout() == 'onze_pillaran_section'):
	$title 		=	get_sub_field('title');
	$content 	=	get_sub_field('content');
if(!empty($title) || !empty($content)):
?>
<!-- heading paragraph section -->
<section class="head-para-section">
	<div class="container">
		<div class="head-para-inner">
			<h2><?php echo $title; ?></h2>
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
			<?php if(have_rows('accordian_details')):
				while(have_rows('accordian_details')): the_row();
					$accordian_title = get_sub_field('accordian_title'
				);
					$accordian_content 	=	get_sub_field('accordian_content');
			?>
		        <li class="title"> 
		        	<a href="#" class="accordion-title"><?php echo $accordian_title; ?></a>
		            <div class="accordion-content">
		               <p><?php echo $accordian_content; ?></p>
		            </div>
		        </li>
		    <?php endwhile; endif; ?>
	    </ul>
	</div>
</section>
<!-- accordion section -->

<?php endif; 
elseif( get_row_layout() == 'instagram_section'):
	$title 				=	get_sub_field('title');
	$intgram_link 			=	get_sub_field('intgram_link');
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
					<a href="<?php echo $intgram_link['url'];?>" title="<?php echo $intgram_link['title'];?>" class="insta-btn"><?php echo $intgram_link['title'];?></a>
				</div>
			<?php } ?>
			<div class="col-9">
				<div class="insta-top">
					<?php if(have_rows('instagram_image')): 
						while(have_rows('instagram_image')): the_row();
							$top_image =	get_sub_field('top_image');
							$link 		=	get_sub_field('link');
					?>
						<a href="<?php echo $link['url'];?>" target="_blank" class="insta-image-link">
							<img src="<?php echo $top_image['url'];?>" alt="<?php echo $top_image['alt'];?>">
						</a>
					<?php endwhile; endif; ?>
				</div>
				<div class="insta-bottom">
					<?php if(have_rows('instagram_bottom_image')): 
						while(have_rows('instagram_bottom_image')): the_row();
							$bottom_image =	get_sub_field('bottom_image');
							$link 		=	get_sub_field('link');
					?>
						<a href="<?php echo $link['url'];?>" target="_blank" class="insta-image-link">
							<img src="<?php echo $bottom_image['url'];?>" alt="<?php echo $bottom_image['alt'];?>">
						</a>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- instagram section -->

<?php endif;
endif; endwhile; endif;?>

<?php get_footer(); ?>